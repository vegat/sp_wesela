<?php
$pageTitle = 'Najczęściej zadawane pytania';
$faqs = [
    [
        'question' => 'Cześć! Kim jesteśmy i jak wygląda kontakt z nami?',
        'answer' => 'Tu Tomek i Iza – gospodarze Starej Podkowy. To my odbieramy Wasze maile i telefony, prowadzimy spotkania i jesteśmy przy Was przez cały weekend. Bez pośredników i call center.'
    ],
    [
        'question' => 'Jak wygląda dostęp do obiektu przed i po weselu?',
        'answer' => 'Wynajmujecie nas na cały weekend. Możecie wejść z dekoracjami już w piątek, bawić się od sobotniego poranka aż do 7:00 w niedzielę, a rzeczy odebrać na spokojnie nawet dzień czy dwa później.'
    ],
    [
        'question' => 'Co dokładnie otrzymujemy w cenie wynajmu?',
        'answer' => 'Dajemy Wam całą stodołę z łąką, hamakami, grami plenerowymi, strefami chill i parkingami. Sala czeka wysprzątana, z dopasowaną liczbą stołów i krzeseł z litego drewna, a nasze dekoracje możecie wykorzystać bez opłat.'
    ],
    [
        'question' => 'Jakie wsparcie zapewniacie podczas samego wydarzenia?',
        'answer' => 'Jesteśmy na miejscu przez cały czas najmu. Pokażemy ekipom zaplecze, pomożemy rozstawić dekoracje, przypilnujemy harmonogramu, a nad ranem posprzątamy i odświeżymy salę.'
    ],
    [
        'question' => 'Czy współpracujecie z firmami cateringowymi?',
        'answer' => "Tak, polecamy Gościniec Stara Mleczarnia z Bolkowa (509 187 749), Kuchnię Luz'n'Bluez z Kamiennej Góry (603 087 420), ekipę Kocharz z Wrocławia oraz kucharki Ani Zwańczyk (784 252 944). Wszyscy znają nasze zaplecze i chętnie wracają."
    ],
    [
        'question' => 'Co z własnym cateringiem lub kucharkami?',
        'answer' => 'Jeśli wybierzecie inną ekipę, sami do nich zadzwonimy, pokażemy kuchnię i sprawdzimy potrzeby. Zaplecze ma 65 m², osobny zmywak, chłodnię, zastawę Lubiany, bemary, warniki i ekspres gastronomiczny.'
    ],
    [
        'question' => 'Jak rozwiązujemy kwestię ciszy nocnej?',
        'answer' => "W stodole cisza nocna nie obowiązuje. Dla komfortu gości i sąsiadów prosimy DJ'a lub zespół o trzymanie się 100 dB – mamy miernik, który na bieżąco pokazuje głośność. Na łące można hałasować do woli."
    ],
    [
        'question' => 'Do której możemy się bawić?',
        'answer' => 'W umowie macie wynajem do 7:00 rano, żebyśmy zdążyli przygotować salę na ewentualne poprawiny. Jeśli je organizujecie, od 10:00 w niedzielę wszystko czeka gotowe.'
    ],
    [
        'question' => 'Czy możemy przywieźć własny alkohol?',
        'answer' => 'Oczywiście. Nie pobieramy korkowego ani prowizji. Alkohol możecie schłodzić w naszej chłodni i przechować do czasu, aż będziecie gotowi go odebrać.'
    ],
    [
        'question' => 'Jak wygląda sprzątanie po weselu?',
        'answer' => 'Ekipa cateringowa sprząta stoły i zmywa zastawę, a my między 7:00 a 10:00 ogarniamy salę, czyścimy stoły i przygotowujemy przestrzeń. Dekoracje możecie zabrać po odpoczynku – nawet do wtorku.'
    ],
    [
        'question' => 'Jakie są zasady rezerwacji i zadatku?',
        'answer' => 'Zadatek to 30% wartości wynajmu (3 600 zł przy cenie 12 000 zł). Możecie go wpłacić przelewem lub kartą. Termin rezerwujemy wstępnie na 14 dni, a w razie konieczności możemy zrobić cesję na inną parę nawet do 7 dni przed wydarzeniem.'
    ],
    [
        'question' => 'Jak rozwiązujemy noclegi i meldowanie?',
        'answer' => 'Pokoje będą gotowe od 10:00 w dniu wesela, a wymeldowanie standardowo jest do 11:00 (możemy je przedłużyć do 12:00 lub 18:00 za połowę ceny doby). Od sezonu 2026/2027 dołożymy dwa namioty glampingowe.'
    ],
    [
        'question' => 'Czy można zwiększyć liczbę miejsc noclegowych?',
        'answer' => 'Na miejscu mamy 25 łóżek i nie dokładamy dostawek dla komfortu gości. Polecamy Agroturystykę Na Skraju (15 miejsc, 3 km) oraz Gościniec Stara Mleczarnia (45 miejsc, 5 km). Możemy pomóc z transportem.'
    ],
    [
        'question' => 'Jak wyposażone są pokoje?',
        'answer' => 'Każdy pokój ma łóżka z pościelą, ręczniki, stolik, krzesła, lustro, część ma szafy i TV. W łazienkach czekają suszarki, a w domu znajdziecie pralkę, suszarkę bębnową i żelazko parowe. WiFi śmiga w całym obiekcie.'
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
