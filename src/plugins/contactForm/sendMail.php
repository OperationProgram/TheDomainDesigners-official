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

function capture_contact_form() {
    session_start();
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

        // if ($response == "success") {
        //     $_SESSION['contact_form_response'] = "Email sent successfully";
        // } else {
        //     $_SESSION['contact_form_response'] = "Failed to send email. Please Try again.";
        // }
    }
    
    return $response;
}
?>