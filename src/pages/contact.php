<?php require("../scripts/sendMail.php"); ?>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(empty($_POST['email']) || empty($_POST['fname']) ||  empty($_POST['lname']) || empty($_POST['phone'])){
         $response = "Email, Name, and Phone fields required";
      } else{
         $response = sendMail(['email' => $_POST['email'], 
                              'fname' => $_POST['fname'],
                              'lname' => $_POST['lname'],
                              'phone' => $_POST['phone'],
                              'company' => $_POST['company'],
                              'website' => $_POST['website'],
                              'message' =>  $_POST['message'],
                            ]);
      }
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
                    <form action="contact.php" method="post">
                        <input type="text" name="name" placeholder="Your Name*" required>
                        <input type="text" name="phone" placeholder="Phone Number*" required>
                        <input type="email" name="email" placeholder="Your Email*" required>
                        <input type="text" name="company" placeholder="Company">
                        <div class="services">
                            <label><input type="checkbox" name="services[]" value="SEO">SEO</label>
                            <label><input type="checkbox" name="services[]" value="Branding">Custom Code</label>    
                            <label><input type="checkbox" name="services[]" value="Branding">Branding</label>
                            <label><input type="checkbox" name="services[]" value="Social Media">Wordpress</label>
                            <label><input type="checkbox" name="services[]" value="Paid Media">Social Media Marketing</label>
                            <label><input type="checkbox" name="services[]" value="Web Design">Web Apps</label>
                        </div>
                        <textarea name="message" placeholder="Message*" required></textarea>
                        <div class="newsletter">
                            <label><input type="checkbox" name="newsletter"> Subscribe to Our Newsletter</label>
                        </div>
                        <button type="submit" class="submit-btn">Send</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>