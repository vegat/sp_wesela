<?php

function render_head(string $pageTitle): void
{
    $site = get_site_info();
    $title = $pageTitle !== '' ? $pageTitle . ' | ' . $site['name'] : $site['name'];
    $description = $site['description'];
    $cssAssets = optimized_assets('css');
    $jsAssets = optimized_assets('js');
    ?>
    <!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= esc_html($title); ?></title>
        <meta name="description" content="<?= esc_html($description); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
        <?php foreach ($cssAssets as $href): ?>
            <link rel="stylesheet" href="<?= esc_html(str_replace(__DIR__ . '/../', '', $href)); ?>">
        <?php endforeach; ?>
        <script>
            document.documentElement.classList.add('js-enabled');
        </script>
    </head>
    <body>
    <?php foreach ($jsAssets as $src): ?>
        <script defer src="<?= esc_html(str_replace(__DIR__ . '/../', '', $src)); ?>"></script>
    <?php endforeach; ?>
    <?php
}

function render_header(string $currentPage): void
{
    $site = get_site_info();
    $navigation = get_navigation();
    ?>
    <header class="site-header">
        <div class="header-inner">
            <div class="branding">
                <span class="logo-icon" aria-hidden="true">&#9825;</span>
                <div>
                    <span class="site-name"><?= esc_html($site['name']); ?></span>
                    <span class="site-tagline"><?= esc_html($site['tagline']); ?></span>
                </div>
            </div>
            <input type="checkbox" id="nav-toggle" class="nav-toggle" aria-label="Otwórz menu">
            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
            </label>
            <nav class="primary-nav">
                <ul>
                    <?php foreach ($navigation as $slug => $label): ?>
                        <li class="<?= is_active_page($slug, $currentPage) ? 'active' : ''; ?>">
                            <a href="?page=<?= esc_html($slug); ?>"><?= esc_html($label); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>
    <?php
}

function render_footer(): void
{
    $year = date('Y');
    ?>
    <footer class="site-footer">
        <div class="footer-inner">
            <div>
                <h3>Odwiedź nas</h3>
                <p>Stara Podkowa<br>Podkowa Leśna, Mazowsze</p>
            </div>
            <div>
                <h3>Kontakt</h3>
                <p><a href="tel:+48501999111">+48 501 999 111</a><br>
                    <a href="mailto:kontakt@starapodkowa.com">kontakt@starapodkowa.com</a></p>
            </div>
            <div>
                <h3>Obserwuj</h3>
                <p class="footer-social">
                    <a href="https://www.facebook.com" target="_blank" rel="noopener">Facebook</a>
                    <a href="https://www.instagram.com" target="_blank" rel="noopener">Instagram</a>
                </p>
            </div>
        </div>
        <p class="footer-meta">&copy; <?= $year; ?> Stara Podkowa. Wszystkie prawa zastrzeżone.</p>
    </footer>
    </body>
    </html>
    <?php
}
