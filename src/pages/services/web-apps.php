<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="../../css/service-partial.css">
  <link rel="stylesheet" href="../../css/web-apps.css">
  <link rel="stylesheet" href="../../css/navbar.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

</head>

<body>

  <header>
    <?php $basePath = '../..';?>
    <?php include $basePath . '/pages/Navigation/navbar.php';?>
    <script src=" <?php echo $basePath . '/scripts/navbarController.js';?>"></script>
  </header>

  <div class="overlay"></div>

  <section class="hero-section">
    <div class="hero-content">
        <img class="background-hero-img" src="../../assets/purple-right-background.jpg">
        <div class="cta">
            <h2 class="custom-h2 hero-gradient">Full Stack Solutions</h2>
            <h1 class="custom-h1">Web Apps</h1>
            <button class="cta-button">Contact Us</button>
        </div>
        <img class="hero-img" src="../../assets/icons/webapp.svg">
    </div>
    <div class="hero-card-slide-container" data-aos="fade-right" data-aos-duration="1200">
      <div class="hero-card">
        <img src="../../assets/laptop-dark-code.jpg">
      </div>
      <div class="hero-card">
        <img src="../../assets/cloud-computing.jpg">
      </div>
      <div class="hero-card">
        <img src="../../assets/ipad-app.jpg">
      </div>
      <div class="hero-card">
        <p>Help your brand grow seamlessly through social media platforms</p>
      </div>
    </div>
  </section>
  
  <section class="contents">
    <div class="contents-container">
      <a href="#section-1-header">      
        <div class="content-title">
          <h2>Frontend</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>
      <a href="#section-2-header">      
        <div class="content-title">
          <h2>Backend</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>
      <a href="#section-3-header">      
        <div class="content-title">
          <h2>Database Management</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>
    </div>
  </section>

  <section id="section-1-header" class="section-5">
    <div class="sub-cta">
      <div class="cta-column">
        <h2 class="custom-h2">Sophisticated UI/UX</h2>
        <h1 class="custom-h1">Frontend Technologies</h1>
        <p> Social media is no longer optional for businesses. It's a powerful platform to connect with customers, build brand loyalty, and drive sales. But managing multiple platforms, creating engaging content with high quality visuals, and analyzing results can be overwhelming.
         <br /><br />   
        That's where Kreative Media, a leading social media marketing company, comes in. Our visuals stand out so your brand can thrive, ensuring your messages resonate and capture your audience. We help businesses of all sizes develop and execute winning social media strategies that deliver real results. 
        </p>
        <button class="cta-button-dark">Let's Chat</button>
      </div>

      <div class="img-box border-radius-curved-tr" data-aos="fade-left" data-aos-duration="1000"></div>
    </div>

    <div class="icons">
      <div class="icon" data-aos="fade-down" data-aos-duration="1500">
        <img src="../../assets/icons/react.svg">
        <h3>React</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
      <div class="icon" data-aos="fade-up" data-aos-duration="1500">
        <img src="../../assets/icons/js.svg">
        <h3>Es6 JS</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
      <div class="icon" data-aos="fade-up" data-aos-duration="1500">
        <img src="../../assets/icons/bootstrap.svg">
        <h3>Bootstrap</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
    </div>
  </section>

  <section id="section-2-header" class="section-5">
    <div class="sub-cta">
      <div class="cta-column">
        <h2 class="custom-h2">Building Your Architecture</h2>
        <h1 class="custom-h1">Backend Technologies</h1>
        <p> Social media is no longer optional for businesses. It's a powerful platform to connect with customers, build brand loyalty, and drive sales. But managing multiple platforms, creating engaging content with high quality visuals, and analyzing results can be overwhelming.
         <br /><br />   
        That's where Kreative Media, a leading social media marketing company, comes in. Our visuals stand out so your brand can thrive, ensuring your messages resonate and capture your audience. We help businesses of all sizes develop and execute winning social media strategies that deliver real results. 
        </p>
        <button class="cta-button-dark">Let's Chat</button>
      </div>

      <div class="img-box border-radius-curved-tr" data-aos="fade-left" data-aos-duration="1000"></div>
    </div>

    <div class="icons">
      <div class="icon" data-aos="fade-down" data-aos-duration="1500">
        <img src="../../assets/icons/flask.svg">
        <h3>Flask</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
      <div class="icon" data-aos="fade-up" data-aos-duration="1500">
        <img src="../../assets/icons/nodejs.svg">
        <h3>Node JS</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
      <div class="icon" data-aos="fade-up" data-aos-duration="1500">
        <img src="../../assets/icons/aws.svg">
        <h3>Amazon Web Services</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
    </div>
  </section>

  <section id="section-3-header" class="section-5">
    <div class="sub-cta">
      <div class="cta-column">
        <h2 class="custom-h2">Storing Data Securely</h2>
        <h1 class="custom-h1">Database Management</h1>
        <p> Social media is no longer optional for businesses. It's a powerful platform to connect with customers, build brand loyalty, and drive sales. But managing multiple platforms, creating engaging content with high quality visuals, and analyzing results can be overwhelming.
         <br /><br />   
        That's where Kreative Media, a leading social media marketing company, comes in. Our visuals stand out so your brand can thrive, ensuring your messages resonate and capture your audience. We help businesses of all sizes develop and execute winning social media strategies that deliver real results. 
        </p>
        <button class="cta-button">Let's Chat</button>
      </div>

      <div class="img-box border-radius-curved-tr" data-aos="fade-left" data-aos-duration="1000"></div>
    </div>

    <div class="icons">
      <div class="icon" data-aos="fade-down" data-aos-duration="1500">
        <img src="../../assets/icons/sql.svg">
        <h3>SQL</h3>
        <p>We don't just guess - we leverage data and analytics to inform our strategies and ensure optimal results for your brand. We track key metrics and constantly refine your campaigns for maximum impact.</p>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({
      once: true
    });
  </script>

  <?php include '../Footer/footer.php';?>
</body>