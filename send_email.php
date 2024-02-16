<?php
require 'vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = 'mail.conviktus.co.ao';
    $mail->SMTPAuth = true;
    $mail->Username = 'alfredo@conviktus.co.ao';
    $mail->Password = 'RTk{K8_Xz??,';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 465;

    $mail->setFrom('geral@conviktus.co.ao', 'Atendimento');
    $mail->addAddress('alfredo@conviktus.co.ao', 'Cesar');
    
    $mail->isHTML(true);                                 
    $mail->Subject = 'Titulo do E-mail';
    $mail->Body = "Olá Cesar, Sua solicitação sobre o <b>curso de PHP Developer</b>.<br>Texto da segunda linha.";
    $mail->AltBody = "Olá Cesar, Sua solicitação sobre o curso de PHP Developer.\nTexto da segunda linha.";

    $mail->send();
    
    echo 'E-mail enviado com sucesso!<br>';
} catch (Exception $e) {
    echo "Erro: E-mail não enviado com sucesso. Error PHPMailer: {$mail->ErrorInfo}";
    //echo "Erro: E-mail não enviado com sucesso.<br>";
}

?>
