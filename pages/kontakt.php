<?php
$pageTitle = 'Kontakt';
?>
<section class="section section-page-intro">
    <div class="container narrow">
        <h1>Skontaktuj się z nami</h1>
        <p>Opowiedz nam o swoim wymarzonym weselu. Przygotujemy spersonalizowaną ofertę i zaproponujemy termin spotkania w Starej Podkowie.</p>
    </div>
</section>

<section class="section section-contact">
    <div class="container split">
        <div class="contact-details">
            <h2>Dane kontaktowe</h2>
            <p><strong>Telefon:</strong> <a href="tel:+48501999111">+48 501 999 111</a></p>
            <p><strong>Email:</strong> <a href="mailto:kontakt@starapodkowa.com">kontakt@starapodkowa.com</a></p>
            <p><strong>Adres:</strong> Stara Podkowa, Podkowa Leśna, Mazowsze</p>
            <p><strong>Godziny spotkań:</strong> Poniedziałek–Piątek, 10:00–18:00 po wcześniejszym umówieniu.</p>
            <div class="contact-note">
                <p>Zwiedzanie obiektu możliwe po wcześniejszej rezerwacji terminu. Chętnie oprowadzimy i pokażemy Wam stodołę, łąkę oraz zaplecze.</p>
            </div>
        </div>
        <form class="contact-form" method="post" action="https://formspree.io/f/your-form-id">
            <h2>Wyślij zapytanie</h2>
            <label for="name">Imię i nazwisko</label>
            <input id="name" name="name" type="text" required>

            <label for="email">Adres email</label>
            <input id="email" name="email" type="email" required>

            <label for="date">Planowana data</label>
            <input id="date" name="date" type="text" placeholder="np. sierpień 2025">

            <label for="guests">Liczba gości</label>
            <input id="guests" name="guests" type="number" min="20" max="150" step="1">

            <label for="message">Opisz swoje potrzeby</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button class="btn" type="submit">Wyślij</button>
        </form>
    </div>
</section>

<section class="section section-map">
    <div class="container">
        <div class="map-embed">
            <iframe title="Mapa dojazdu" src="https://maps.google.com/maps?q=Podkowa%20Le%C5%9Bna&t=&z=13&ie=UTF8&iwloc=&output=embed" loading="lazy"></iframe>
        </div>
    </div>
</section>
