document.addEventListener("DOMContentLoaded", function() {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const links = document.querySelector('.links');
    const consultation = document.querySelector('.consultation');

    hamburgerMenu.addEventListener('click', function() {
        const expanded = hamburgerMenu.getAttribute('aria-expanded') === 'true' || false;
        hamburgerMenu.setAttribute('aria-expanded', !expanded);
        links.classList.toggle('active');
        consultation.classList.toggle('active');
    });
});