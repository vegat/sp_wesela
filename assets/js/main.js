(function () {
    'use strict';

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.section').forEach(section => {
        section.classList.add('is-hidden');
        observer.observe(section);
    });

    const navToggle = document.getElementById('nav-toggle');
    const navLinks = document.querySelectorAll('.primary-nav a');

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navToggle && navToggle.checked) {
                navToggle.checked = false;
            }
        });
    });
})();
