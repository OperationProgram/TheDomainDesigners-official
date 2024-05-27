<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="../css/about.css"> 
  <link rel="stylesheet" href="../css/navbar.css"> 
</head>
<body>

  <header>
    <?php $basePath = '..';?>
    <?php include $basePath . '/pages/Navigation/navbar.php';?>
    <script src=" <?php echo $basePath . '/scripts/navbarController.js';?>"></script>  
  </header>

  <section>
    <div class="hero-section">
      <div class="hero-content">
          <h1>Who We Are</h1>
          <p>Learn more about our mission, values, and team.</p>
          <button class="hero-button">Get Started</button>
      </div>
    </div>
  </section>

  <section class="about-section">
    <div class="about-grid">
      <div class="about-text">
        <h2>About Us</h2>
        <h3>Our Mission</h3>
        <p>Our mission is to provide the best services to our clients with utmost dedication and professionalism.</p>
        <p>We strive to deliver exceptional results and continuously improve our offerings to meet the evolving needs of our customers.</p>
        <button>Learn More</button>
      </div>
      <div class="about-image">
        <img src="../assets/skull-min.jpg" alt="About Us Image">
      </div>
    </div>
  </section>

  <section class="our-story-section">
    <div class="container">
      <h2>Our Story</h2>
      <p>Share the history of your company, how it started, and its journey so far. Use a timeline or narrative format with key milestones, challenges, and achievements.</p>
    </div>
  </section>

  <section class="our-values-section">
    <div class="container">
      <h2>Our Values</h2>
      <div class="values-grid">
        <div class="value-item">
          <h3>Integrity</h3>
          <p>We uphold the highest standards of integrity in all our actions.</p>
        </div>
        <div class="value-item">
          <h3>Customer Focus</h3>
          <p>We value our customers and strive to meet their needs and exceed their expectations.</p>
        </div>
        <div class="value-item">
          <h3>Collaboration</h3>
          <p>Fostering teamwork, communication, and inclusivity to achieve common goals.</p>
        </div>
        <div class="value-item">
          <h3>Innovation</h3>
          <p>Embracing creativity, curiosity, and forward-thinking to drive progress.</p>
        </div>
        <div class="value-item">
          <h3>Excellence</h3>
          <p>Committing to environmental stewardship, social responsibility, and long-term viability.</p>
        </div>
        <div class="value-item">
          <h3>Sustainability</h3>
          <p>We value our customers and strive to meet their needs and exceed their expectations.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="team-section">
    <h2>Meet the Team</h2>
    <div class="team-grid">
      <div class="team-card">
        <img src="../assets/alex-pic.png" alt="Team Member Name">
        <h3>Big Dickin</h3>
        <p>King of Company</p>
        <p>Brief description or bio of the team member.</p>
      </div>
      <div class="team-card">
        <img src="../assets/spencer-pic.png" alt="Team Member Name">
        <h3>Alex M</h3>
        <p>Mascot</p>
        <p>Brief description or bio of the team member.</p>
      </div>
      <div class="team-card">
        <img src="../assets/alex-pic.png" alt="Team Member Name">
        <h3>Alex M clone#2</h3>
        <p>CEO/Peasant</p>
        <p>Brief description or bio of the team member.</p>
      </div>
    </div>
  </section>  
</body>
</html>