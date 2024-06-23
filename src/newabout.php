<?php
    session_start();
    // Generate CSRF token if not set
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    ?>


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



<!-- <section class="team-section">
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
        </div>
    </div>
</section> -->

<section class="team-section">
    <h2>Meet the Team</h2>
    <div class="team-grid">
      <div class="team-card">
        <img src="assets/alex-pic.png" alt="TheDomainDesigners CoFounder - Alex Metzger">
        <h3>Alex Metzger</h3>
        <p>Co-Founder</p>
        <!-- <p>Brief description or bio of the team member.</p> -->
      </div>
      <div class="team-card">
        <img src="assets/spencer-pic.png" alt="TheDomainDesigners CoFounder - Spencer Holan">
        <h3>Spencer Holan</h3>
        <p>Co-Founder</p>
        <!-- <p>Brief description or bio of the team member.</p> -->
      </div>
      <!-- <div class="team-card">
        <img src="../assets/alex-pic.png" alt="Team Member Name">
        <h3>Name Here</h3>
        <p>Title</p>
        <p>Brief description or bio of the team member.</p>
      </div>
    </div> -->
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
                    <form id="resumeForm" method="post" enctype="multipart/form-data">
                        <input type="text" name="name" placeholder="Name" required><br>
                        <input type="tel" name="phone" placeholder="Phone" pattern="\d+" required><br>
                        <input type="email" name="email" placeholder="Email" required><br>
                        <textarea name="message" placeholder="Message" required></textarea><br>
                        <input type="file" name="resume" required><br>
                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section> 



<div id="responseMessage"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#resumeForm').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            var formData = new FormData(this);

            $.ajax({
                url: 'submit_resume.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#responseMessage').html(response); // Display response on the page
                },
                error: function(xhr, status, error) {
                    $('#responseMessage').html('<p class="error">Error: ' + error + '</p>'); // Display error message
                }
            });
        });
    });
</script>


<script src="reviewController.js"></script>

<footer>
    <div class="container">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </div>
</footer>

</body>
</html>