<?php

/**

 * Plugin Name: Contact Form Plugin

 * Author: Metameg (Alex Metzger)

 * Version: 1.0.0

 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'Exception.php';
require 'SMTP.php';
require_once  '../vendor/autoload.php';
$dotenv_file_path = '../.env';
if (file_exists($dotenv_file_path)) {
    $dotenv = Dotenv\Dotenv::createImmutable(dirname($dotenv_file_path));
    $dotenv->load();
}

function sendMail($args) {

    extract($args);
    // Email parameters
    $to = 'metameg8@gmail.com'; 
    $subject = 'New Contact Form Submission';

    // Compose email message
   
    $body = "New Inquiry: \n\n";
    // if (isset($fname)) {
    //     $body .= "First Name: \n$fname\n";
    // } 
    $body .= "Full Name: \n$fullname\n";
    $body .= "Email: \n$email\n";
    // if (isset($phone)) {
    $body .= "Phone:\n$phone\n";
    // }
    // if (isset($company)) {
    $body .= "Company:\n$company\n";
    $body .= "Services Requested:\n$services\n";

    // }
    // if (isset($website)) {
    //     $body .= "Website:\n$website\n";
    // }
    $body .= "Message:\n$message\n";

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'metameg8@gmail.com'; // Replace with your Gmail email address
        $mail->Password = $_ENV['APP_PASSWORD']; // Replace with your Gmail password or app password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $fullname);
        $mail->addAddress($to);

        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $body;

        // Send email
        if($mail->send()){
            // echo "Thank you! Your message has been sent.";
            return "success";
        } else{
            // echo "Oops! Something went wrong. Please try again later. Error: {$mail->ErrorInfo}";
            return "Email not sent. Please try again";
        }
    
    } catch (Exception $e) {
        echo "Oops! Something went wrong. Please try again later. Error: {$mail->ErrorInfo}";
    }
}


function contact_form_capture() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_button'])) {
        try {
            session_start();
            $valid = false;
            $name = $_POST['fullname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $company = $_POST['company'];
            $services = $_POST['services'];
            $message =  $_POST['message'];
            // $email = $_POST['email'];
            // $fullname = $_POST['fullname'];
            // $message = $_POST['message'];

            if(empty($email) || empty($fullname) || empty($message) || empty($phone)){
                // $response = "All fields are required";
                $_SESSION['contact_form_response'] = "All fields are required";
            } 
            
            else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                // Sanitize email address
                $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
                $valid = true;
            } 
            else {
                // $response = "Invalid email";
                $_SESSION['contact_form_response'] = "Invalid email";
            }
            
            if ($valid) {
                $sanitizedName = filter_var($fullname, FILTER_SANITIZE_STRING);
                $sanitizedMessage = filter_var($message, FILTER_SANITIZE_STRING);
                
                $response = sendMail([
                                        'name' => $_POST['fullname'],
                                        'phone' => $_POST['phone'],
                                        'email' => $_POST['email'], 
                                        'company' => $_POST['company'],
                                        'services' => $_POST['services'],
                                        'message' =>  $_POST['message'],
                                    ]);

                if ($response == "success") {
                    $_SESSION['contact_form_response'] = "Email sent successfully";
                } else {
                    $_SESSION['contact_form_response'] = "Failed to send email. Please Try again.";

                }
            }
            header("Location: {$_SERVER['REQUEST_URI']}#contact_form");
        } catch (Exception $e) {
            echo "Oops! Something went wrong. Please try again.";
        }
    }
}


// add_action("init", "contact_form_capture");

function display_contact_form_response() {
    // Check if the response is success or error
    if (isset($_SESSION['contact_form_response'])) {
        $message = $_SESSION['contact_form_response'];
        $class = ($_SESSION['contact_form_response'] == "Email sent successfully") ? "success" : "error";
        echo "<script>document.getElementById('form_message').innerHTML = '<div class=\"$class\">$message</div>'</script>";
        echo "<script>window.location.hash = 'contact_form'</script>";
        unset($_SESSION['contact_form_response']);
    }
    
}

// Register shortcode to display contact form response
// add_shortcode('display_contact_form_response', 'display_contact_form_response');
?>