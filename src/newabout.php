<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Web Development Agency</title>
    <!-- <link rel="stylesheet" href="../src/css/newhome.css">  -->
    <link rel="stylesheet" href="../src/css/navbar.css"> <!-- Link to your homepage CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../src/css/newhome.css"> <!-- Custom CSS for About page -->

    <link rel="stylesheet" href="../src/css/newabout.css"> <!-- Custom CSS for About page -->
</head>
<body>

<header>  
    <?php $basePath = '.';?>
    <?php include 'pages/Navigation/navbar.php';?>
    <script src=" <?php echo 'scripts/navbarController.js';?>"></script>
</header>

<section class="hero about-hero">
    <div class="container hero-container">
        <div class="hero-content">
            <h1>About Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet mi felis.</p>
        </div>
        <div class="hero-image">
            <img src="/src/assets/Our-Team/Our-Team.svg" alt="About Us Image">
        </div>
    </div>
</section>

<section class="about-section">
    <div class="container">
        <h2>Who We Are</h2>
        <p>We are innovators in the digital landscape, driven by a passion for crafting bespoke web solutions that empower small businesses to thrive in the digital age.</p>
        <p>With a deep understanding of market dynamics and cutting-edge technologies, we specialize in delivering tailored web development and design services that elevate your brand's online presence.</p>
        <p>Our commitment extends beyond just building websites; we are dedicated partners in your journey towards achieving sustainable growth and success.</p>
    </div>
</section>


<section class="mission-section">
    <div class="container">
        <div class="mission-image">
            <img src="/src/assets/bullet-points/digital-marketing.svg" alt="Mission Image">
        </div>
        <div class="mission">
            <h2>Our Mission</h2>
            <p>To collaborate closely with emerging businesses, leveraging our expertise in web development to cultivate robust, user-friendly websites. By enhancing online presence and driving growth together, we aim to forge enduring partnerships that propel both our clients and ourselves towards sustained success.</p>
        </div>

    </div>
</section>

<section class="vision-section">
    <div class="container">
        <div class="vision">
            <h2>Our Vision</h2>
            <p>The Domain Designers, envision forging strong partnerships with fellow emerging businesses. Our aim is to lead the way as the foremost provider of affordable and effective web solutions, meticulously tailored to meet the distinctive needs of small enterprises. Together, we strive to elevate your online presence and propel your growth in the digital landscape.</p>
        </div>
        <div class="vision-image">
            <img src="/src/assets/bullet-points/branding.svg" alt="Vision Image">
        </div>
    </div>
</section>


<section class="key-features">
    <div class="container">
        <h2>Key Features for Your Website "MOVE TO SERVICES"</h2>
        <div class="features">
            <div class="feature">
                <div class="feature-icon">
                    <img src="/src/assets/bullet-points/branding.svg" alt="Mobile Responsive Icon">
                </div>
                <div class="feature-content">
                    <h3>Mobile Responsive</h3>
                    <p>Our expert team will ensure that your website is optimized for a seamless user experience on smartphones, tablets, and desktops.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img src="/src/assets/bullet-points/branding.svg" alt="Ecommerce Compatibility Icon">
                </div>
                <div class="feature-content">
                    <h3>Ecommerce Compatibility</h3>
                    <p>Maximize your online sales potential with our ecommerce-compatible web development services.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img src="/src/assets/bullet-points/branding.svg" alt="Security Icon">
                </div>
                <div class="feature-content">
                    <h3>Security (SSL)</h3>
                    <p>Protect your website and your customers' data with our SSL security services. Our expert team will ensure that your website is equipped with the latest security measures.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img src="/src/assets/bullet-points/branding.svg" alt="Maintenance Icon">
                </div>
                <div class="feature-content">
                    <h3>Maintenance</h3>
                    <p>Ensure your website runs smoothly and stays up-to-date with our web maintenance services.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-team">
    <div class="container">
        <h2>Our Team</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="/src/assets/alex-pic.png" alt="Team Member 1">
                <h3>John Doe</h3>
                <p>Web Developer</p>
            </div>
            <div class="team-member">
                <img src="/src/assets/team-member2.jpg" alt="Team Member 2">
                <h3>Jane Smith</h3>
                <p>Graphic Designer</p>
            </div>
            <!-- Add more team members as needed -->
        </div>
    </div>
</section>



<section class="join-team">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="content">
          <h2>Join Our Team</h2>
          <p>We are always looking for creative individuals to join our team. Please upload your resume or portfolio, and a member of our team will be in touch.</p>
          <img src="/src/assets/alex-pic.png" alt="Team Member 1">
        </div>
      </div>
      <div class="col">
        <form action="submit_resume.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
          </div>
          <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <label for="resume">Upload Resume or Portfolio</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
          </div>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>




<footer>
    <div class="container">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </div>
</footer>

</body>
</html>