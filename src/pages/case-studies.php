<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="../css/services.css"> <!-- Link to your compiled CSS file -->
  <link rel="stylesheet" href="../css/navbar.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

</head>

<body>

  <header>
    <?php $basePath = '..';?>
    <?php include $basePath . '/pages/Navigation/navbar.php';?>
    <script src=" <?php echo $basePath . '/scripts/navbarController.js';?>"></script>
  </header>

  <!-- Hero Section -->
  <div class="overlay"></div>
  <section class="hero-section">
      <div class="hero-content">
        <div class="cta">
          <h1>Our Work</h1>
          <h2>Creating Concepts That Stick</h2>
          <button class="cta-button">Contact Us</button>
        </div>
      </div>
  </section>

  <section id="services">
    <div class="service-row">
      <div class="service-card wordpress">
          <img src="../assets/portfolio/p-dips.jpg" >
          <h2>Dip-Gal-Dips</h2>
          <a href="projects/dipgaldips.php"><button class="cta-button">Learn More</button></a>
      </div>

      <!-- <div class="service-card custom-code">
          <img src="../assets/SEO-services.jpg" >
          <h2>Omniclip</h2>
          <button class="cta-button">Learn More</button>
      </div>
    </div>

    <div class="service-row">
      <div class="service-card web-apps">
          <img src="../assets/phone-plant-dark.jpg" >
          <h2>Web Apps</h2>
          <button class="cta-button">Learn More</button>
      </div>

      <div class="service-card social-media">
          <img src="../assets/custom-code-services.jpg" >
          <h2>Custom Code Sites</h2>
          <a href="services/social-media.php"><button class="cta-button">Learn More</button></a>
      </div>
    </div>

    <div class="service-row">
      <div class="service-card ecommerce">
          <img src="../assets/social-media-services.jpg" >
          <h2>Social Media Marketing</h2>
          <button class="cta-button">Learn More</button>
      </div>

      <div class="service-card seo">
          <img src="../assets/branding-services.jpg" >
          <h2>Branding</h2>
          <button class="cta-button">Learn More</button>
      </div>
    </div>
    
    <div class="lets-chat">
        <img src="../assets/laptop-side.png" data-aos="fade-right">
        <h2>Let's Chat</h2>
        <button class="cta-button">Contact Us</button>
    </div> -->
  
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>