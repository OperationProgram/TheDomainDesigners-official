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
    $body .= "\nEmail: \n$email\n";
    // if (isset($phone)) {
    $body .= "\nPhone:\n$phone\n";
    // }
    $body .= "\nCompany:\n$company\n";
    
    $body .= "Services Requested:\n";
    foreach ($services as $index => $service) {
        $body .= "\t" . ($index + 1) . ". " . $service . "\n";
    }
    

    // }
    // if (isset($website)) {
    //     $body .= "Website:\n$website\n";
    // }
    $body .= "\nMessage:\n$message\n";

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
?>