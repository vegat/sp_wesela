<?php
$pageTitle = 'Galeria Starej Podkowy';
$galleryImages = [
    [
        'url' => 'https://placehold.co/1200x800?text=Sala+w+stodole',
        'alt' => 'Drewniana stodoła udekorowana na wesele'
    ],
    [
        'url' => 'https://placehold.co/1200x800?text=Drewniane+stoły',
        'alt' => 'Drewniane stoły weselne z dekoracjami roślinnymi'
    ],
    [
        'url' => 'https://placehold.co/1200x800?text=Para+na+parkiecie',
        'alt' => 'Para młoda tańcząca na zewnątrz o zachodzie słońca'
    ],
    [
        'url' => 'https://placehold.co/1200x800?text=Zastawa+boho',
        'alt' => 'Zastawa stołowa w stylu boho'
    ],
    [
        'url' => 'https://placehold.co/1200x800?text=Łąka+i+ognisko',
        'alt' => 'Łąka z miejscem na ognisko'
    ],
    [
        'url' => 'https://placehold.co/1200x800?text=Bukiet+na+stole',
        'alt' => 'Bukiet kwiatów na drewnianym stole'
    ],
];
?>
<section class="section section-page-intro">
    <div class="container narrow">
        <h1>Galeria Starej Podkowy</h1>
        <p>Zobacz, jak wygląda wesele w zabytkowej stodole otoczonej naturą. Wyobraź sobie Wasz dzień w tym klimacie.</p>
    </div>
</section>

<section class="section section-gallery">
    <div class="container">
        <div class="gallery-grid">
            <?php foreach ($galleryImages as $image):
                $resized = image_resizer()->getResized($image['url'], 900, 600);
            ?>
                <figure>
                    <img src="<?= esc_html(str_replace(__DIR__ . '/../', '', $resized)); ?>" alt="<?= esc_html($image['alt']); ?>">
                    <figcaption><?= esc_html($image['alt']); ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
