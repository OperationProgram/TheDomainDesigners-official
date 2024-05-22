<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="../../css/service-partial.css"> <!-- Link to your compiled CSS file -->
  <link rel="stylesheet" href="../../css/navbar.css">

</head>

<body>

  <header>

    <nav class="navbar">
      
      <ul class="nav-menu" id="nav-menu">
          <li><a href="../../index.php">Home</a></li>
          <li><a href="../whyus.html">Why Us</a></li>
          <li><a href="../services.php">Services</a></li>
          <li><a href="#">Our Team</a></li>
          <li><a href="#">Contact Us</a></li>
          <div class="consultation">
              <button>Free Consultation</button>
          </div>
      </ul>
      <div class="hamburger-menu" id="hamburger-menu">
          <span class="hamburger-icon" id="hamburger-icon">&#9776;</span>
      </div>
    </nav>

    <?php include '../../config.php'; ?>
    <script src="<?php echo $currentConfig['baseUrl'] . 'scripts/navbarController.js'?>"></script>
    
  </header>

<!-- Hero Section -->
<section class="hero-section">
    
    <div class="hero-content">
        <video autoplay muted loop class="hero-video">
            <source src="../../assets/glow.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="cta">
            <h2>Scrolling to Success!</h2>
            <h1>Social Media Marketing</h1>
            <button class="cta-button">Contact Us</button>
        </div>

        <img src="../../assets/mobile.png">

    </div>

    <div class="hero-card-slide-container">
      
      <div class="hero-card">
        <img src="../../assets/mobile.png">
      </div>
      <div class="hero-card">
        <img src="../../assets/mobile.png">
      </div>
      <div class="hero-card">
        <img src="../../assets/mobile.png">
      </div>
      <div class="hero-card">
        <p>Help your brand grow seamlessly through social media platforms</p>
      </div>
    </div>

  </section>

  <section class="contents">
    
    <div class="contents-container">
      
      <a href="#">      
        <div class="content-title">
          <h2>Marketing Strategy</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>

      <a href="#">      
        <div class="content-title">
          <h2>Content Creation</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>

      <a href="#">      
        <div class="content-title">
          <h2>Ad Strategies</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>

      <a href="#">      
        <div class="content-title">
          <h2>Ad Analytics</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>

      <a href="#">      
        <div class="content-title">
          <h2>Social Media Platforms</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>
    </div>

  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>