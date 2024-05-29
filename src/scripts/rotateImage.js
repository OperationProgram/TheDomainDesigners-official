document.addEventListener('scroll', function() {
    let scrollPosition = window.scrollY;
    let scaleFactor = 0.2;
    // Calculate the rotation angle based on the scroll position
    let rotationAngle = scrollPosition * scaleFactor % 360;

    // Apply the rotation to the image
    const image = document.getElementById('rotate-img');
    image.style.transform = `rotate(${rotationAngle}deg)`;
});