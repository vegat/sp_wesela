<?php

function load_config(): array
{
    static $config = null;
    if ($config === null) {
        $config = require __DIR__ . '/config.php';
    }
    return $config;
}

function get_navigation(): array
{
    return load_config()['navigation'];
}

function get_site_info(): array
{
    return load_config()['site'];
}

function resolve_page(string $page): string
{
    $page = trim($page) !== '' ? $page : 'start';
    $path = __DIR__ . '/../pages/' . $page . '.php';
    if (!file_exists($path)) {
        http_response_code(404);
        return __DIR__ . '/../pages/404.php';
    }
    return $path;
}

function is_active_page(string $page, string $current): bool
{
    return $page === $current;
}

function esc_html(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function asset_manager(): AssetManager
{
    static $manager;
    if ($manager === null) {
        $manager = new AssetManager(__DIR__ . '/../cache/assets');
    }
    return $manager;
}

function image_resizer(): ImageResizer
{
    static $resizer;
    if ($resizer === null) {
        $resizer = new ImageResizer(__DIR__ . '/../content', __DIR__ . '/../cache/images');
    }
    return $resizer;
}

function optimized_assets(string $type): array
{
    $config = load_config();
    $paths = $config['assets'][$type] ?? [];
    $manager = asset_manager();
    return array_map(static fn ($path) => $manager->getOptimizedAsset($path), $paths);
}
