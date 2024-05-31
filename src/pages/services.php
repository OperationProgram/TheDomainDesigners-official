<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="../css/services.css"> <!-- Link to your compiled CSS file -->
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/footer.css">
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
          <h1>Web Development Services</h1>
          <h2>Customized for Your Needs</h2>
          <button class="cta-button">Contact Us</button>
        </div>
      </div>
  </section>

  <section id="services">
    <div class="service-row">
      <div class="service-card large-card">
          <img src="../assets/blog-letters.jpg" >
          <h2>Wordpress Sites</h2>
          <a href="services/wordpress-sites.php"><button class="cta-button">Learn More</button></a>
      </div>

      <div class="service-card small-card">
          <img src="../assets/google.jpg" >
          <h2>SEO</h2>
          <a href="services/seo.php"><button class="cta-button">Learn More</button></a>
      </div>
    </div>

    <div class="service-row">
      <div class="service-card small-card">
          <img src="../assets/phone-plant-dark.jpg" >
          <h2>Web Apps</h2>
          <a href="services/web-apps.php"><button class="cta-button">Learn More</button></a>
      </div>

      <div class="service-card small-card">
          <img src="../assets/computer-glasses.jpg" >
          <h2>Custom Code Sites</h2>
          <a href="#"><button class="cta-button">Learn More</button></a>
      </div>
    </div>

    <div class="service-row">
      <div class="service-card large-card">
          <img src="../assets/social-media-services.jpg" >
          <h2>Social Media Marketing</h2>
          <a href="services/social-media.php"><button class="cta-button">Learn More</button></a>
      </div>

      <div class="service-card small-card">
          <img src="../assets/branding.jpg" >
          <h2>Branding</h2>
          <button class="cta-button">Learn More</button>
      </div>
    </div>
    
    <div class="lets-chat">
        <img src="../assets/laptop-side.png" data-aos="fade-right">
        <h2>Let's Chat</h2>
        <button class="cta-button">Contact Us</button>
    </div>
  
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <?php include 'Footer/footer.php';?>
</body>
</html>