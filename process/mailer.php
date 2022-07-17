<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'localhost';                            //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'localhost';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('supportDMX@deepinmx.com', 'Google');
    $mail->addAddress(userForgot); 


    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/banner.jpg', 'logo.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Tu código de seguridad';
    $mail->Body    = 'Este es tu código de seguridad, no lo compartas con nadie: <b><?=$token=></b>, en el siguiente link puedes cambiar tu contraseña: <b><?=$forgot=></b>. Si no has solicitado un cambio de contraseña, ignora este mensaje y contacta con el soporte de Deepin México para solucionar problemas de seguridad.';

    $mail->send();
    echo 'Cógio enviado';
} catch (Exception $e) {
    echo "Lo sentimos, ahora mismo no puede ser enviado. Error: {$mail->ErrorInfo}";
}