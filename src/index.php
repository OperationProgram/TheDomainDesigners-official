<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="css/index.css"> <!-- Link to your compiled CSS file -->
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/footer.css">
</head>

<body>
  <header>  
    <?php $basePath = '.';?>
    <?php include 'pages/Navigation/navbar.php';?>
    <script src=" <?php echo 'scripts/navbarController.js';?>"></script>
  </header>

<!-- Hero Section -->
<div class="overlay"></div>
<section class="hero-section">
    <div class="hero-content">
        <h1>One Size Doesn't Fit All</h1>
        <h2>Get a Custom-Built Website Tailored to Your Needs.</h2>
        <button class="cta-button">Free Consultation</button>
    </div>
</section>


<!-- Contact Section -->
<section class="contact-section fade-in-text">
  <div class="two-column-layout">
      <div class="text-column">
          <h3>Innovating Online Experiences</h3>
          <h2>Comprehensive Web Solutions for Your Business</h2>
          <p>
            Ready to boost your online presence? Our expert web developers are here to make it happen. Whether you're looking for a sleek new website, a fresh redesign, or innovative web applications, we've got the skills and creativity to bring your vision to life. Let's create something amazing together – reach out to us today!
          </p>
          <button>Contact Us</button>
      </div>  
      <div class="image-column">
          <img src="assets/teamwork.jpg" alt="Image">
      </div>
  </div>
</section>
  
<!-- Work Flow Section -->

<section class="work-flow">
    <div class="clickable-section">
        <div class="overlay">
           <p>Our development process begins with close collaboration with our clients to understand their unique needs and goals. We create a customized design that reflects their brand identity and vision. Every detail is crafted with precision to ensure the final product not only looks stunning but also provides an exceptional user experience.</p>
        </div>
        <h2>Develop</h2>
        <img src="assets/00.jpg" alt="Develop Image">
    </div>
    <div class="clickable-section">
        <div class="overlay">
           <p>With a solid design plan in place, we move on to the development phase. Our team of skilled developers bring the design to life, building a website that is both functional and responsive. We ensure that every element meets the highest standards of performance, security, and accessibility, delivering a seamless and engaging digital experience.</p>
        </div>
        <h2>Design</h2>
        <img src="assets/01.jpg" alt="Design Image">
    </div>
    <div class="clickable-section">
        <div class="overlay">
           <p>Once development is complete, we rigorously test the website to ensure it meets all specifications and performs flawlessly. We then launch the site with a comprehensive marketing strategy tailored to reach the target audience and drive results. Our commitment doesn’t end at launch; we provide ongoing support and optimization to ensure long-term success.</p>
        </div>
        <h2>Deliver</h2>
        <img src="assets/02.jpg" alt="Deliver Image">
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sections = document.querySelectorAll('.clickable-section');

        sections.forEach(section => {
            const header = section.querySelector('h2');
            header.addEventListener('click', function () {
                sections.forEach(sec => {
                    sec.classList.remove('open');
                });
                section.classList.add('open');
            });
        });
    });
</script>

