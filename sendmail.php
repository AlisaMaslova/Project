<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';

$mail = new PHPMailer();

try {
    $mail->CharSet = 'UTF-8';


$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;
 
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'alismas0607@gmail.com';
$mail->Password = 'fkbcfvfckjdf';
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    
    //Recipients
    $mail->setFrom('skvorushka.choir@gmail.com');		
 
    // Кому
    $mail->addAddress('skvorushka.choir@gmail.com', 'Хор скворушка');
     
    // Тема письма
    $mail->Subject = 'Тест';
     

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    file_put_contents('html/log.txt', 'Message has been sent', FILE_APPEND);
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    file_put_contents('html/log.txt', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}", FILE_APPEND);
}
?>