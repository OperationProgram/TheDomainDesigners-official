<?php require("../plugins/contactForm/sendMail.php"); ?>
<?php require("../plugins/g-recaptcha/auth.php"); ?>

<?php 
    $showSuccessMessage = false;
    $showFailureMessage = false;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $recaptcha_authorized = auth_recaptcha();
        if ($recaptcha_authorized) {
            $response = capture_contact_form();
            if ($response == "success") {
                $userSubject = '<DO NOT REPLY> Thank you for contacting us';
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $userBody = "Hi $fullname, Thank you for reaching out. We have received your message and will get back to you shortly. Best regards, thedomaindesigners.com";

                sendMail([
                            'userEmail' => $email, 
                            'userSubject' => $userSubject,
                            'userBody' => $userBody
                ]); 
                
                $showSuccessMessage = true;
            } 
            else {
                $showFailureMessage = true;
            }
        }

        else { 
            $showFailureMessage = true;
        }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Domain Designers | Contact Us: Let's Discuss Your Vision</title>
    <meta name="description" content="Ready to turn your website dream into reality? The Domain Designers is here to help! Contact us today to discuss your project. We offer exceptional web design and development services tailored to empower startups and emerging ventures. Let's collaborate and bring your vision to life!">
    <meta name="robots" content="noindex,nofollow"> 
    <meta name="keywords" content="The Domain Designers">
    <meta name="author" content="The Domain Designers">
    <link rel="icon" type="image/x-icon" href="../assets/tdd_logo.svg">
    <link rel="preload" href="../assets/good/cloud-overlay-compressed.png" as="image">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../scripts/showSuccessMessage.js" defer></script> 
</head>

<body>
    <header>

        <?php $basePath = '..';?>
        <?php include $basePath . '/pages/Navigation/navbar.php';?>
        <script src=" <?php echo $basePath . '/scripts/navbarController.js';?>"></script>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                <?php
                    if ($showSuccessMessage) {
                        echo 'showMessage("Email sent successfully!");';
                    } elseif ($showFailureMessage) {
                        echo 'showMessage("Oops! Something went wrong. Please Try Again.");';
                    }
                ?>
            });  
        </script>

    </header>
    <section class="hero-section">
        <div class="overlay-1"></div>
        <div class="overlay-2"></div>
        <div class="hero-content">
            <h1>Helping You to Succeed</h1>
            <h2>Let's chat about your website goals</h2>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-info">
                <h2>Contact Us</h2>
                <h1>Ready to Get Started</h1>
                <p></p>
                <p><a href="mailto:admin@kreative-media.com">admin@thedomaindesigners.com</a></p>
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
                        <label><input type="checkbox" name="services[]" value="paid-media">Social Media</label>
                        <label><input type="checkbox" name="services[]" value="web-design">Web Apps</label>
                    </div>
                    <textarea id="message" name="message" placeholder="Message*" required></textarea>
                    <img id="message_success" class="success_icon" src="../assets/green_check.svg" width="20" height="20">
                    <span id="message_error" class="error_msg">Field is Required</span>

                    
                    <div class="g-recaptcha" data-sitekey="6Lc8vBcqAAAAAJlfk39Pf28J2K8hkB32CV8SXBiw"></div>
                    <button id="submit_btn" type="submit" class="submit-btn" >
                    Send
                    </button>

                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                    <script>
                        function validateRecaptcha() {
                            var response = grecaptcha.getResponse();
                            if (response.length === 0) {
                                alert("Please complete the reCAPTCHA.");
                                return false; // Prevent form submission
                            }
                            return true; // Allow form submission
                        }
                    </script>

                    <span id="form_error" class="error">There was a problem submitting the form. <br />
                                            Check the fields for errors.</span>
                    <?php
                        if(@$response == "success") {
                    ?>
                        <p class="success">Submission successfully submitted!</p>
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
            </div>
        </div>
    </section>
    
    <script type="module" src="../scripts/contactForm.js"></script>
    <?php include 'Footer/footer.php';?>
</body>
</html>