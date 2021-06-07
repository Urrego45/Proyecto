<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../assets/librerias/PHPMailer/Exception.php';
include '../assets\librerias\PHPMailer\PHPMailer.php';
include '../assets\librerias\PHPMailer\SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'correosena.asp@gmail.com';                     //SMTP username
    $mail->Password   = 'senacorreo';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('correosena.asp@gmail.com','Cambiar clave');
    $mail->addAddress($_SESSION['emailC']);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Cambio de clave';
    $mail->Body    = 'Hola. 
                    <br>
                    <p>Dale clic <a href="http://localhost/Emi/index.php?v=cambiarPass">aqui</a> para cambiar tu contraseña</p>';

    $mail->send();

    header('location: http://localhost/Emi/index.php?v=index');
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}

