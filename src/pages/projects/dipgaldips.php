<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Your Company</title>
    <link rel="stylesheet" href="../../css/project-partial.css">
    <link rel="stylesheet" href="../../css/navbar.css">
</head>
<body>
    <header>
        <?php $basePath = '../..';?>
        <?php include $basePath . '/pages/Navigation/navbar.php';?>
        <script src=" <?php echo $basePath . '/scripts/navbarController.js';?>"></script> 
    </header>

    <section class="hero-section">
    </section>

    <section class="contents-section">
        <div class="contents-container">
            <div class="nav-column">
                <div class="img-box">
                    <img src="../../assets/dipgaldips/logo.jpg">
                </div>
                <ul>
                    <a href="#wordpress-solution-header"><li class="content-link">Wordpress Solution</li></a>
                    <a href="#seo-header"><li class="content-link">Search Engine Optimization</li></a>
                    <a href="#branding-header"><li class="content-link">Branding</li></a>
                    <a href="#gallery-header"><li class="content-link">Gallery</li></a>
                </ul>   
            </div>
            <div class="text-column">
                <h2 class="custom-h2">Dip-Gal-Dips</h2>
                <p>The GOT Brand aimed to increase their engagement, optimize their online presence, create high quality content, and enhance their visibility. The GOT Brand partnered with Kreative Media to harness our expertise in search engine optimization, social media management, website design, and content creation with high quality photography and videography. We developed a complete strategy tailored to elevate their brand, focusing on SEO to improve their search rankings and attract a more relevant audience. Our social media initiatives were designed to build a stronger community and increase interaction with the brand. By redesigning their website, we ensured a more engaging, intuitive, and conversion-optimized user experience. The integration of professional visual content distinctly showcased their offerings, distinguishing The GOT Brand in a competitive market. This integrated approach to digital marketing delivered a cohesive and elevated online presence, increasing their brand's visibility and engagement.
                </p>
            </div>
        </div>
    </section>

    <section id="wordpress-solution">
        <img src="../../assets/dipgaldips/dip_pack_kit.jpg" class="full-width-img">
        <div class="section-container">
            <h2 id="wordpress-solution-header" class="custom-h2">Wordpress Solution</h2>
            <p>
For The GOT Brand, a seamless, user-friendly web design was paramount. Kreative Media undertook a comprehensive website overhaul, focusing on aesthetic appeal, navigational ease, and mobile responsiveness. Our goal was to reflect The GOT Brand’s ethos through visual elements, intuitive layout, and optimized user experience. This redesign not only modernized their online presence but also aligned with best practices for user engagement and conversion optimization, setting a new standard for their digital footprint.</p>
        </div>  
    </section>

    <section id="seo">
        <div class="offset-img-container">
            <div class="left-img">
                <img  src="../../assets/dipgaldips/caesar_salad_dressing_1280x1063.jpg">
            </div>
            <div class="right-img" >
                <img src="../../assets/dipgaldips/spicy_salsa_1280x1063.jpg">
            </div>
        </div>
        <div class="section-container">
            <h2 id="seo-header" class="custom-h2">Search Engine Optimization</h2>
            <p>Our SEO strategy for The GOT Brand was built on a foundation of keyword optimization, content quality, technical optimizations, and site performance. By targeting relevant keywords, improving site structure, optimizing for rich snippets, and enhancing page speeds, Kreative Media aimed to improve The GOT Brand’s search engine rankings and organic reach. This approach was designed to attract a targeted audience, increasing visibility and traffic for higher conversion rates.</p>
        </div> 
        <!-- <img src="../../assets/dipgaldips/best_sellers.png" class="screenshot"> -->
    </section>

    <section id="branding">
        <h1>Making Everyday</h1>
        <div id="rotate-img">
            <img src="../../assets/dipgaldips/chip.png">
            <div class="spark spark1"></div>
            <div class="spark spark2"></div>
            <div class="spark spark3"></div>
            <div class="spark spark4"></div>
            <div class="spark spark5"></div>
            <div class="spark spark6"></div>
            <div class="spark spark7"></div>
        </div>
        <h1>Dip Day</h1>
        <div class="section-container">
            <h2 id="branding-header" class="custom-h2">Branding</h2>
            <p>Our SEO strategy for The GOT Brand was built on a foundation of keyword optimization, content quality, technical optimizations, and site performance. By targeting relevant keywords, improving site structure, optimizing for rich snippets, and enhancing page speeds, Kreative Media aimed to improve The GOT Brand’s search engine rankings and organic reach. This approach was designed to attract a targeted audience, increasing visibility and traffic for higher conversion rates.</p>
        </div>
    </section>

    <section id="gallery">
        <h1 id="gallery-header" class="custom-h1">Gallery</h1>
        <div class="multi-image-container">
            <div class="image-row">
                <div class="image-container">
                    <a href="javascript:void(0);">
                        <img src="../../assets/dipgaldips/home.png" alt="Image 1">
                        <h2 class="image-title">Cars</h2>
                    </a>
                </div>

                <div class="image-container">
                    <a href="javascript:void(0);">
                        <img src="../../assets/dipgaldips/dip_plans.png" alt="Image 2">
                        <h2 class="image-title">Fine & Fancy</h2>
                    </a>
                </div>
            </div>
            <div class="image-row">
                <div class="image-container">
                    <a href="javascript:void(0);">
                        <img src="../../assets/dipgaldips/best_sellers.png" alt="Image 3">
                        <h2 class="image-title">Fresh Squeezed</h2>
                    </a>
                </div>
                <div class="image-container">
                    <a href="javascript:void(0);">
                        <img src="../../assets/dipgaldips/checkout.png" alt="Image 4">
                        <h2 class="image-title">Fashion</h2>
                    </a>
                </div>
                <div class="image-container">
                    <a href="javascript:void(0);">
                        <img src="../../assets/dipgaldips/product.png" alt="Image 5">
                        <h2 class="image-title">The Dip Factory</h2>
                    </a>
                </div>
            </div>
            
            <div id="image-overlay" class="overlay-full">
                <span class="closebtn">&times;</span>
                <img class="overlay-content" id="overlay-image" src="" alt="Overlay Image">
            </div>
        </div>
    </section>
    <script src="../../scripts/overlayController.js"></script>
    <script src="../../scripts/rotateImage.js"></script> 
</body>

</html>