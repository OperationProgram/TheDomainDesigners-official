async function loadNavbar() {    
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navMenu = document.getElementById('nav-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');

    function toggleMenu() {
        navMenu.classList.toggle('active');
        hamburgerIcon.classList.toggle('active');
    }

    function closeMenu() {
        navMenu.classList.remove('active');
        hamburgerIcon.classList.remove('active');
    }

    hamburgerMenu.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent click from bubbling up to document
        toggleMenu();
    });

    document.addEventListener('click', function(event) {
        if (!navMenu.contains(event.target) && !hamburgerMenu.contains(event.target)) {
            closeMenu();
        }
    });

    navMenu.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent click from bubbling up to document
    });
}

window.addEventListener('DOMContentLoaded', loadNavbar);