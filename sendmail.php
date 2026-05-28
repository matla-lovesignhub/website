<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Attempting to send email... <br>";
try {

    // SMTP SETTINGS
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'matthew@lovesignhub.co.uk'; // Your Gmail address
    $mail->Password   = 'aucf ptjt muia aubv'; // App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // FROM / TO
    $mail->setFrom('noreply@lovesignhub.co.uk', 'LoveSignHub');
    $mail->addAddress('matthewlannigan@outlook.com', 'Matthew Lannigan');

    // EMAIL CONTENT
    $mail->isHTML(true);
    $mail->Subject = 'Login Confirmation';
    $mail->Body    = '<h2>You logged in successfully</h2>';

    $mail->send();

    echo "Email sent successfully";

} catch (Exception $e) {

    echo "Mailer Error: " . $mail->ErrorInfo;
}