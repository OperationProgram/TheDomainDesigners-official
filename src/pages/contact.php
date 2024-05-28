<?php require("../plugins/contactForm/contactForm.php"); ?>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitButton'])) {
        echo "<script>console.log('heres');</script>";
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        if(empty($_POST['email']) || empty($_POST['fullname']) ||  empty($_POST['message']) || empty($_POST['phone'])){
            $response = "Email, Name, Message, and Phone fields required";
        } else{
            $response = sendMail([
                                'name' => $_POST['fullname'],
                                'phone' => $_POST['phone'],
                                'email' => $_POST['email'], 
                                'company' => $_POST['company'],
                                'services' => $_POST['services'],
                                'message' =>  $_POST['message'],
                                ]);
        }
        contact_form_capture();
        echo '<script>window.location = "#submit_btn";</script>';
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Your Company</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <header>
    <?php $basePath = '..';?>
    <?php include $basePath . '/pages/Navigation/navbar.php';?>
    <script src=" <?php echo $basePath . '/scripts/navbarController.js';?>"></script>
        <!-- <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Your Company Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Krew</a></li>
                    <li><a href="#" class="contact-btn">Contact</a></li>
                </ul>
            </nav>
        </div> -->
    </header>
    <main>
        <section>
            <div class="hero-section">
            <div class="hero-content">
                <h1>Who We Are</h1>
                <p>Learn more about our mission, values, and team.</p>
                <button class="hero-button">Get Started</button>
            </div>
            </div>
        </section>
        <section class="contact-section">
            <div class="container">
                <div class="contact-info">
                    <h2>Contact Us</h2>
                    <h1>Ready to Get Started</h1>
                    <p>(832) 216-9276</p>
                    <p><a href="mailto:krista@kreative-media.com">team@thedomaindesigners.com</a></p>
                    <p>9999 Street Name, Houston, Texas 770023</p>
                    <div class="social-media">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contact_form" action="" method="post">
                        <input id="full_name" type="text" name="fullname" placeholder="Your Name*" required>
                        <img id="name_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                        <span id="name_error" class="error_msg">Field is Required</span>
                        
                        <input id="phone" type="text" name="phone" placeholder="Phone Number*" required>
                        <img id="phone_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                        <span id="phone_error" class="error_msg">Field is Required</span>

                        <input id="email" type="email" name="email" placeholder="Your Email*" required>
                        <img id="email_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                        <span id="email_error" class="error_msg">Field is Required</span>

                        <input id="company" type="text" name="company" placeholder="Company">

                        <div class="services">
                            <label><input type="checkbox" name="services[]" value="seo">SEO</label>
                            <label><input type="checkbox" name="services[]" value="custom-code">Custom Code</label>    
                            <label><input type="checkbox" name="services[]" value="branding">Branding</label>
                            <label><input type="checkbox" name="services[]" value="social media">Wordpress</label>
                            <label><input type="checkbox" name="services[]" value="paid-media">Social Media Marketing</label>
                            <label><input type="checkbox" name="services[]" value="web-design">Web Apps</label>
                        </div>
                        <textarea id="message" name="message" placeholder="Message*" required></textarea>
                        <img id="message_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                        <span id="message_error" class="error_msg">Field is Required</span>

                        <button id="submit_btn" type="submit" class="submit-btn">Send</button>
                        <span id="form_error" class="error">There was a problem submitting the form. <br />
                                                Check the fields for errors.</span>
                        <?php
                            if(@$response == "success") {
                        ?>
                            <p class="success">Email sent successfully</p>
                        <?php
                            } else {
                        ?>
                            <p class="error"><?php echo @$response; ?></p>
                        <?php
                            }  
                        ?>
                    </form>
                    
                    <div id="spinner_overlay" class="spinner-overlay">
                        <div class="spinner"></div>
                    </div>
                    <script type="module" src="../scripts/contactForm.js"></script>
                </div>
            </div>
        </section>
    </main>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</body>
</html>