<section class="about-section fade-in-text">
  <div class="two-column-layout">
    <div class="text-column">
      <h3>Dreams into Reality</h3>
      <h2>Partnering with Young Companies</h2>
      <p>
        Here at The Domain Designers, we believe in more than just providing services – we believe in fostering partnerships and growing together with our clients. We're passionate about collaborating with young companies and startups, becoming an integral part of their development journey from inception to success. We're not here to simply cash a check and disappear; we're here to roll up our sleeves, dive into the trenches, and work alongside you every step of the way.
      </p>
      <button>Learn More</button>
    </div>
    <div class="image-column">
      <img src="assets/teamwork.jpg" alt="Image">
    </div>
  </div>
  </section>
  
  <section class="multi-image-section">
    <div class="image-row">
        <div class="image-container">
            <a href="assets/portfolio/p-tesla.jpg">
                <img src="assets/portfolio/p-tesla.jpg" alt="Image 1">
                <h2 class="image-title">Cars</h2>
            </a>
        </div>
        <div class="image-container">
            <a href="assets/portfolio/p-shoes.jpg">
                <img src="assets/portfolio/p-shoes.jpg" alt="Image 2">
                <h2 class="image-title">Fine & Fancy</h2>
            </a>
        </div>
    </div>
    <div class="image-row">
        <div class="image-container">
            <a href="assets/portfolio/p-juice.jpg">
                <img src="assets/portfolio/p-juice.jpg" alt="Image 3">
                <h2 class="image-title">Fresh Squeezed</h2>
            </a>
        </div>
        <div class="image-container">
            <a href="assets/portfolio/p-fashion.jpg">
                <img src="assets/portfolio/p-fashion.jpg" alt="Image 4">
                <h2 class="image-title">Fashion</h2>
            </a>
        </div>
        <div class="image-container">
            <a href="assets/portfolio/p-dips.jpg">
                <img src="assets/portfolio/p-dips.jpg" alt="Image 5">
                <h2 class="image-title">The Dip Factory</h2>
            </a>
        </div>
    </div>
</section>

<section class="about-section fade-in-text">
  <div class="two-column-layout">
    <div class="text-column">
      <h3>Turning Visions into Tangible Realities</h3>
      <h2>Empowering Emerging Ventures</h2>
      <p>At The Domain Designers, we're dedicated to more than just delivering services – we're committed to nurturing enduring partnerships and evolving alongside our clients. Our fervor lies in teaming up with burgeoning enterprises and startups, embedding ourselves in their growth trajectory from conception to triumph. We're not merely transactional; we're invested collaborators, ready to immerse ourselves in the journey, shoulder to shoulder, ensuring mutual success every step of the way.</p>
      <button>Learn More</button>
    </div>
    <div class="image-column">
      <img src="assets/teamwork.jpg" alt="Image">
    </div>
  </div>
  </section>
  
  <section class="testimonials-section">
        <h2 class="testimonials-title">What Our Clients Say</h2>
        <div class="testimonials-wrapper">
            <div class="testimonials-container">
                <div class="testimonial">
                    <p>"Working with Innovate Web Solutions has been a game changer for our business. Their attention to detail and innovative designs exceeded our expectations."</p>
                    <p>- Sarah Williams, CEO of Tech Ventures</p>
                </div>
                <div class="testimonial">
                    <p>"The team at Innovate Web Solutions truly understands our vision and has delivered a website that perfectly aligns with our brand. Highly recommended!"</p>
                    <p>- Michael Johnson, Founder of GreenEarth</p>
                </div>
                <div class="testimonial">
                    <p>"Their expertise in web development and marketing has significantly boosted our online growth. We couldn't be happier with the results."</p>
                    <p>- Emily Brown, Marketing Director at EcoStart</p>
                </div>
                <!-- Duplicate testimonials for seamless loop -->
                <div class="testimonial">
                    <p>"Working with Innovate Web Solutions has been a game changer for our business. Their attention to detail and innovative designs exceeded our expectations."</p>
                    <p>- Sarah Williams, CEO of Tech Ventures</p>
                </div>
                <!-- <div class="testimonial">
                    <p>"The team at Innovate Web Solutions truly understands our vision and has delivered a website that perfectly aligns with our brand. Highly recommended!"</p>
                    <p>- Michael Johnson, Founder of GreenEarth</p>
                </div>
                <div class="testimonial">
                    <p>"Their expertise in web development and marketing has significantly boosted our online growth. We couldn't be happier with the results."</p>
                    <p>- Emily Brown, Marketing Director at EcoStart</p>
                </div> -->
            </div>
        </div>
    </section>


  <script src="scripts/testimonialController.js"></script>
  <script src="scripts/textPhaseEffect.js"></script>

  <?php include 'pages/Footer/footer.php';?>
</body>
</html>