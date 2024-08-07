<?php
require_once  '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../contactForm/PHPMailer.php';
require '../contactForm/Exception.php';
require '../contactForm/SMTP.php';

$mail = new PHPMailer(true);

session_start();


$dotenv = Dotenv\Dotenv::createImmutable('../..');
try {
    $dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    echo json_encode(['status' => 'error', 'message' => 'Error loading .env file: ' . $e->getMessage()]);
    exit;
}

$secret = $_ENV['RECAPTCHA_SECRET_KEY']; 

$response = $_POST['g-recaptcha-response'];
$remote_ip = $_SERVER['REMOTE_ADDR'];

// Verify the reCAPTCHA response
$verify_url = 'https://www.google.com/recaptcha/api/siteverify';
$response = file_get_contents($verify_url . '?secret=' . $secret . '&response=' . $response . '&remoteip=' . $remote_ip);
$responseKeys = json_decode($response, true);

if (intval($responseKeys["success"]) !== 1) {
    // reCAPTCHA validation failed
    echo json_encode(['status' => 'error', 'message' => 'reCAPTCHA validation failed.']);
    exit;
}



if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        echo json_encode(['status' => 'error', 'message' => 'Please refresh the page.']);
        exit;
    }

    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    if (empty($name) || empty($phone) || empty($email)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
        exit;
    }

    if (!$email) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address']);
        exit;
    }

    if (isset($_FILES["resume"]) && $_FILES["resume"]["error"] == 0) {
        $targetFile = $_FILES["resume"]["name"];
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedTypes = array("pdf", "doc", "docx");

        if (!in_array($fileType, $allowedTypes)) {
            echo json_encode(['status' => 'error', 'message' => 'Only PDF, DOC, and DOCX files are allowed.']);
            exit;
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No file was uploaded or there was an error with the upload.']);
        exit;
    }

    try {
        // Send confirmation email to the user
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['MAIL_USERNAME'];
        $mail->Password = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $_ENV['MAIL_PORT'];

        $mail->setFrom($_ENV['MAIL_USERNAME'], 'The Domain Designers');
        $mail->addAddress($email, $name); // User's email and name

        $mail->isHTML(true);
        $mail->Subject = 'Thank you for your submission';
        $mail->Body = "Dear $name,<br><br>Thank you for submitting your resume/portfolio. We have received your information and will get back to you shortly.<br><br>Best regards,<br>The Domain Designers";

        $mail->send();

        // Send email to the administrator
        $mail->clearAddresses();
        $mail->addAddress('admin@thedomaindesigners.com', 'Administrator'); // Admin's email and name

        $mail->Subject = 'New Resume Submission';
        $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        $mail->addAttachment($_FILES['resume']['tmp_name'], $targetFile);

        $mail->send();

        // Send SMS notification to admin using T-Mobile email-to-SMS gateway
        // $adminPhoneNumber = $_ENV['ADMIN_PHONE_NUMBER'];
        // $smsMail = new PHPMailer(true);
        // $smsMail->isSMTP();
        // $smsMail->Host = $_ENV['SMS_MAIL_HOST'];
        // $smsMail->SMTPAuth = true;
        // $smsMail->Username = $_ENV['SMS_MAIL_USERNAME'];
        // $smsMail->Password = $_ENV['SMS_MAIL_PASSWORD'];
        // $smsMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        // $smsMail->Port = $_ENV['SMS_MAIL_PORT'];

        // $smsMail->setFrom($_ENV['SMS_MAIL_USERNAME'], 'The Domain Designers');
        // $smsMail->addAddress("$adminPhoneNumber@tmomail.net"); // T-Mobile email-to-SMS address

        // $smsMail->Subject = ''; // SMS messages don't typically use subjects
        // $smsMail->Body = "New resume submission from $name. Email: $email. Phone: $phone.";

        // $smsMail->send();

        echo json_encode(['status' => 'success', 'message' => 'The file has been uploaded, and emails have been sent to you and the administrator.']);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
}
?>