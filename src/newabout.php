<?php
session_start();
require 'vendor/autoload.php'; // Adjust the path if necessary

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// CSRF Protection
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("Invalid CSRF token");
    }

    // Validate and Sanitize Inputs
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    // Check for empty fields
    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        die("All fields are required.");
    }

    if (!$email) {
        die("Invalid email address");
    }

    // File Upload Handling
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $targetFile = $targetDir . basename($_FILES["resume"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedTypes = array("pdf", "doc", "docx");

    // Check file type
    if (!in_array($fileType, $allowedTypes)) {
        die("Only PDF, DOC, and DOCX files are allowed.");
    }

    // Sanitize file name and check for potential attacks
    $safeFileName = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', basename($_FILES["resume"]["name"]));
    $targetFile = $targetDir . $safeFileName;

    // Move uploaded file to the target directory
    if (!move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFile)) {
        die("Sorry, there was an error uploading your file.");
    }

    // Send email with PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; // Replace with your Hostinger SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@thedomaindesigners.com'; // Replace with your Hostinger email address
        $mail->Password = 'YourEmailPassword'; // Replace with your Hostinger email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('admin@thedomaindesigners.com', 'The Domain Designers'); // Replace with your email and name
        $mail->addAddress('spencerrholan2020@gmail.com', 'Test'); // Replace with recipient email and name

        // Attachments
        $mail->addAttachment($targetFile);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Resume Submission';
        $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        $mail->send();
        echo 'The file has been uploaded and the email has been sent.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    // Regenerate CSRF token
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>