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
    <title>The Domain Designers | About Us: Learn About Our Team</title>
    <meta name="description" content="Want to get to know us? The Domain Designers is an open book! We are always looking for help, apply now!">
    <meta name="robots" content="noindex,nofollow"> 
    <meta name="keywords" content="The Domain Designers">
    <meta name="author" content="The Domain Designers">
    <link rel="icon" type="image/x-icon" href="../assets/tdd_logo.svg">
    <link rel="stylesheet" href="../css/navbar.css"> <!-- Link to your homepage CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/about.css"> <!-- Custom CSS for About page -->
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../scripts/showSuccessMessage.js" defer></script> 

    <!-- AOS Library CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- AOS Library JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>
<body> 

<header>  
    <?php $basePath = '..';?>
    <?php include $basePath . '/pages/Navigation/navbar.php';?>
    <script src=" <?php echo '../scripts/navbarController.js';?>"></script>
</header>

<div class="overlay"></div>
<section class="hero-section">
<img class="sr-only" src="../assets/custom-code-services.jpg" />
    <div class="hero-content">
        <h1>Our Team</h1>
        <h2>The Domain Designers: Meet The Team</h2>
        <a href="../pages/contact.php"><button class="cta-button">Contact Us</button></a>
    </div>
</section>
<!-- <section class="hero about-hero" >
    <div class="container hero-container">
        <div class="hero-content" data-aos="slide-right" data-aos-duration="200" data-aos-once="true">
            <h1>About Us</h1>
            <p>The Domain Designers: Meet The Team
            </p>
        </div>
        <div class="hero-image">
            <img data-aos="slide-left" data-aos-duration="200" data-aos-once="true" src="../assets/Our-Team/Our-Team.svg" alt="Cartoon Infographic of people relaxing in a park">
        </div>
    </div>
</section> -->

<section class="about-section">
    <div class="container">
        <div class="about-content">
            <h2 data-aos="zoom-in" data-aos-duration="100" data-aos-once="true">Who We Are</h2>
            <p data-aos="slide-right" data-aos-duration="100" data-aos-once="true">We are innovators in the digital landscape, driven by a passion for crafting bespoke web solutions that empower small businesses to thrive in the digital age.</p>
            <p data-aos="slide-left" data-aos-duration="300" data-aos-once="true">With a deep understanding of market dynamics and cutting-edge technologies, we specialize in delivering tailored web development and design services that elevate your brand's online presence.</p>
            <p data-aos="slide-right" data-aos-duration="500" data-aos-once="true">Our commitment extends beyond just building websites; we are dedicated partners in your journey towards achieving sustainable growth and success.</p>
        </div>
    </div>
</section>


<section class="mission-section">
    <div class="container">
        <div class="mission-image">
            <img data-aos="slide-right" data-aos-duration="100" data-aos-once="true" src="../assets/bullet-points/digital-marketing.svg" alt="Cartoon Infographic of someone using social media">
        </div>
        <div class="mission">
            <h2 data-aos="zoom-in" data-aos-duration="100" data-aos-once="true">Our Mission</h2>
            <p data-aos="zoom-in" data-aos-duration="100" data-aos-once="true">Our mission at The Domain Designers is to transform innovative ideas into impactful digital experiences. We specialize in crafting intuitive and visually captivating websites that resonate deeply with our clients' target audiences. By merging creativity with technical excellence and a user-centric design approach, we aim to surpass expectations and deliver measurable results. Our steadfast commitment to continuous support and optimization ensures that our clients' websites evolve alongside their businesses, driving sustained growth and fostering competitive advantage.</p>
        </div>

    </div>
</section>

<section class="vision-section">
    <div class="container">
        <div class="vision">
            <h2 data-aos="zoom-in" data-aos-duration="100" data-aos-once="true">Our Vision</h2>
            <p data-aos="zoom-in" data-aos-duration="100" data-aos-once="true">Our vision at The Domain Designers is to be recognized as a pioneer in web design and development, known for our dedication to creating functional, aesthetically pleasing websites. We aim to leverage the latest technologies and industry best practices to deliver custom solutions that meet our clients' unique needs. By fostering innovation and collaboration, we seek to build enduring relationships and drive business success through digital excellence.</p>
        </div>
        <div class="vision-image">
            <img data-aos="slide-left" data-aos-duration="100" data-aos-once="true" src="../assets/bullet-points/branding.svg" alt="Cartoon Infographic of a person holding a light bulb">
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
        <img src="../assets/alex-pic.png" alt="The Domain Designers CoFounder - Alex Metzger">
        <h3>Alex Metzger</h3>
        <p>Co-Founder</p>
        <!-- <p>Brief description or bio of the team member.</p> -->
      </div>
      <div class="team-card">
        <img src="../assets/spencer-pic.png" alt="The Domain Designers CoFounder - Spencer Holan">
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

