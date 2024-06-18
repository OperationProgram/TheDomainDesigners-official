<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Web Development Agency</title>
    <!-- <link rel="stylesheet" href="../src/css/newhome.css">  -->
    <link rel="stylesheet" href="../src/css/navbar.css"> <!-- Link to your homepage CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
        <div class="about-content">
            <h2>Who We Are</h2>
            <p>We are innovators in the digital landscape, driven by a passion for crafting bespoke web solutions that empower small businesses to thrive in the digital age.</p>
            <p>With a deep understanding of market dynamics and cutting-edge technologies, we specialize in delivering tailored web development and design services that elevate your brand's online presence.</p>
            <p>Our commitment extends beyond just building websites; we are dedicated partners in your journey towards achieving sustainable growth and success.</p>
        </div>
        <div class="about-graphic">
            <img src="/src/assets/UI-Grcs/Leaf-1.png" alt="UI Graphic">
        </div>
    </div>
</section>


<section class="mission-section">
    <div class="container">
        <div class="mission-image">
            <img src="/src/assets/bullet-points/digital-marketing.svg" alt="Mission Image">
        </div>
        <div class="mission">
            <h2>Our Mission</h2>
            <p>To empower small businesses by providing professional and cost-effective online solutions. We aim to establish long-term partnerships by offering reliable web maintenance and hosting services.</p>
        </div>

    </div>
</section>

<section class="vision-section">
    <div class="container">
        <div class="vision">
            <h2>Our Vision</h2>
            <p>To be the trusted partner of choice for small businesses seeking to thrive online. We envision a digital landscape where every small business can achieve growth and success through our tailored web solutions and dedicated support.</p>
        </div>
        <div class="vision-image">
            <img src="/src/assets/bullet-points/branding.svg" alt="Vision Image">
        </div>
    </div>
</section>



<section class="team-section">
    <div class="container">
        <h2>Our Team</h2>
        <div class="team-cards">
            <div class="team-card">
                <div class="team-member">
                    <img src="/src/assets/spencer-pic.png" alt="Team Member 1">
                    <div class="member-info">
                        <h3>Spencer</h3>
                        <p>Co-Founder / Web Developer</p>
                    </div>
                </div>
            </div>
            <div class="team-card">
                <div class="team-member">
                    <img src="/src/assets/alex-pic.png" alt="Team Member 2">
                    <div class="member-info">
                        <h3>Jane Smith</h3>
                        <p>Designer / UX Specialist</p>
                    </div>
                </div>
            </div>
            <!-- Add more team cards as needed -->
        </div>
    </div>
</section>

<section class="review-carousel">
    <div class="container">
        <h2>Read our reviews</h2>
        <div class="carousel">
            <button class="carousel-control prev" aria-label="Previous review">&lt;</button>
            <div class="carousel-track-container">
                <ul class="carousel-track">
                    <li class="carousel-slide current-slide">
                        <div class="review">
                            <div class="rating">★★★★★</div>
                            <p>I bought a couple of used cellphones from GoRecell...</p>
                            <div class="reviewer">
                                <p class="name">Joselito F.</p>
                                <p class="source">Trustpilot</p>
                            </div>
                        </div>
                    </li>
                    <li class="carousel-slide">
                        <div class="review">
                            <div class="rating">★★★★★</div>
                            <p>Initially a bit skeptical as the process was too...</p>
                            <div class="reviewer">
                                <p class="name">Bob A.</p>
                                <p class="source">Google Plus</p>
                            </div>
                        </div>
                    </li>
                    <li class="carousel-slide">
                        <div class="review">
                            <div class="rating">★★★★★</div>
                            <p>Great Service! Super quick and reliable!...</p>
                            <div class="reviewer">
                                <p class="name">Carling L.</p>
                                <p class="source">Google Plus</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <button class="carousel-control next" aria-label="Next review">&gt;</button>
        </div>
        <div class="carousel-nav">
            <button class="carousel-indicator current-slide"></button>
            <button class="carousel-indicator"></button>
            <button class="carousel-indicator"></button>
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



<script src="reviewController.js"></script>

<footer>
    <div class="container">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </div>
</footer>

</body>
</html>