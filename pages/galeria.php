<?php
$pageTitle = 'Galeria Starej Podkowy';
$galleryImages = [
    [
        'url' => 'https://images.unsplash.com/photo-1520854221050-0f4caff449fb?auto=format&fit=crop&w=1800&q=80',
        'alt' => 'Drewniana stodoła udekorowana na wesele'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=1800&q=80',
        'alt' => 'Drewniane stoły weselne z dekoracjami roślinnymi'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1478146896981-b80fe4635687?auto=format&fit=crop&w=1800&q=80',
        'alt' => 'Para młoda tańcząca na zewnątrz o zachodzie słońca'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1520854221051-15151f1f8c9b?auto=format&fit=crop&w=1800&q=80',
        'alt' => 'Zastawa stołowa w stylu boho'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1800&q=80',
        'alt' => 'Łąka z miejscem na ognisko'
    ],
    [
        'url' => 'https://images.unsplash.com/photo-1474899351970-60f460e48b2a?auto=format&fit=crop&w=1800&q=80',
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
