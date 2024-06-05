<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TheDomainDesigners | Web Design & Development Services for Startups</title>
  <meta name="description" content="Elevate your startup with exceptional web design and development by TheDomainDesigners. We craft user-friendly, high-performing websites that empower growth. Explore our services and take your vision to the next level.">
  <meta name="robots" content="noindex,nofollow"> <!-- Remove in production -->
  <meta name="keywords" content="thedomaindesigners">
  <meta name="author" content="TheDomainDesigners">
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
    <img class="sr-only" alt="Open Laptop on a Desk" src="../assets/custom-code-services.jpg" />
      <div class="hero-content">
        <!-- <div class="cta"> -->
          <h1>Web Development Services</h1>
          <h2>Customized for Your Needs</h2>
          <button class="cta-button">Contact Us</button>
        <!-- </div> -->
      </div>
  </section>

  <section id="services">
    <div class="service-row">
      <div class="service-card large-card">
          <img src="../assets/blog-letters.jpg" alt="Building blogs with WordPress">
          <h2>Wordpress Sites</h2>
          <a href="services/wordpress-sites.php"><button class="cta-button">Learn More</button></a>
      </div>

      <div class="service-card small-card">
          <img src="../assets/google.jpg" alt="Boost Your Website's Visibility: Powerful SEO for Startups">
          <h2>SEO</h2>
          <a href="services/seo.php"><button class="cta-button">Learn More</button></a>
      </div>
    </div>

    <div class="service-row">
      <div class="service-card small-card">
          <img src="../assets/phone-plant-dark.jpg" alt="Web apps that help your business flourish">
          <h2>Web Apps</h2>
          <a href="services/web-apps.php"><button class="cta-button">Learn More</button></a>
      </div>

      <div class="service-card small-card">
          <img src="../assets/computer-glasses.jpg" alt="Maintaining website performance with code expertise">
          <h2>Maintenance</h2>
          <a href="services/maintenance.php"><button class="cta-button">Learn More</button></a>
      </div>
    </div>

    <div class="service-row">
      <div class="service-card large-card">
          <img src="../assets/social-media-services.jpg" alt="Managing your social media presence across platforms">
          <h2>Social Media Marketing</h2>
          <a href="services/social-media.php"><button class="cta-button">Learn More</button></a>
      </div>

      <div class="service-card small-card">
          <img src="../assets/branding.jpg" alt="We create memorable logos and brand elements">
          <h2>Branding</h2>
          <a href="services/branding.php"><button class="cta-button">Learn More</button></a>
      </div>
    </div>
    
    <div class="lets-chat">
        <img src="../assets/laptop-side.png" data-aos="fade-right" alt="Open laptop computer">
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