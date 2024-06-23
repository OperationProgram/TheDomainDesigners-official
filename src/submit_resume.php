<?php
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugins/contactForm/PHPMailer.php';
require 'plugins/contactForm/Exception.php';
require 'plugins/contactForm/SMTP.php';

$mail = new PHPMailer(true);

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
try {
    $dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    echo "Error loading .env file: " . $e->getMessage();
    exit;
}

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("Please refresh the page.");
    }

    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    if (!$email) {
        echo "Invalid email address";
        exit;
    }

    if (!ctype_digit($phone)) {
        echo "Invalid phone number. Only digits are allowed.";
        exit;
    }

    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $targetFile = $targetDir . basename($_FILES["resume"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedTypes = array("pdf", "doc", "docx");

    if (!in_array($fileType, $allowedTypes)) {
        echo "Only PDF, DOC, and DOCX files are allowed.";
        exit;
    }

    $safeFileName = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', basename($_FILES["resume"]["name"]));
    $targetFile = $targetDir . $safeFileName;

    if (!move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFile)) {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }

    try {
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['MAIL_USERNAME'];
        $mail->Password = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $_ENV['MAIL_PORT'];

        $mail->setFrom($_ENV['MAIL_USERNAME'], 'The Domain Designers');
        $mail->addAddress('spencerrholan2020@gmail.com', 'Test');

        $mail->isHTML(true);
        $mail->Subject = 'New Resume Submission';
        $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        $mail->addAttachment($targetFile);

        $mail->send();
        echo 'The file has been uploaded and the email has been sent.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>