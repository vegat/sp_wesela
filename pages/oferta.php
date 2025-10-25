<?php
$pageTitle = 'Oferta weselna';
$meadowImage = image_resizer()->getResized(
    'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=2000&q=80',
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
                    <li>Autentyczna stodoła o powierzchni 400 m²</li>
                    <li>Drewniana brama otwierająca parkiet na widok łąki</li>
                    <li>Stoły i krzesła z litego drewna, stoły szerokie na 100 cm</li>
                    <li>Strefa chillout na antresoli z widokiem na salę</li>
                </ul>
            </article>
            <article class="card">
                <h2>Otoczenie</h2>
                <ul>
                    <li>Łąka z miejscem na ognisko i zewnętrzny parkiet</li>
                    <li>Możliwość rozstawienia namiotów dla gości</li>
                    <li>Konno, kury i kaczki na gospodarstwie – naturalny klimat</li>
                    <li>Możliwość ceremonii cywilnej w ogrodzie</li>
                </ul>
            </article>
            <article class="card">
                <h2>Zaplecze</h2>
                <ul>
                    <li>Profesjonalna kuchnia 60 m² z wyposażeniem gastronomicznym</li>
                    <li>25 miejsc noclegowych w pokojach ze wspólnymi łazienkami</li>
                    <li>Magazyn na alkohol i chłodnia dla cateringu</li>
                    <li>Baza dekoracji dostępna dla Par</li>
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
                <h3>W cenie najmu</h3>
                <ul>
                    <li>Wyłączność obiektu od piątku do niedzieli</li>
                    <li>Koordynacja logistyczna przez nasz zespół</li>
                    <li>Podstawowe dekoracje i dodatki rustykalne</li>
                    <li>Zaplecze techniczne: nagłośnienie, oświetlenie ambientowe</li>
                    <li>Sprzątanie po wydarzeniu</li>
                </ul>
            </div>
            <div>
                <h3>Dodatkowe możliwości</h3>
                <ul>
                    <li>Strefa glampingowa na łące</li>
                    <li>Warsztaty florystyczne dla gości</li>
                    <li>Sesja zdjęciowa z końmi z naszego gospodarstwa</li>
                    <li>Śniadanie dzień po weselu w ogrodzie</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-cta">
    <div class="container narrow">
        <h2>Zarezerwuj termin</h2>
        <p>Skontaktuj się z nami i poznaj dostępne daty oraz pełen kosztorys wynajmu. Odpowiemy w ciągu 24 godzin.</p>
        <a class="btn" href="?page=kontakt">Wyślij zapytanie</a>
    </div>
</section>
