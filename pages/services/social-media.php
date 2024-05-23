<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="../../css/service-partial.css"> <!-- Link to your compiled CSS file -->
  <link rel="stylesheet" href="../../css/navbar.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

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
            <h2 class="custom-h2">Scrolling to Success!</h2>
            <h1 class="custom-h1">Social Media Marketing</h1>
            <button class="cta-button">Contact Us</button>
        </div>

        <img src="../../assets/mobile.png">

    </div>

    <div class="hero-card-slide-container" data-aos="fade-right" data-aos-duration="1000">
      
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
      
      <a href="#marketing-strategy">      
        <div class="content-title">
          <h2>Marketing Strategy</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>

      <a href="#content-creation">      
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

  <section id="marketing-strategy">
    <div class="main-cta">
      <div class="cta-column">
        <h2 class="custom-h2">Building Your Plan</h2>
        <h1 class="custom-h1">Marketing Strategy</h1>
        <p> Social media is no longer optional for businesses. It's a powerful platform to connect with customers, build brand loyalty, and drive sales. But managing multiple platforms, creating engaging content with high quality visuals, and analyzing results can be overwhelming.
         <br /><br />   
        That's where Kreative Media, a leading social media marketing company, comes in. Our visuals stand out so your brand can thrive, ensuring your messages resonate and capture your audience. We help businesses of all sizes develop and execute winning social media strategies that deliver real results. 
        </p>
        <button class="cta-button-dark">Let's Chat</button>
      </div>

      <div class="img-box" data-aos="fade-left" data-aos-duration="1000"></div>
    </div>

    <div class="icons">
      <div class="icon">
        <img src="../../assets/mobile-2.png">
        <h3>Data Analytics</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
      <div class="icon">
        <img src="../../assets/mobile-2.png">
        <h3>Data Analytics</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
      <div class="icon">
        <img src="../../assets/mobile-2.png">
        <h3>Data Analytics</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
      <div class="icon">
        <img src="../../assets/mobile-2.png">
        <h3>Data Analytics</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
    </div>
  </section>

  <section id="content-creation">
    <div class="main-cta">
      <div class="video-box">
        <img src="../../assets/mobile-2.png" alt="Video Thumbnail" class="video-thumbnail" id="video-thumbnail">
        <div class="play-button" id="play-button"></div>
        <video controls loop id="video">
            <source src="../../assets/glow.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
      </div>
      <script>
        document.getElementById('play-button').addEventListener('click', function() {
            var video = document.getElementById('video');
            var thumbnail = document.getElementById('video-thumbnail');
            var playButton = document.getElementById('play-button');

            thumbnail.style.display = 'none';
            playButton.style.display = 'none';
            video.style.display = 'block';
            video.play();
        });
      </script>
      

      <div class="cta-column">
        <h2 class="custom-h2">Check Out The Future</h2>
        <h1 class="custom-h1">Content Creation</h1>
        <p> Social media is no longer optional for businesses. It's a powerful platform to connect with customers, build brand loyalty, and drive sales. But managing multiple platforms, creating engaging content with high quality visuals, and analyzing results can be overwhelming.
         <br /><br />   
        That's where Kreative Media, a leading social media marketing company, comes in. Our visuals stand out so your brand can thrive, ensuring your messages resonate and capture your audience. We help businesses of all sizes develop and execute winning social media strategies that deliver real results. 
        </p>
        <!-- <button class="cta-button-dark">Let's Chat</button> -->
      </div>
    </div>
    
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({
      once: true
    });
  </script>
</body>