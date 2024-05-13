function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  const threshold = window.innerHeight * 0.2; // 20% of viewport height

  // Check if the top edge of the element is within the viewport or if the top corners are within 20% of the viewport height
  return (
    (rect.top >= 0 && rect.top <= window.innerHeight) ||
    (rect.top <= threshold && rect.bottom >= 0)
  );
}

function slideImageIn() {
  const image = document.querySelector('.sliding-feature-image img');
  if (isInViewport(image)) {
    image.classList.add('slide-in');
  }
}

slideImageIn();

window.addEventListener('scroll', slideImageIn);