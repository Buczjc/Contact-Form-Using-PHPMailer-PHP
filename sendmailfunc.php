<?php
include 'index.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST['submit-btn-php'])) {
    $email = $_POST['email-php'];
    $subject = $_POST['subject-header-php'];
    $message = $_POST['message-body-php'];
    try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'buclaresjohncarlos0226@gmail.com';                     //SMTP username
    $mail->Password   = 'vesq hiju yext scnb';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("buclaresjohncarlos0226@gmail.com", "Test Mailer");
    $mail->addAddress('buclaresjohncarlos0226@gmail.com', 'Carlos Buclares');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body= "
    <h1>This is a test send mail!</h1> <br>
    <p>From : $email</p>
    <p>Subject : $subject</p>
    <p>Message : $message</p>
    ";

    //send email after configuration is done
    $mail->send();
    echo "<script>alert('✅ EMAIL SUCCESSFULLY SENT! ✅'); window.location.href = 'index.php';</script>";
} catch (Exception $e) {
    echo "<script>alert('✅ MAIL COULD NOT BE SENT! Mailer Error: {$mail->ErrorInfo} ✅'); window.location.href = 'index.php';</script>";
}
}