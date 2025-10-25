<?php
$pageTitle = 'Najczęściej zadawane pytania';
$faqs = [
    [
        'question' => 'Czy stodoła jest ogrzewana?',
        'answer' => 'Tak, dysponujemy systemem ogrzewania nadmuchowego oraz zasłanialną bramą. Dzięki temu wiosenne i jesienne przyjęcia są komfortowe.'
    ],
    [
        'question' => 'Ile osób zmieści się przy stołach?',
        'answer' => 'Przy prostokątnych stołach z litego drewna wygodnie ugościmy do 120 osób, zachowując przestrzeń do tańca i bufety.'
    ],
    [
        'question' => 'Czy można zorganizować ceremonię cywilną na miejscu?',
        'answer' => 'Tak. Wspólnie przygotujemy plenerową scenografię na łące lub przy drewnianej bramie stodoły. W razie niepogody przeniesiemy uroczystość do wnętrza.'
    ],
    [
        'question' => 'Jakie są możliwości noclegowe?',
        'answer' => 'Na terenie obiektu znajdują się pokoje ze wspólnymi łazienkami dla 25 osób. Dodatkowo możecie rozstawić namioty lub domki glampingowe na łące.'
    ],
    [
        'question' => 'Czy pomagacie w organizacji wesela?',
        'answer' => 'Jesteśmy z Wami od pierwszego spotkania. Rekomendujemy sprawdzonych podwykonawców, a w dniu wydarzenia koordynujemy harmonogram i logistykę.'
    ],
    [
        'question' => 'Czy można przywieźć własny alkohol i catering?',
        'answer' => 'Tak. Zapewniamy magazyn i chłodnię dla cateringu oraz zaplecze gastronomiczne o powierzchni 60 m² w pełni wyposażone w sprzęty.'
    ],
];
?>
<section class="section section-page-intro">
    <div class="container narrow">
        <h1>Najczęściej zadawane pytania</h1>
        <p>Jeśli nie znajdziesz odpowiedzi na swoje pytanie, napisz do nas. Z chęcią pomożemy zaplanować każdy detal.</p>
    </div>
</section>

<section class="section section-faq">
    <div class="container narrow">
        <div class="faq-list">
            <?php foreach ($faqs as $item): ?>
                <article class="faq-item">
                    <h2><?= esc_html($item['question']); ?></h2>
                    <p><?= esc_html($item['answer']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-cta">
    <div class="container narrow">
        <h2>Masz dodatkowe pytania?</h2>
        <p>Nasz zespół jest do Twojej dyspozycji. Umówmy się na rozmowę lub spotkanie w Starej Podkowie.</p>
        <a class="btn" href="?page=kontakt">Skontaktuj się</a>
    </div>
</section>
