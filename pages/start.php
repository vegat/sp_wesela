<?php
$pageTitle = 'Wesele w zabytkowej stodole';
$heroImage = image_resizer()->getResized(
    'https://placehold.co/1600x900?text=Stara+Podkowa',
    1600,
    900
);
?>
<section class="section section-hero" style="--hero-image: url('<?= esc_html(str_replace(__DIR__ . '/../', '', $heroImage)); ?>');">
    <div class="container">
        <div class="hero-content">
            <span class="hero-eyebrow">Stodoła z 1905 roku</span>
            <h1>Wesele z duszą w otoczeniu natury</h1>
            <p>Zanurz się w historii Starej Podkowy. Prawdziwa, ponadstuletnia stodoła z drewnianą bramą otwierającą się na parkiet i widoki rozległej łąki. Wypraw tu wesele, które na zawsze pozostanie w pamięci.</p>
            <div class="hero-actions">
                <a class="btn" href="?page=oferta">Poznaj ofertę</a>
                <a class="btn-secondary" href="?page=galeria">Zobacz galerię</a>
            </div>
        </div>
    </div>
    <svg class="hero-wave" viewBox="0 0 1440 160" preserveAspectRatio="none" aria-hidden="true">
        <path d="M0,80 C240,10 480,10 720,80 C960,150 1200,150 1440,80 L1440,160 L0,160 Z"></path>
    </svg>
</section>

<section class="section section-stats">
    <div class="container">
        <ul class="stats-grid">
            <li>
                <span class="stat-value">1905</span>
                <span class="stat-label">rok powstania stodoły</span>
            </li>
            <li>
                <span class="stat-value">120</span>
                <span class="stat-label">gości przy prostokątnych stołach</span>
            </li>
            <li>
                <span class="stat-value">25</span>
                <span class="stat-label">miejsc noclegowych na miejscu</span>
            </li>
        </ul>
    </div>
</section>

<section class="section section-features">
    <div class="container">
        <h2>Dlaczego Stara Podkowa?</h2>
        <div class="feature-grid">
            <article>
                <h3>Autentyczna stodoła</h3>
                <p>Nasza sala naprawdę znajduje się w zabytkowej stodole. Naturalne drewno, zapach historii i detale z początku XX wieku budują klimat, którego nie da się odtworzyć.</p>
            </article>
            <article>
                <h3>Sielskie otoczenie</h3>
                <p>Za drewnianą bramą parkiet wychodzi wprost na łąkę, zewnętrzny parkiet i miejsce na ognisko. Słońce zachodzi nad naturą, a goście tańczą pod gwiazdami.</p>
            </article>
            <article>
                <h3>Przemyślana infrastruktura</h3>
                <p>Stoły i krzesła z litego drewna, szerokie na 100 cm blaty, profesjonalne zaplecze gastronomiczne o powierzchni 60 m², dekoracje i baza noclegowa – wszystko na miejscu.</p>
            </article>
        </div>
    </div>
</section>

<section class="section section-story">
    <div class="container split">
        <div class="story-text">
            <h2>Historia, która trwa</h2>
            <p>W 1905 roku stodoła była sercem gospodarstwa. Dziś nadal tętni życiem, goszcząc młode pary i ich rodziny. Zachowaliśmy oryginalne belki, cegły i detale konstrukcyjne, dodając nowoczesne udogodnienia, aby komfort szedł w parze z klimatem.</p>
            <p>Na gospodarstwie mieszkają konie, kury i kaczki. Dzięki temu natura towarzyszy Wam od pierwszego kroku. Slow wedding? Tu dzieje się w naturalnym rytmie.</p>
            <a class="text-link" href="?page=filozofia">Poznaj naszą filozofię</a>
        </div>
        <div class="story-visual">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path fill="#c6ab89" d="M41.9,-73.5C55.6,-65.6,69.4,-56.3,77.8,-42.9C86.2,-29.5,89.2,-11.9,86.7,4.2C84.3,20.4,76.5,35.1,65.9,48.1C55.3,61,41.9,72.1,26.5,77.3C11.1,82.4,-6.4,81.6,-21.1,75.2C-35.8,68.8,-47.7,56.7,-55.7,43.2C-63.7,29.8,-67.7,15,-68.1,-0.3C-68.6,-15.6,-65.5,-31.3,-57.1,-43.3C-48.7,-55.4,-35.2,-63.8,-21.2,-71.1C-7.2,-78.3,7.2,-84.3,20.9,-85.8C34.6,-87.3,48.2,-84.2,41.9,-73.5Z" transform="translate(100 100)" />
            </svg>
        </div>
    </div>
</section>

<section class="section section-cta">
    <div class="container narrow">
        <h2>Zapytaj o wolny termin</h2>
        <p>Skontaktuj się z nami, a przygotujemy spersonalizowaną ofertę wraz z propozycją scenariusza slow wedding w Starej Podkowie.</p>
        <a class="btn" href="?page=kontakt">Skontaktuj się</a>
    </div>
</section>
