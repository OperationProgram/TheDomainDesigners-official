<?php require("../plugins/contactForm/sendMail.php"); ?>
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valid = false;
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $services = isset($_POST['services']) ? $_POST['services'] : [];
        $company = $_POST['company'];
        $message = $_POST['message'];

        if(empty($_POST['email']) || empty($_POST['fullname']) ||  empty($_POST['message']) || empty($_POST['phone'])){
            $response = "Name, Phone, Email and Message fields required";
        } 
        
        else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            // Sanitize email address
            $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
            $valid = true;
        } 
        else {
            $response = "Invalid email";
        }
        
        if ($valid) {
            $sanitizedFullName = filter_var($fullname, FILTER_SANITIZE_STRING);
            $sanitizedCompany = filter_var($company, FILTER_SANITIZE_STRING);
            // $sanitizedPhone = filter_var($phone, FILTER_SANITIZE_STRING);
            $sanitizedMessage = filter_var($message, FILTER_SANITIZE_STRING);
            $response = sendMail([
                              'fullname' => $sanitizedFullName,  
                              'phone' => $phone,
                              'email' => $sanitizedEmail, 
                              'company' => $sanitizedCompany,
                              'services' => $services,
                              'message' =>  $sanitizedMessage,
                            ]);
        }




        // if(empty($_POST['email']) || empty($_POST['fullname']) ||  empty($_POST['message']) || empty($_POST['phone'])){
        //     $response = "Email, Name, Message, and Phone fields required";
        // } else{
        //     $response = sendMail([
        //                         'fullname' => $_POST['fullname'],
        //                         'phone' => $_POST['phone'],
        //                         'email' => $_POST['email'], 
        //                         'company' => $_POST['company'],
        //                         'services' => $_POST['services'],
        //                         'message' =>  $_POST['message'],
        //                         ]);
        // }
        // contact_form_capture();
        header("Location: {$_SERVER['REQUEST_URI']}#submit_btn");
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
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <header>
        <?php $basePath = '..';?>
        <?php include $basePath . '/pages/Navigation/navbar.php';?>
        <script src=" <?php echo $basePath . '/scripts/navbarController.js';?>"></script> 
    </header>
    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h1>Who We Are</h1>
                <p>Learn more about our mission, values, and team.</p>
                <button class="hero-button">Get Started</button>
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

                    <script>
                        if (window.history.replaceState) {
                            var url = window.location.href.split('#')[0]; 
                            window.history.replaceState(null, null, url);
                        }
                    </script>
                    
                    <div id="spinner_overlay" class="spinner-overlay">
                        <div class="spinner"></div>
                    </div>
                    <script type="module" src="../scripts/contactForm.js"></script>
                </div>
            </div>
        </section>
    </main>
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

    <?php include 'Footer/footer.php';?>
</body>
</html>