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

  <!-- Hero Section -->
  <section class="hero-section">
      <!-- <video autoplay muted loop class="hero-video">
          <source src="assets/hero-section.mp4" type="video/mp4">
          Your browser does not support the video tag.
      </video> -->
      <div class="hero-content">
        <div class="cta">
          <h1>Web Development Services</h1>
          <h2>Customized for Your Needs</h2>
          <button class="cta-button">Contact Us</button>
        </div>
      </div>
  </section>
</body>
</html>