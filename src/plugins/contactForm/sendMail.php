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
    // $to = 'admin@thedomaindesigners.com'; 
    $subject = 'New Contact Form Submission';

    // Compose email message
    if (isset($userBody)) {
        $to = $userEmail;
        $from = 'TheDomainDesigners.com Admin';
        $body = $userBody;
        $subject = $userSubject;
    } 
    else {
        $body = "New Inquiry: \n\n"; 
        $body .= "Full Name: \n$fullname\n";
        $body .= "\nEmail: \n$email\n";
        $body .= "\nPhone:\n$phone\n";
        $body .= "\nCompany:\n$company\n";
        $body .= "\nServices Requested:\n";
        foreach ($services as $index => $service) {
            $body .= "\t" . ($index + 1) . ". " . $service . "\n";
        }
        $body .= "\nMessage:\n$message\n";
        $to = 'admin@thedomaindesigners.com';
        $from = $fullname;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@thedomaindesigners.com'; 
        // $mail->Username = 'metameg8@gmail.com'; 
        $mail->Password = $_ENV['MAIL_APP_PASSWORD']; 
        // $mail->Password = $_ENV['DEVMAIL_APP_PASSWORD']; 
        $mail->SMTPSecure = 'ssl';
        // $mail->SMTPSecure = 'tls';
        $mail->Port = 465;
        // $mail->Port = 587;

        // Recipients
        $mail->setFrom('admin@thedomaindesigners.com', $from);
        $mail->addAddress($to);
        // $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
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
        // echo "Oops! Something went wrong. Please try again later. Error: {$mail->ErrorInfo}";
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
    
    return $response;
}
?>