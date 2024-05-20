<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="../css/services.css"> <!-- Link to your compiled CSS file -->
  <link rel="stylesheet" href="../css/navbar.css">

</head>

<body>

  <header>
    <?php include '../config.php'; ?>
    <script src="<?php echo $currentConfig['baseUrl'] . 'scripts/navbarController.js'?>"></script>
  </header>

  <!-- Hero Section -->1
  <section class="hero-section">
      <div class="hero-content">
        <div class="cta">
          <h1>Web Development Services</h1>
          <h2>Customized for Your Needs</h2>
          <button class="cta-button">Contact Us</button>
        </div>
      </div>
  </section>

  <section id="service-card">
    <div class="service-card wordpress">
        <img src="../assets/assets/pc-infographic.png" >
        <h2>Wordpress</h2>
        <button class="cta-button">Learn More</button>
    </div>

    <div class="service-card custom-code">
        <img src="../assets/information.jpg" >
        <h2>Custom Code</h2>
        <button class="cta-button">Learn More</button>
    </div>

    <div class="service-card web-apps">
        <img src="../assets/more/WEBDEV.jpg" >
        <h2>Web Apps</h2>
        <button class="cta-button">Learn More</button>
    </div>

    <div class="service-card social-media">
        <img src="../assets/more/deliver-image.jpg" >
        <h2>Social Media Marketing</h2>
        <button class="cta-button">Learn More</button>
    </div>

    <div class="service-card ecommerce">
        <img src="../assets/more/ecommerce.jpg" >
        <h2>E-Commerce</h2>
        <button class="cta-button">Learn More</button>
    </div>

    <div class="service-card seo">
        <img src="../assets/more/SEO.jpg" >
        <h2>SEO</h2>
        <button class="cta-button">Learn More</button>
    </div>
  
  </section>
</body>
</html>