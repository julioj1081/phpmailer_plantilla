<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PhpMailer/Exception.php';
require 'PhpMailer/PHPMailer.php';
require 'PhpMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.live.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'julioj1081@hotmail.com';      // SMTP username acceso para entra a la cuenta
        $mail->Password   = 'QETUOwryip1081';                // SMTP password acceso para entra a la cuenta
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                   // TCP port to connect to

    //Recipients
    //Recipients
       $mail->setFrom('julioj1081@hotmail.com', 'USUARIO QUE ENVIA EL CORREO'); //Desde donde se va a enviar
       $mail->addAddress('perro7xx@hotmail.com');                               // Aquien se le va a enviar

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the sujeto';
    $mail->Body    = 'This is the cuerpo del mensaje <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
