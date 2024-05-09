function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
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