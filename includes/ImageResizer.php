<?php

class ImageResizer
{
    private string $sourceDir;
    private string $cacheDir;

    public function __construct(string $sourceDir, string $cacheDir)
    {
        $this->sourceDir = rtrim($sourceDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
        $this->cacheDir = rtrim($cacheDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir, 0775, true);
        }
    }

    public function getResized(string $source, int $width, ?int $height = null, int $quality = 80): string
    {
        $isRemote = (bool) filter_var($source, FILTER_VALIDATE_URL);
        $extension = strtolower(pathinfo(parse_url($source, PHP_URL_PATH) ?? '', PATHINFO_EXTENSION));
        if ($extension === '') {
            $extension = 'jpg';
        }

        $cacheKey = md5($source . '|' . $width . '|' . $height . '|' . $quality);
        $cachedPath = $this->cacheDir . $cacheKey . '.' . $extension;

        if (file_exists($cachedPath)) {
            return $cachedPath;
        }

        try {
            $sourcePath = $isRemote ? $this->downloadRemote($source) : $this->sourceDir . ltrim($source, DIRECTORY_SEPARATOR);

            if (!is_file($sourcePath)) {
                throw new InvalidArgumentException("Image not found: {$source}");
            }

            [$originalWidth, $originalHeight] = getimagesize($sourcePath);
            if ($originalWidth <= 0 || $originalHeight <= 0) {
                throw new RuntimeException('Invalid image dimensions.');
            }

            if ($height === null) {
                $ratio = $originalHeight / $originalWidth;
                $height = (int) round($width * $ratio);
            }

            $image = $this->createImageResource($sourcePath, $extension);
            if (!$image) {
                throw new RuntimeException('Unable to create image resource.');
            }

            $resized = imagecreatetruecolor($width, $height);
            imagealphablending($resized, false);
            imagesavealpha($resized, true);

            imagecopyresampled($resized, $image, 0, 0, 0, 0, $width, $height, $originalWidth, $originalHeight);

            $this->saveImage($resized, $cachedPath, $extension, $quality);

            imagedestroy($image);
            imagedestroy($resized);

            if ($isRemote) {
                @unlink($sourcePath);
            }

            return $cachedPath;
        } catch (Throwable $exception) {
            error_log($exception->getMessage());

            return $source;
        }
    }

    private function downloadRemote(string $url): string
    {
        $tmpPath = tempnam(sys_get_temp_dir(), 'img');

        $contents = $this->fetchRemoteContents($url);

        if ($contents === false) {
            throw new RuntimeException("Unable to download image: {$url}");
        }

        file_put_contents($tmpPath, $contents);

        return $tmpPath;
    }

    private function fetchRemoteContents(string $url)
    {
        if (function_exists('curl_init')) {
            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_CONNECTTIMEOUT => 5,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_USERAGENT => 'StaraPodkowaImageFetcher/1.0',
            ]);

            $contents = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_RESPONSE_CODE) ?: curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $error = curl_error($ch);
            curl_close($ch);

            if ($contents !== false && $httpCode >= 200 && $httpCode < 300) {
                return $contents;
            }

            if ($error) {
                error_log("cURL error while downloading image: {$error}");
            }
        }

        $context = stream_context_create([
            'http' => [
                'timeout' => 10,
                'follow_location' => 1,
                'user_agent' => 'StaraPodkowaImageFetcher/1.0',
            ],
            'https' => [
                'timeout' => 10,
                'follow_location' => 1,
                'user_agent' => 'StaraPodkowaImageFetcher/1.0',
            ],
        ]);

        return @file_get_contents($url, false, $context);
    }

    private function createImageResource(string $path, string $extension)
    {
        return match ($extension) {
            'png' => imagecreatefrompng($path),
            'gif' => imagecreatefromgif($path),
            'webp' => function_exists('imagecreatefromwebp') ? imagecreatefromwebp($path) : imagecreatefromjpeg($path),
            default => imagecreatefromjpeg($path),
        };
    }

    private function saveImage($image, string $path, string $extension, int $quality): void
    {
        switch ($extension) {
            case 'png':
                imagepng($image, $path, (int) round(9 - ($quality / 100 * 9)));
                break;
            case 'gif':
                imagegif($image, $path);
                break;
            case 'webp':
                if (function_exists('imagewebp')) {
                    imagewebp($image, $path, $quality);
                } else {
                    imagejpeg($image, $path, $quality);
                }
                break;
            default:
                imagejpeg($image, $path, $quality);
        }
    }
}
