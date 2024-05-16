<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="css/index.css"> <!-- Link to your compiled CSS file -->
  <link rel="stylesheet" href="css/navbar.css"> <!-- Link to your compiled CSS file -->

</head>

<body>

  <header>
    <?php include 'config.php'; ?>
    <script src="<?php echo $currentConfig['baseUrl'] . 'scripts/navbarController.js'?>"></script>
  </header>

<!-- Hero Section -->
<section class="hero-section">
    <!-- <video autoplay muted loop class="hero-video">
        <source src="assets/hero-section.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video> -->
    <div class="hero-content">
        <h1>Write Something Here</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <button class="cta-button">Free Consultation</button>
    </div>
</section>


<!-- Contact Section -->
<section class="contact-section fade-in-text">
    <div class="text-column">
      <h3>Disrupting Digital Spaces</h3>
      <h2>Full Service Digital Marketing & Advertising Agency</h2>
      <p>
        The Domain Designers doesn't conform to the ordinary. We're a collective of passionate designers and data-savvy strategists crafting plans that yield outcomes. Our forte lies in crafting top-notch visuals and compelling content that converts. We tailor our offerings to elevate your brand's position in the industry. As your brand's engine, we transcend conventional approaches to foster innovation and enduring progress.</p>
      <button>Learn More</button>
    </div>  
    <div class="image-column">
      <img src="assets/mountain-lake.jpg" alt="Image">
    </div>

  </section>
  
<!-- Work Flow Section -->
<section class="work-flow">
    <div class="clickable-section">
      <div class="overlay">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <h2>Develop</h2>
      <img src="assets/00.jpg" alt="Develop Image">
    </div>
    <div class="clickable-section">
      <div class="overlay">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <h2>Design</h2>
      <img src="assets/01.jpg" alt="Design Image">
    </div>
    <div class="clickable-section">
      <div class="overlay">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <h2>Deliver</h2>
      <img src="assets/02.jpg" alt="Deliver Image">
    </div>
  </section>
<!-- Other sections of your website -->


<section class="cta-section">
  <div class="container">
      <h2>Let's Bring Your Ideas to Life</h2>
      <p>Ready to start your project with us? Reach out today and let's create something amazing together!</p>
      <a href="contact.html" class="btn btn-primary">Get Started</a>
  </div>
</section>







<section class="about-section fade-in-text">
    <div class="text-column">
      <h3>About Us</h3>
      <h2>Our Story</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <button>Learn More</button>
    </div>
    <div class="image-column">
      <img src="assets/more/teamwork.jpg" alt="Image">
    </div>
  </section>


  <section class="sliding-feature-section">
    <div class="sliding-feature-content">
      <h2>Content Title</h2>
      <p>Content description goes here...</p>
      <button>Button</button>
    </div>
    <div class="sliding-feature-image">
      <img src="<?php echo $currentConfig['baseUrl'] . 'assets/more/DESIGN.jpg'?>" alt="Your Image">
    </div>
  </section>






  <section class="multi-image-section">
    <div class="image-row">
      <div class="image-container">
        <a href="your-link-here">
          <img src="assets/portfolio/p-tesla.jpg" alt="Image 1">
          <h2 class="image-title">Tesla</h2>
        </a>
      </div>
      <div class="image-container">
        <a href="your-link-here">
          <img src="assets/portfolio/p-shoes.jpg" alt="Image 2">
          <h2 class="image-title">Fine & Fancy</h2>
        </a>
      </div>
    </div>
    <div class="image-row">
      <div class="image-container">
        <a href="your-link-here">
          <img src="assets/portfolio/p-juice.jpg" alt="Image 3">
          <h2 class="image-title">Fresh Squeezed</h2>
        </a>
      </div>
      <div class="image-container">
        <a href="your-link-here">
          <img src="assets/portfolio/p-fashion.jpg" alt="Image 4">
          <h2 class="image-title">Pretty Girls</h2>
        </a>
      </div>
      <div class="image-container">
        <a href="your-link-here">
          <img src="assets/portfolio/p-dips.jpg" alt="Image 5">
          <h2 class="image-title">The Dip Factory</h2>
        </a>
      </div>
    </div>
  </section>



  <section class="testimonials-section">
    <div class="testimonials-container">
      <div class="testimonial">
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</p>
        <p>- John Doe</p>
      </div>
    </div>


  </section>

  <script src="scripts/handleSlideAnimation.js"></script>
  <script src="scripts/textPhaseEffect.js"></script>


</body>
</html>