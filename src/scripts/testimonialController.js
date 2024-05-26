const testimonials = [
  "Testimonial 1",
  "Testimonial 2",
  "Testimonial 3",
  // Add more testimonials as needed
];

let currentIndex = 0;

function displayTestimonial(index) {
  const testimonialContainer = document.getElementById("testimonial");
  testimonialContainer.textContent = testimonials[index];
}

function scrollTestimonials() {
  if (currentIndex >= testimonials.length) {
      currentIndex = 0; // Reset index when reaching the end
  }
  displayTestimonial(currentIndex);
  currentIndex++;
}

// Display initial testimonial
displayTestimonial(currentIndex);

// Scroll testimonial every few seconds
setInterval(scrollTestimonials, 5000); // Adjust time interval as needed