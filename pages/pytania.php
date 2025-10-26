<?php
$pageTitle = 'Najczęściej zadawane pytania';
$faqs = [
    [
        'question' => 'Cześć! Kim jesteśmy i z kim będziecie planować wesele?',
        'answer' => 'Jesteśmy Tomek i Iza, gospodarze Starej Podkowy. Od pierwszej wiadomości macie bezpośredni kontakt właśnie z nami i to my pomożemy Wam przejść przez każdy etap przygotowań.'
    ],
    [
        'question' => 'Czy stodoła jest ogrzewana i komfortowa o każdej porze roku?',
        'answer' => 'Tak, mamy wydajne ogrzewanie nadmuchowe i zasłanianą drewnianą bramę. Dzięki temu wiosną i jesienią jest ciepło, a latem możemy szeroko otworzyć wnętrze na łąkę.'
    ],
    [
        'question' => 'Ile osób wygodnie ugościmy przy stołach?',
        'answer' => 'Przy naszych prostokątnych stołach z litego drewna komfortowo usadzimy do 120 osób, zachowując szerokie przejścia i miejsce na parkiet.'
    ],
    [
        'question' => 'Czy doradzamy w wyborze cateringu lub ekipy kucharskiej?',
        'answer' => 'Oczywiście! Polecimy sprawdzonych szefów kuchni i firmy cateringowe, które czują klimat slow wedding. Możecie też przywieźć własną ekipę, a my oddamy do dyspozycji w pełni wyposażone zaplecze.'
    ],
    [
        'question' => 'Czy można zorganizować ceremonię cywilną albo humanistyczną na miejscu?',
        'answer' => 'Tak, wspólnie ustawimy scenografię na łące lub przy drewnianej bramie. Mamy też plan B we wnętrzu stodoły, gdyby pogoda zaskoczyła.'
    ],
    [
        'question' => 'Jak wyglądają noclegi dla gości?',
        'answer' => 'Na miejscu czeka 25 łóżek w przytulnych pokojach ze wspólnymi łazienkami. Jeśli planujecie więcej miejsc, pomagamy rozstawić namioty lub polecamy pensjonaty w okolicy.'
    ],
    [
        'question' => 'Co z dekoracjami i wystrojem?',
        'answer' => 'Udostępniamy Wam nasze dekoracje, a jeśli marzycie o czymś wyjątkowym, podpowiemy, gdzie wypożyczyć dodatkowe elementy. Chętnie pomożemy też w stylizacji sali w dniu ślubu.'
    ],
    [
        'question' => 'Jak przebiega dzień wesela z naszej perspektywy?',
        'answer' => 'Jesteśmy z Wami od poranka. Razem z zespołem koordynujemy dostawców, rozstawiamy dekoracje, pilnujemy harmonogramu i reagujemy na bieżące potrzeby, żebyście Wy mogli skupić się na celebrowaniu.'
    ],
    [
        'question' => 'Czy możemy odwiedzić Stodołę przed podjęciem decyzji?',
        'answer' => 'Jasne! Umówcie się z nami na spacer po gospodarstwie. Pokażemy Wam salę, łąkę, zaplecze i odpowiemy na wszystkie pytania przy kawie.'
    ],
    [
        'question' => 'Jak długo możemy bawić się w noc wesela?',
        'answer' => 'Nie ograniczamy Was do sztywnych godzin. Możemy tańczyć do białego rana, a ognisko na łące rozpalimy dokładnie wtedy, kiedy będziecie mieli ochotę.'
    ],
];
?>
<section class="section section-page-intro">
    <div class="container narrow">
        <h1>Najczęściej zadawane pytania</h1>
        <p>Jeśli nie znajdziecie tu odpowiedzi, napiszcie do nas śmiało. Jesteśmy do Waszej dyspozycji i chętnie dopowiemy wszystko przy kawie albo on-line.</p>
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
        <h2>Macie dodatkowe pytania?</h2>
        <p>Jesteśmy tu dla Was. Umówmy się na rozmowę lub spotkanie w Starej Podkowie i wspólnie zaplanujmy Wasz dzień.</p>
        <a class="btn" href="?page=kontakt">Skontaktuj się</a>
    </div>
</section>
