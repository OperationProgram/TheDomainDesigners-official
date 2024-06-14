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
            <img src="/src/assets/good/dev.svg" alt="About Us Image">
        </div>
    </div>
</section>

<section class="about-section">
    <div class="container">
        <h2>Who We Are</h2>
        <p>We are a dedicated team of web developers and designers passionate about creating high-performance, custom websites for small businesses.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet mi felis, sed venenatis erat venenatis eu. Sed sit amet tincidunt risus.</p>
    </div>
</section>


<section class="mission-section">
    <div class="container">
        <div class="mission-image">
            <img src="/src/assets/bullet-points/digital-marketing.svg" alt="Mission Image">
        </div>
        <div class="mission">
            <h2>Our Mission</h2>
            <p>To empower small businesses with robust, user-friendly websites that enhance their online presence and drive growth.</p>
        </div>

    </div>
</section>

<section class="vision-section">
    <div class="container">
        <div class="vision">
            <h2>Our Vision</h2>
            <p>To be the leading provider of affordable and effective web solutions tailored to the unique needs of small businesses.</p>
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
                    <img src="../assets/icons/mobile-responsive.png" alt="Mobile Responsive Icon">
                </div>
                <div class="feature-content">
                    <h3>Mobile Responsive</h3>
                    <p>Our expert team will ensure that your website is optimized for a seamless user experience on smartphones, tablets, and desktops.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img src="../assets/icons/ecommerce.png" alt="Ecommerce Compatibility Icon">
                </div>
                <div class="feature-content">
                    <h3>Ecommerce Compatibility</h3>
                    <p>Maximize your online sales potential with our ecommerce-compatible web development services.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img src="../assets/icons/security.png" alt="Security Icon">
                </div>
                <div class="feature-content">
                    <h3>Security (SSL)</h3>
                    <p>Protect your website and your customers' data with our SSL security services. Our expert team will ensure that your website is equipped with the latest security measures.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-icon">
                    <img src="../assets/icons/maintenance.png" alt="Maintenance Icon">
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



<footer>
    <div class="container">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </div>
</footer>

</body>
</html>