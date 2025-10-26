<?php
$pageTitle = 'O Starej Podkowie';
$barnImage = image_resizer()->getResized(
    'https://placehold.co/1200x900?text=Zabytkowa+stodoła',
    1200,
    900
);
?>
<section class="section section-page-intro">
    <div class="container split">
        <div>
            <h1>Ponad sto lat historii</h1>
            <p>Stara Podkowa to miejsce, które nie udaje stodoły – ono nią jest. Drewniana konstrukcja z 1905 roku wciąż nosi ślady pracy gospodarzy i wspomnień, które dziś tworzą wyjątkową scenę dla Waszego święta.</p>
        </div>
        <div class="image-frame">
            <img src="<?= esc_html(str_replace(__DIR__ . '/../', '', $barnImage)); ?>" alt="Wnętrze zabytkowej stodoły">
        </div>
    </div>
</section>

<section class="section section-timeline">
    <div class="container">
        <h2>Najważniejsze momenty</h2>
        <ul class="timeline">
            <li>
                <span class="timeline-year">1905</span>
                <p>Powstaje stodoła na Mazowszu, budowana przez lokalnych cieśli z litego drewna i ręcznie formowanej cegły.</p>
            </li>
            <li>
                <span class="timeline-year">1950-1980</span>
                <p>Gospodarstwo rozwija się, a stodoła służy jako miejsce spotkań całej społeczności wsi.</p>
            </li>
            <li>
                <span class="timeline-year">2015</span>
                <p>Rozpoczynamy rewitalizację, zachowując oryginalne belki, podłogę i wrota, dodając nowoczesne instalacje.</p>
            </li>
            <li>
                <span class="timeline-year">2020</span>
                <p>Stodoła otwiera się na pierwsze wesela, zyskując renomę autentycznego miejsca z duszą.</p>
            </li>
        </ul>
    </div>
</section>

<section class="section section-team">
    <div class="container">
        <h2>Ludzie z energią</h2>
        <div class="team-grid">
            <article>
                <h3>Marta i Kacper</h3>
                <p>Młodzi gospodarze, którzy zakochali się w stodole i postanowili tchnąć w nią nowe życie. Łączą kreatywność z logistyką.</p>
            </article>
            <article>
                <h3>Zespół koordynacji</h3>
                <p>Grupa ambitnych i zaangażowanych osób obecnych przez cały dzień wydarzenia. Czuwają nad scenariuszem i reagują zanim ktoś zdąży poprosić.</p>
            </article>
            <article>
                <h3>Przyjaciele gospodarstwa</h3>
                <p>Konie, kury i kaczki. Tworzą naturalne tło, które wprowadza spokój i uśmiech na twarzach gości.</p>
            </article>
        </div>
    </div>
</section>

<section class="section section-values">
    <div class="container">
        <h2>Wartości, które nas prowadzą</h2>
        <div class="values-grid">
            <article>
                <h3>Autentyczność</h3>
                <p>Stodoła, której nie trzeba stylizować. Pokazujemy prawdziwe drewno, cegłę i widoki – to one grają główną rolę.</p>
            </article>
            <article>
                <h3>Gościnność</h3>
                <p>Dbamy o to, aby Wasi bliscy czuli się jak w domu. Udostępniamy pokoje i serwujemy śniadanie w niedzielny poranek.</p>
            </article>
            <article>
                <h3>Spokój</h3>
                <p>Otoczenie natury, brak pośpiechu i harmonijny rytm dnia sprzyjają celebrowaniu każdej chwili.</p>
            </article>
        </div>
    </div>
</section>
