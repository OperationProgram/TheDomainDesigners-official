// Function to load the navbar
async function loadNavbar() {
    // Fetch the navbar.html content
    await fetch(config.baseUrl + '/pages/Navigation/navbar.html')
        .then(response => response.text())
        .then(data => {
            // Insert the navbar HTML into the header of the current page
            document.querySelector('header').innerHTML = data;
        })
        .catch(error => console.error('Error loading navbar:', error));
    
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navMenu = document.getElementById('nav-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');

    hamburgerMenu.addEventListener('click', function() {
        navMenu.classList.toggle('active');
        hamburgerIcon.classList.toggle('active');
    });
   
}



// Call the loadNavbar function when the page is loaded
window.addEventListener('DOMContentLoaded', loadNavbar);



