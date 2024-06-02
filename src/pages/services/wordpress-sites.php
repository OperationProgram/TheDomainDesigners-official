<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="../../css/service-partial.css">
  <link rel="stylesheet" href="../../css/wordpress-sites.css">
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
        <video autoplay muted>
            <source src="../../assets/videos/purple-grow.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="cta">
            <h2 class="hero-gradient">Web Dev Made Easy</h2>
            <h1 class="custom-h1">Wordpress Websites</h1>
            <button class="cta-button">Contact Us</button>
        </div>
        <img class="hero-img" src="../../assets/icons/wordpress.svg">
    </div>
    <div class="hero-card-slide-container" data-aos="fade-right" data-aos-duration="1200">
      <div class="hero-card">
        <img src="../../assets/wp-home.jpg">
      </div>
      <div class="hero-card">
        <img src="../../assets/dipgaldips/best_sellers.png">
      </div>
      <div class="hero-card">
        <img src="../../assets/portfolio/wordpress-dashboard.png">
      </div>
      <div class="hero-card">
        <p>Help your brand grow seamlessly through social media platforms</p>
      </div>
    </div>
  </section>
  
  <section class="wp-contents contents">
    <div class="contents-container">
      <a href="#section-1-header">      
        <div class="content-title">
          <h2>Design & Customization</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>
      <a href="#section-2-header">      
        <div class="content-title">
          <h2>Plugins</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>
      <a href="#section-3-header">      
        <div class="content-title">
          <h2>Themes</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>
      <a href="#section-4-header">      
        <div class="content-title">
          <h2>E-commerce</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>
      <a href="#section-5-header">      
        <div class="content-title">
          <h2>Page Builders</h2>
          <img src="../../assets/right-arrow.svg" width="40" height="40">
        </div>
      </a>
    </div>
  </section>

  <section id="section-1-header" class="section-4">
    <div class="sub-cta">
      <div class="img-box border-radius-curved-tr" data-aos="fade-right" data-aos-duration="1000">
      </div>
      <div class="cta-column">
        <h2 class="custom-h2">Planning For Success</h2>
        <h1 class="custom-h1">Design & Customization</h1>
        <p>At our web development agency, we specialize in exceptional WordPress design and customization services that cater to your unique business needs. Our expert team crafts visually stunning and highly functional websites, ensuring a seamless user experience across all devices.
         <br /><br />   
         We leverage the latest design trends and tools to create customized themes and plugins, enhancing your site's performance and aesthetic appeal. Our tailored solutions not only reflect your brand identity but also drive user engagement and conversion. 
        <br /><br />   
        With a focus on responsive design and fast load times, we ensure your WordPress site stands out in the digital landscape. Trust us to transform your online presence with innovative design and superior customization.
        </p>
        <button class="cta-button-dark">Let's Chat</button>
      </div>

    </div>
  </section>

  <section id="section-2-header" class="section-1">
    <div class="sub-cta">
      <div class="cta-column">
        <h2 class="custom-h2">Make It Easy</h2>
        <h1 class="custom-h1">Plugins</h1>
        <p> Plugins are essential for enhancing the functionality of your WordPress website, and our agency excels at integrating and customizing them to meet your specific needs. We utilize a wide range of plugins to add features such as contact forms, e-commerce capabilities, SEO tools, and social media integration.
         <br /><br />   
         Our team ensures that each plugin is seamlessly integrated, optimized for performance, and regularly updated to maintain security and functionality. Trust us to extend your website's capabilities with the best plugins available, tailored to your business requirements.
        </p>
        <button class="cta-button-dark">Let's Chat</button>
      </div>

      <div class="img-box" data-aos="fade-left" data-aos-duration="1000">
        <img src="../../assets/wp-plugin.jpg" class="border-radius-curved-tr">
      </div>
    </div>

    <div class="icons">
      <div class="icon" data-aos="fade-down" data-aos-duration="1500">
        <img src="../../assets/icons/woocommerce.svg">
        <h3>WooCommerce</h3>
        <p>WooCommerce is a robust and versatile plugin designed to transform your WordPress site into a fully functional e-commerce platform. It offers extensive features for managing products, payments, and shipping, while providing a seamless shopping experience for your customers.
        </p>
      </div>
      <div class="icon" data-aos="fade-up" data-aos-duration="1500">
        <img src="../../assets/icons/WPForms.png">
        <h3>WP Forms</h3>
        <p>WPForms is a powerful and user-friendly plugin that allows you to create custom contact forms, surveys, and other interactive features with ease. Its drag-and-drop interface makes form building accessible to everyone, while its advanced functionality ensures seamless integration and reliable performance on your WordPress site.</p>
      </div>
      <div class="icon" data-aos="fade-down" data-aos-duration="1500">
        <img src="../../assets/icons/chart-trends.svg">
        <h3>AIOSEO</h3>
        <p>
        AIOSEO (All in One SEO) is a comprehensive plugin designed to optimize your WordPress site's search engine performance. It offers powerful tools for managing meta tags, sitemaps, and keywords, ensuring that your website ranks higher in search results and attracts more organic traffic.</p>
      </div>
      <div class="icon" data-aos="fade-up" data-aos-duration="1500">
        <img src="../../assets/icons/mail.svg">
        <h3>WPMail</h3>
        <p>WP Mail SMTP is an essential plugin that improves the reliability of your WordPress site's email delivery. By reconfiguring the default email settings, it ensures your emails are sent securely using proper SMTP protocols, reducing the chances of emails being marked as spam.</p>
      </div>
    </div>
  </section>

  <section id="section-3-header" class="section-3">
    <img src="../../assets/workbench.jpg" class="show-sm-screen">
    <div id="ps-left-column" class="text-column">
      <h2 class="custom-h2">Don't Re-Invent The Wheel</h2>
      <h1 class="custom-h1">Themes</h1>
      <ul>
        <li><p> <strong class="custom-bold">Hello by Elementor</strong><br/>
          The Hello Theme by Elementor is a minimalist, lightweight theme designed to work seamlessly with the Elementor page builder. It provides a clean slate for building highly customized websites with Elementor's powerful drag-and-drop functionality. 
          <br /><br />   
          Hello Theme is known for its fast load times and exceptional performance, making it an excellent choice for those who prioritize speed. Its simplicity and compatibility with Elementor's extensive features make it a favorite when client customizability is a must.
        </p></li>
        <br /><br />
        <li><p> <strong class="custom-bold">Divi:</strong><br/>
          The Divi Theme is a versatile and highly customizable option perfect for businesses of all sizes. Its drag-and-drop builder allows you to create unique layouts without any coding knowledge.
          <br /><br />   
          With an extensive library of pre-designed templates and modules, you can quickly build a professional-looking site. Divi also offers robust design options, including responsive editing and advanced styling, ensuring your website looks great on all devices.
        </p></li>
          <br />
        <li><p> <strong class="custom-bold">Astra</strong><br/> 
          Astra is a lightweight and highly flexible theme that is ideal for performance-focused websites.  Known for its fast load times and seamless integration with popular page builders like Elementor and Bricks Builder, Astra offers a wide range of pre-built templates to get you started quickly.
          <br /><br />   
          Its customization options are extensive, allowing you to adjust layouts, colors, and typography with ease. Astra is also SEO-friendly, helping your site rank higher in search engine results.
        </p></li> 
          <br />
        <li><p> <strong class="custom-bold">Kadence</strong><br/>
            Kadence is a powerful and highly customizable theme designed for speed and flexibility. It offers a range of pre-built templates and deep integration with Gutenberg and popular page builders like Elementor.
            <br /><br />   
            Kadence allows you to easily create unique layouts with its drag-and-drop header and footer builder. Its lightweight design and built-in performance enhancements ensure fast load times, making it an excellent choice for any type of website.
        </p></li>
      </ul>
      <button class="cta-button">Let's Chat</button>
    </div>
    
    <div class="img-container">
      <div class="img-box">
        <img src="../../assets/laptop-quote.jpg">
      </div>
      <div class="img-box">
        <img src="../../assets/wp-tablet.jpg">
      </div>
      <div class="img-box">
        <img src="../../assets/wp-shirt.jpg">
      </div>
      <div class="img-box">
        <img src="../../assets/wp-laptop.jpg">
      </div>
      <div class="img-box">
        <img src="../../assets/typewriter.jpg">
      </div>
    </div>

    <div class="clearfix"></div>

  </section>

  <section id="section-4-header" class="section-4">
    <div class="sub-cta">
      <div class="img-box border-radius-curved-tr" data-aos="fade-right" data-aos-duration="1000">
      </div>
      <div class="cta-column">
        <h2 class="custom-h2">Sell Your Products</h2>
        <h1 class="custom-h1">E-Commerce</h1>
        <p> 
        At our web development agency, we specialize in crafting exceptional e-commerce solutions tailored to your business needs. Whether you're launching a new online store or seeking to optimize an existing one, we offer comprehensive services to ensure your success in the competitive e-commerce landscape. 
         <br /><br />   
         While we often leverage the powerful WooCommerce plugin for seamless integration of essential e-commerce features into your WordPress website, we also offer custom solutions tailored to your specific requirements. Additionally, we integrate leading payment gateways such as Stripe and PayPal to provide secure and convenient checkout experiences for your customers. 
        <br /><br />   
        Our team prioritizes user experience, designing intuitive interfaces and implementing conversion-focused strategies to drive sales and maximize ROI. With a keen understanding of industry trends and technologies, we empower your e-commerce venture to thrive in an ever-evolving digital marketplace.  
        </p>
        <button class="cta-button">Let's Chat</button>
      </div>

    </div>
  </section>

  <section id="section-5-header" class="section-5">
    <div class="sub-cta">
      <div class="cta-column">
        <h2 class="custom-h2">Manageability made Easy</h2>
        <h1 class="custom-h1">Page Builders</h1>
        <p> 
        At our web development agency, we understand the importance of empowering our clients to easily manage and update their websites. That's why we specialize in leveraging the power of page builders in WordPress, with a particular focus on Elementor and Bricks Builder.
         <br /><br />   
         These intuitive drag-and-drop tools allow for seamless customization of your website's design and layout without the need for coding knowledge. Whether you're looking to create stunning landing pages, dynamic blog layouts, or captivating product showcases, our expertise in Elementor and Bricks Builder ensures that your vision comes to life.
        </p>
        <br /> <br />
        <p>We're not limited to these options - we're open to incorporating any other page builders you prefer, ensuring that your website is built on the platform that best suits your needs and preferences. Our goal is to provide you with the flexibility and control to effortlessly manage your online presence, so you can focus on growing your business.</p>
        <button class="cta-button-dark">Let's Chat</button>
      </div>

      <div class="img-box border-radius-curved-tr" data-aos="fade-left" data-aos-duration="1000"></div>
    </div>

    <div class="icons">
      <div class="icon" data-aos="fade-down" data-aos-duration="1500">
        <img src="../../assets/icons/bricks.svg">
        <h3>Bricks Builder</h3>
        <p>Bricks Builder is a versatile page builder for WordPress that offers a seamless and intuitive editing experience with its powerful visual design tools and extensive library of pre-designed templates.</p>
      </div>
      <div class="icon" data-aos="fade-up" data-aos-duration="1500">
        <img src="../../assets/icons/elementor.png">
        <h3>Elementor</h3>
        <p>Elementor is a leading page builder plugin for WordPress, renowned for its user-friendly interface, extensive customization options, and seamless integration with popular themes and plugins.</p>
      </div>
      <div class="icon" data-aos="fade-down" data-aos-duration="1500">
        <img src="../../assets/icons/pagebuilder.svg">
        <h3>Other</h3>
        <p>We're open to incorporating any other page builders you prefer, ensuring that your website is built on the platform that best suits your needs and preferences. Let us know your preferences, and we'll tailor our services accordingly to achieve your vision.</p>
      </div>
    </div>
  </section>

  <script src="../../scripts/partialScrollContainer.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({
      once: true
    });
  </script>

  <?php include '../Footer/footer.php';?>
</body>