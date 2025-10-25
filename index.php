<?php
require __DIR__ . '/includes/AssetManager.php';
require __DIR__ . '/includes/ImageResizer.php';
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/template.php';

$currentPage = $_GET['page'] ?? 'start';
$pagePath = resolve_page($currentPage);

$pageTitle = '';
ob_start();
require $pagePath;
$pageContent = ob_get_clean();

render_head($pageTitle);
render_header($currentPage);
?>
<main class="page-content">
    <?= $pageContent; ?>
</main>
<?php
render_footer();
