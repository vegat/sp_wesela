<?php

class AssetManager
{
    private string $cacheDir;

    public function __construct(string $cacheDir)
    {
        $this->cacheDir = rtrim($cacheDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir, 0775, true);
        }
    }

    public function getOptimizedAsset(string $path): string
    {
        if (!is_file($path)) {
            throw new InvalidArgumentException("Asset not found: {$path}");
        }

        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $hash = md5_file($path);
        $cachedFile = $this->cacheDir . $hash . '.' . $extension;

        if (!file_exists($cachedFile)) {
            $contents = file_get_contents($path);
            $minified = $this->minify($contents, $extension);
            file_put_contents($cachedFile, $minified, LOCK_EX);
        }

        return $cachedFile;
    }

    private function minify(string $contents, string $extension): string
    {
        if ($extension === 'css') {
            $contents = preg_replace('!/\*.*?\*/!s', '', $contents) ?? $contents;
            $contents = preg_replace('/\s+/', ' ', $contents) ?? $contents;
            $contents = str_replace([' {', '{ '], '{', $contents);
            $contents = str_replace([' }', '} '], '}', $contents);
            $contents = str_replace([' ;', '; '], ';', $contents);
            return trim($contents);
        }

        if ($extension === 'js') {
            $contents = preg_replace('!/\*.*?\*/!s', '', $contents) ?? $contents;
            $contents = preg_replace('/\/\/.*$/m', '', $contents) ?? $contents;
            $contents = preg_replace('/\s+/', ' ', $contents) ?? $contents;
            return trim($contents);
        }

        return $contents;
    }
}
