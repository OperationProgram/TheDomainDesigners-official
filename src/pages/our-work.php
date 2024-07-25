<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Domain Designers | Our Work: Websites That Make a Difference</title>
  <meta name="description" content="Explore our portfolio of successful website projects for startups and emerging ventures.">
  <meta name="robots" content="noindex,nofollow"> <!-- Remove in production -->
  <meta name="keywords" content="The Domain Designers">
  <meta name="author" content="The Domain Designers">
  <link rel="icon" type="image/x-icon" href="../assets/tdd_logo.svg">
  <link rel="preload" href="../assets/good/cloud-overlay-compressed.png" as="image">
  <link rel="stylesheet" href="../css/portfolios.css"> 
  <link rel="stylesheet" href="../css/our-work.css"> 
  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/footer.css">
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
      <div class="overlay-1"></div>
      <div class="overlay-2"></div>
    <!-- <canvas id="hero-canvas"></canvas> -->
  <!-- <img class="sr-only" src="../assets/UI-UX_graphic.jpg" /> -->
      <div class="hero-content">
          <h1>Our Work</h1>
          <h2>Creating Concepts That Stick</h2>
          <a href="../pages/contact.php"><button class="cta-button">Contact Us</button></a>
      </div>
  </section>

  <section id="services">
    <div class="service-row">
      <div class="service-card wordpress">
          <img src="../assets/dipgaldips/caesar_salad_dressing_1280x1063.jpg" alt="Dip Gal Dips Portfolio Picture: Caesar Salad Dressing Dip" />
          <h2>Dip-Gal-Dips</h2>
          <a href="projects/dipgaldips.php" aria-label="View DipGalDips Site Button only seen on hover"><button class="cta-button">View Site</button></a>
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
        <h2>Start Here</h2>
        <button class="cta-button">Contact Us</button>
    </div> -->
  
  </section>

  <?php include 'Footer/footer.php';?>
</body>
</html>