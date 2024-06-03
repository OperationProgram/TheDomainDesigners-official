const container = document.querySelector('.testimonials-container');
let currentIndex = 0;

function scrollTestimonials() {
    currentIndex++;
    if (currentIndex >= container.children.length / 2) {
        currentIndex = 0;
        container.style.transition = 'none'; // Disable transition for seamless reset
        container.style.transform = `translateX(0%)`;
        setTimeout(() => {
            container.style.transition = 'transform 1s linear'; // Re-enable transition
            scrollTestimonials();
        }, 50); // Short delay to apply the reset transform
    } else {
        const translateXValue = -currentIndex * 100;
        container.style.transform = `translateX(${translateXValue}%)`;
    }
}

// Scroll testimonial every few seconds
setInterval(scrollTestimonials, 3000); // Adjust time interval as needed

// Initial display
scrollTestimonials();