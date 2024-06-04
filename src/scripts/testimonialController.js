const container = document.querySelector('.testimonials-container');
let currentIndex = 0;
const interval = 3000; 
const transitionDuration = 2000; 
let slideWidth = container.children[0].offsetWidth + 30;

function updateSlideWidth() {
    slideWidth = container.children[0].offsetWidth + 30; // Recalculate slide width including margin
    container.style.transition = 'none'; // Disable transition during resize
    container.style.transform = `translateX(-${currentIndex * slideWidth}px)`; // Update transform
    setTimeout(() => {
        container.style.transition = `transform ${transitionDuration}ms ease`; // Re-enable transition
    }, 50); // Small delay to ensure the transform is applied
}

function scrollTestimonials() {
    currentIndex++;
    if (currentIndex >= container.children.length) {
        currentIndex = 0;
        container.style.transition = 'none'; // Disable transition for seamless reset
        container.style.transform = `translateX(0%)`;

        // Force a reflow to ensure the transition is disabled
        container.offsetHeight;

        // Reset index and re-enable transition
        currentIndex = 1;
        container.style.transition = `transform ${transitionDuration}ms ease`;
        container.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    } else {
        container.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }
}

// Initial display
scrollTestimonials();

// Scroll testimonial every few seconds
setInterval(scrollTestimonials, interval + transitionDuration);

// Update slide width on window resize
window.addEventListener('resize', updateSlideWidth);
