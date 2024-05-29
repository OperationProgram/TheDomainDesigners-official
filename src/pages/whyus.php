<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Us - Our Process</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="../css/whyus.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>

    <header>
        <?php $basePath = '..';?>
        <?php include $basePath . '/pages/Navigation/navbar.php';?>
        <script src=" <?php echo $basePath . '/scripts/navbarController.js';?>"></script>  
    </header>

    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content" data-aos="zoom-in">
            <h1>Why Choose Us</h1>
            <p>We provide a complete solution to bring your ideas to life.</p>
            <a href="#design">Learn More</a>
        </div>
    </section>

    <section id="design-develop-deliver">
        <div class="process-section" id="design">
            <div class="process-content" data-aos="fade-up">
                <div class="process-icon">
                    <img src="../assets/lightbulb-infographic.png" alt="Design Icon">
                </div>
                <div class="process-text">
                    <h2>Design</h2>
                    <p>Our design process starts with understanding your brand, your vision, and your goals. We create visually stunning designs that resonate with your audience and deliver a seamless user experience.</p>
                </div>
            </div>
        </div>

        <div class="process-section" id="develop">
            <div class="process-content" data-aos="fade-up" data-aos-delay="100">
                <div class="process-icon">
                    <img src="../assets/computer-infographic.png" alt="Develop Icon">
                </div>
                <div class="process-text">
                    <h2>Develop</h2>
                    <p>Our development team turns your designs into fully functional websites using the latest technologies. We ensure your site is fast, responsive, and optimized for search engines.</p>
                </div>
            </div>
        </div>

        <div class="process-section" id="deliver">
            <div class="process-content" data-aos="fade-up" data-aos-delay="200">
                <div class="process-icon">
                    <img src="../assets/deliver-infographic.png" alt="Deliver Icon">
                </div>
                <div class="process-text">
                    <h2>Deliver</h2>
                    <p>Once development is complete, we rigorously test your website and make sure everything is perfect before launch. We deliver a website that exceeds your expectations and helps your business grow.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>