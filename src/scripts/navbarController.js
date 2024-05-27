async function loadNavbar() {
    console.log("loaded");

    // Fetch the navbar.html content
    // await fetch(config.baseUrl + '/pages/Navigation/navbar.html')
    //     .then(response => response.text())
    //     .then(data => {
    //         // Insert the navbar HTML into the header of the current page
    //         document.querySelector('header').innerHTML = data;
    //     })
    //     .catch(error => console.error('Error loading navbar:', error));
    
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