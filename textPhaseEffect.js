// Function to handle the intersection of the observed element
function handleIntersection(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fade-in'); // Add fade-in class if element is in viewport
      } else {
        entry.target.classList.remove('fade-in'); // Remove fade-in class if element is not in viewport
      }
    });
  }
  
  // Create an intersection observer instance
  const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.25 // Trigger when at least 25% of the observed element is in viewport
  });
  
  // Get all elements with the class 'fade-in-text'
  const elements = document.querySelectorAll('.fade-in-text');
  
  // Observe each element
  elements.forEach(element => {
    observer.observe(element);
  });