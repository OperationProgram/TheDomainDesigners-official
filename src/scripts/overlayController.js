function openOverlay(imageSrc) {
    console.log("clicked");
    document.getElementById('overlay-image').src = imageSrc;
    document.getElementById('image-overlay').style.display = 'flex';
}

function closeOverlay() {
    document.getElementById('image-overlay').style.display = 'none';
    document.getElementById('overlay-image').src = ''; 
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('image-overlay').style.display = 'none';
    
    const imageContainers = document.querySelectorAll('.image-container');
    imageContainers.forEach(container => {
        container.addEventListener('click', function() {
            const imgElement = container.querySelector('img');
            const imageSrc = imgElement.getAttribute('src');
            openOverlay(imageSrc);
        });
    });

    const closeButton = document.querySelector('.closebtn');
    closeButton.addEventListener('click', closeOverlay);
});