<!-- <section class="review-carousel">
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
</section> -->




<section class="join-team">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content">
                    <h2>Welcoming New Team Members!</h2>
                    <p>We are always looking for creative individuals to join our team. Please upload your resume or portfolio, and a member of our team will be in touch.</p>
                    <img src="../assets/people-writing.jpg" alt="People working collaboratively on a laptop">
                </div>
            </div>
            <div class="col">
                <form id="resume_form" method="post" enctype="multipart/form-data">
                <h2>Join Our Team</h2>

                <!-- <div id="loader">Loading...</div> -->
                    <div class="form-group">
                        <input id="full_name" type="text" name="name" placeholder="Full Name*" required><br>
                        <img id="name_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                        <span id="name_error" class="error_msg">Field is Required</span>
                    </div>
                    <div class="form-group">
                        <input id="phone" type="tel" name="phone" placeholder="Phone*"  required><br>
                        <img id="phone_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                        <span id="phone_error" class="error_msg">Field is Required</span>
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" name="email" placeholder="Email*" required><br>
                        <img id="email_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                        <span id="email_error" class="error_msg">Field is Required</span>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="Message (optional)"></textarea><br>
                    </div>
                    <div class="form-group">
                        <label class="resume-label" for="resume">Upload CV/Resume <span style="color: red;">*</span></label> 
                        <input id="resume" type="file" name="resume" accept=".pdf, .doc, .docx" required><br>
                    </div>
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                    <button type="submit">Submit</button>
                    <span id="form_error" class="error">There was a problem submitting the form. <br />
                                                Check the fields for errors.</span>
                    <p class="success">Submission successfully submitted!</p>
                    <p class="error">Something went wrong. Please refresh the page and try again.</p>
                </form>
            </div>
        </div>
    </div>

    <div id="spinner_overlay" class="spinner-overlay">
        <div class="spinner"></div>
    </div>
</section>


<!-- Response Message for debugging -->
<!-- <div id="responseMessage"></div> -->
<script type="module" src="../scripts/contactForm.js"></script>
<script type="module" src="../scripts/validators.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="module">
    import {validators} from "../scripts/validators.js";

    $(document).ready(function() {
        $('#resume_form').submit(function(e) {
            e.preventDefault();     

            const isValid = validators.validateForm();

            if (!isValid) {
                event.preventDefault();
                // Display error message beneath the form
                document.getElementById('form_error').style.display = "block";
                document.querySelector('.success').style.display = "none";
                // Prevent form submission
                event.preventDefault();

                return;
            }
            // Display loader
            // $('#loader').show();
            $('#spinner_overlay').css('display', 'flex');


            var formData = new FormData(this);

            $.ajax({
                url: '../plugins/resumeForm/submit_resume.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json', // Expect JSON response
                success: function(response) {
                    if (response.status === 'success') {
                        // $('#responseMessage').html('<p class="success">' + response.message + '</p>');
                        $('.success').css('display', 'block');
                        $('.error').css('display', 'none');
                        $('#resume_form')[0].reset(); // Optionally reset form fields
                        <?php
                            echo 'showMessage("Email sent successfully!");';
                        ?>
                    } else {
                        // $('#responseMessage').html('<p class="error">' + response.message + '</p>');
                        $('.success').css('display', 'none');
                        $('.error').css('display', 'block');
                        <?php
                            echo 'showMessage("Oops! Something went wrong.");';
                        ?>

                    }

                    
                },
                error: function(xhr, status, error) {
                    // $('#responseMessage').html('<p class="error">Error: ' + error + '</p>');
                    $('.success').css('display', 'none');
                    $('.error').css('display', 'block');
                    <?php
                        echo 'showMessage("Oops! Something went wrong.");';
                    ?>
                },
                complete: function() {
                    // Hide loader when request completes
                    // $('#loader').hide();
                    $('#spinner_overlay').css('display', 'none');

                }
            });
        });
    });
</script>

<script>
  AOS.init({
    offset: 100, // Offset (in px) from the original trigger point
    duration: 1000, // Animation duration (in ms)
    easing: 'ease', // Easing function
    once: true // Only once animation flag
  });
</script>
<!-- <script src="../scripts/reviewController.js"></script> -->


<?php include 'Footer/footer.php';?>

</body>
</html>