<?php

require_once  '../vendor/autoload.php';
$dotenv_file_path = '../.env';
if (file_exists($dotenv_file_path)) {
    $dotenv = Dotenv\Dotenv::createImmutable(dirname($dotenv_file_path));
    $dotenv->load();
}

function auth_recaptcha() {
    
    if(!empty($_POST['g-recaptcha-response'])) { 

        $recaptcha_secret = $_ENV['RECAPTCHA_SECRET_KEY']; 
        $recaptcha_response = $_POST['g-recaptcha-response'];
        
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}");
        $response_keys = json_decode($response, true);
        
        if ($response_keys["success"]) {
            // reCAPTCHA is valid, proceed with form processing
            return true;
        } else {
            // reCAPTCHA is invalid, show an error message
            return false;
        }
    }

    else {
        return false;
    }
}
?>
