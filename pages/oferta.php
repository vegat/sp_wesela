<?php
$pageTitle = 'Oferta weselna';
$meadowImage = image_resizer()->getResized(
    'https://placehold.co/1200x800?text=Łąka+i+parkiet',
    1200,
    800
);
?>
<section class="section section-page-intro">
    <div class="container">
        <h1>Oferta weselna Starej Podkowy</h1>
        <p>Tworzymy przyjęcia ślubne w duchu slow – blisko natury, z szacunkiem do historii miejsca i uważnością na potrzeby Pary Młodej. Nasza stodoła, zaplecze i otoczenie tworzą spójny ekosystem idealny na całodniowe celebracje.</p>
    </div>
</section>

<section class="section section-cards">
    <div class="container">
        <div class="card-grid">
            <article class="card">
                <h2>Przestrzeń</h2>
                <ul>
                    <li>Autentyczna stodoła o powierzchni 400 m² z 1905 roku</li>
                    <li>Drewniana brama otwierająca parkiet na widok łąki i zachody słońca</li>
                    <li>Stoły i krzesła z litego drewna, stoły szerokie na 100 cm</li>
                    <li>Przygotowana, posprzątana sala gotowa na dekoracje w dniu wejścia</li>
                </ul>
            </article>
            <article class="card">
                <h2>Otoczenie</h2>
                <ul>
                    <li>Cały teren tylko dla Was – łąka, hamaki, koce i strefy chill</li>
                    <li>Zewnętrzny parkiet, miejsce na ognisko i przestrzeń na namioty</li>
                    <li>Konie, kury i kaczki budujące sielski klimat slow wedding</li>
                    <li>Możliwość ceremonii cywilnej lub humanistycznej w ogrodzie</li>
                </ul>
            </article>
            <article class="card">
                <h2>Zaplecze</h2>
                <ul>
                    <li>Profesjonalna kuchnia 65 m² z osobnym zmywakiem i chłodnią</li>
                    <li>Pełna zastawa Lubiana, bemary, warniki, ekspresy i patery</li>
                    <li>25 miejsc noclegowych w pokojach ze wspólnymi łazienkami</li>
                    <li>Baza dekoracji i nagłośnienie na ceremonię plenerową</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="section section-highlight">
    <div class="container split reverse">
        <div class="highlight-media">
            <img src="<?= esc_html(str_replace(__DIR__ . '/../', '', $meadowImage)); ?>" alt="Widok na łąkę obok stodoły">
        </div>
        <div class="highlight-text">
            <h2>Scenariusz dnia pełen luzu</h2>
            <ol class="steps-list">
                <li><strong>Przyjazd gości</strong> do pachnącej drewnem stodoły, powitanie lokalnymi napojami.</li>
                <li><strong>Ceremonia cywilna</strong> w sadzie lub na tle drewnianej bramy.</li>
                <li><strong>Uczta weselna</strong> przy szerokich stołach z litego drewna.</li>
                <li><strong>Tańce pod gwiazdami</strong> na zewnętrznym parkiecie i ognisku do białego rana.</li>
            </ol>
        </div>
    </div>
</section>

<section class="section section-included">
    <div class="container">
        <h2>Co jest w pakiecie?</h2>
        <div class="included-grid">
            <div>
                <h3>W cenie wynajmu</h3>
                <ul>
                    <li>Cały obiekt tylko dla Was wraz z łąką, hamakami, grami i parkingami</li>
                    <li>Posprzątana, ustawiona pod liczbę gości sala z drewnianymi stołami i krzesłami</li>
                    <li>Dostęp do naszych dekoracji i dodatków bez dodatkowych kosztów</li>
                    <li>Na życzenie nagłośnienie na ceremonię plenerową i oświetlenie ambientowe</li>
                    <li>Profesjonalne zaplecze gastronomiczne z pełną zastawą i sprzętem</li>
                    <li>Opieka jednej z nas przez cały czas wynajmu – pomożemy, podpowiemy, przypilnujemy</li>
                </ul>
            </div>
            <div>
                <h3>Przydatne dodatki</h3>
                <ul>
                    <li>Rozbudowana strefa chill, koce i poduchy do stref plenerowych</li>
                    <li>Chłodnia na Wasz alkohol i możliwość jego przechowania po weselu</li>
                    <li>Lista zaprzyjaźnionych dostawców – od florystów po DJ-ów</li>
                    <li>Wspólne przygotowanie planu dnia i wsparcie w logistyce dostawców</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-pricing">
    <div class="container">
        <h2>Przejrzyste zasady rezerwacji</h2>
        <div class="pricing-grid">
            <article>
                <h3>Pakiet weselny</h3>
                <p>Wynajem stodoły na dzień wesela kosztuje 12&nbsp;000&nbsp;zł i obejmuje cały weekend, abyście mogli spokojnie
                    dekorować w piątek i odbierać rzeczy po uroczystości.</p>
                <p>Zadatek wynosi 30% (3&nbsp;600&nbsp;zł) i można go opłacić przelewem albo kartą podczas wizyty. Wybrany termin
                    rezerwujemy wstępnie na 14 dni, abyście mogli podjąć decyzję bez pośpiechu.</p>
            </article>
            <article>
                <h3>Opcje dodatkowe</h3>
                <ul>
                    <li>Poprawiny w niedzielę od 10:00 do 20:00 – 4&nbsp;000&nbsp;zł</li>
                    <li>Dostęp do kuchni w piątek dla ekip gotujących na miejscu – ustalamy indywidualnie</li>
                    <li>Glampingowe namioty dla 4–8 osób dostępne od sezonu 2026/2027</li>
                    <li>Możliwość cesji terminu lub zmiany daty do 7 dni przed wydarzeniem, jeśli pojawi się nowa para</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<section class="section section-catering">
    <div class="container">
        <h2>Zaprzyjaźnione cateringi</h2>
        <p>Znamy nasze zaplecze od podszewki i chętnie pomożemy dobrać ekipę, która najlepiej odpowie na Wasze kulinarne marzenia.
            Z wielką przyjemnością polecamy sprawdzonych partnerów:</p>
        <ul class="catering-list">
            <li><strong>Gościniec Stara Mleczarnia</strong> (Bolków) – tradycyjna kuchnia z nowoczesnym twistem, tel. 509&nbsp;187&nbsp;749.</li>
            <li><strong>Kuchnia Luz'n'Bluez</strong> (Kamienna Góra) – kreatywne menu tematyczne, tel. 603&nbsp;087&nbsp;420.</li>
            <li><strong>Kocharz</strong> (Wrocław) – fine dining w wersji wyjazdowej, <a href="https://kocharz.pl/" target="_blank" rel="noopener">kocharz.pl</a>.</li>
            <li><strong>Kucharki Ani Zwańczyk</strong> – gotowanie na miejscu z domową serdecznością, tel. 784&nbsp;252&nbsp;944.</li>
        </ul>
        <p>Jeśli wybierzecie inną ekipę, sami do nich zadzwonimy, pokażemy kuchnię i dopilnujemy, by mieli wszystko, czego
            potrzebują.</p>
    </div>
</section>

<section class="section section-cta">
    <div class="container narrow">
        <h2>Zarezerwuj termin</h2>
        <p>Skontaktuj się z nami i poznaj dostępne daty oraz pełen kosztorys wynajmu. Odpowiemy w ciągu 24 godzin.</p>
        <a class="btn" href="?page=kontakt">Wyślij zapytanie</a>
    </div>
</section>
