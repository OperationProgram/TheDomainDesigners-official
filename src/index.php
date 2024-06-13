<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Domain Designers | Hire Web Designers & Developers - Launch Your Vision </title>
  <meta name="description" content="Hire web designers & developers at The Domain Designers. We craft user-friendly websites that empower startups to thrive. Get a free consultation today!">
  <meta name="robots" content="noindex,nofollow"> <!-- Remove in production -->
  <meta name="keywords" content="web design, web developers, hire web designers, startup web design, development for startups, Houston web design, The Domain Designers">
  <meta name="author" content="The Domain Designers">
  <link rel="icon" type="image/x-icon" href="assets/tdd_logo.svg">
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
        <h1>Launch Your Dream Website</h1>
        <h2> Hire Web Developers Who Deliver Results</h2>
        <a href="pages/contact.php"><button class="cta-button">Free Consultation</button></a>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section fade-in-text">
  <div class="two-column-layout">
      <div class="text-column">
          <h3>Crafting Exceptional Websites</h3>
          <h2>Hire Top Web Designers & Developers</h2>
          <p>
          Develop, design, and deliver - that's the power of a well-designed website.  The Domain Designers is a team of skilled web designers and developers work together to craft exceptional online experiences that elevate your brand and achieve your business goals.  Need a stunning new website? A user-friendly redesign? Or cutting-edge web applications? We've got the expertise to bring it to life. Let's discuss your vision today!
          </p>
          <a href="pages/contact.php"><button>Contact Us</button></a>
      </div>  
      <div class="image-column">
          <img src="assets/teamwork.jpg" alt="Collaborative Web Design & Development Team Celebrating Success">
      </div>
  </div>
</section>
  
<!-- Work Flow Section -->

<section class="work-flow">
    <div class="clickable-section">
        <div class="overlay">
           <p>We team up with clients to grasp their vision, then our skilled web designers and developers create user-friendly websites that flawlessly embody your brand.</p>
        </div>
        <h2>Develop</h2>
        <img src="assets/00.jpg" alt="Development Stage of Website Design on Split Computer Screen">
    </div>
    <div class="clickable-section">
        <div class="overlay">
           <p>The Domain Designers collaborate closely with you to understand your brand and vision. Together, we'll craft a stunning website design that perfectly captures your essence and drives results.</p>
        </div>
        <h2>Design</h2>
        <img src="assets/01.jpg" alt="Website Design Stage on Split Screen Featuring Grid Layout">
    </div>
    <div class="clickable-section">
        <div class="overlay">
           <p>Our skilled developers meticulously test and launch your website, guaranteeing a flawless user experience and optimal performance. We'll equip you with the tools to succeed - let's grow your online presence together!</p>
        </div>
        <h2>Deliver</h2>
        <img src="assets/02.jpg" alt="Delivering a Finished Website Stage on Split Computer Screen">
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
      We're more than web designers and developers - we're your growth partners. We fuel young companies and startups with exceptional design and development, collaborating closely to translate your vision into a high-performing website that drives results. We're invested in your success, not just a paycheck.
 
      </p>
      <a href="pages/our-work.php"><button>Learn More</button></a>
    </div>
    <div class="image-column">
      <img src="assets/sticky-notes.jpg" alt="Startup Planning: Brainstorming Business Ideas on Sticky Notes Wall">
    </div>
  </div>
  </section>
  
  <!-- <section class="multi-image-section">
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
</section> -->

<section class="about-section fade-in-text">
  <div class="two-column-layout">
    <div class="text-column">
      <h3>Hire Web Designers Who Get Your Business</h3>
      <h2>Empowering Emerging Ventures</h2>
      <p>The Domain Designers goes beyond just building websites - we become partners in your success. We specialize in empowering startups and emerging ventures. Our team of passionate web designers and developers collaborate closely with you, translating your vision into a user-friendly, high-performing website that fuels growth. We're not just a service provider - we're invested collaborators, ready to help you launch your vision and achieve long-term success.  Ready to hire web designers who understand startups? Let's discuss your project today!</p>
      <a href="pages/services.php"><button>Learn More</button></a>
    </div>
    <div class="image-column">
      <img src="assets/people-writing.jpg" alt="Startup Team Brainstorming: Web Designers and Developers Collaborating on Project ">
    </div>
  </div>
  </section>
  
  <section class="testimonials-section">
        <h2 class="testimonials-title">What Our Clients Say</h2>
        <div class="testimonials-wrapper">
            <div class="testimonials-container">
                <div class="testimonial">
                    <p>"Working with Innovate Web Solutions has been a game changer for our business. Their attention to detail and innovative designs exceeded our expectations."</p>
                    <p>- Sarah Williams</p>
                </div>
                <div class="testimonial">
                    <p>"The team at Innovate Web Solutions truly understands our vision and has delivered a website that perfectly aligns with our brand. Highly recommended!"</p>
                    <p>- Michael Johnson</p>
                </div>
                <div class="testimonial">
                    <p>"Their expertise in web development and marketing has significantly boosted our online growth. We couldn't be happier with the results."</p>
                    <p>- Emily Brown</p>
                </div>
                <div class="testimonial">
                    <p>"Working with Innovate Web Solutions has been a game changer for our business. Their attention to detail and innovative designs exceeded our expectations."</p>
                    <p>- Sarah Williams</p>
                </div>
            </div>
        </div>
    </section>


  <script src="scripts/testimonialController.js"></script>
  <script src="scripts/textPhaseEffect.js"></script>

  <?php include 'pages/Footer/footer.php';?>
</body>
</html>