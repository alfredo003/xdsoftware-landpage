<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Verifica se os dados do formulário foram enviados
if(isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['company'])) {
    // Obtem os dados do formulário
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $company = $_POST['company'];
    
    // Criar uma nova instância do PHPMailer
    $mail = new PHPMailer(true);
    
    try {
        // Configurar o servidor SMTP
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = 'mail.conviktus.co.ao';
        $mail->SMTPAuth = true;
        $mail->Username = 'alfredo@conviktus.co.ao';
        $mail->Password = 'RTk{K8_Xz??,';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 465;
        
        // Configurar o remetente e o destinatário
        $mail->setFrom('geral@conviktus.co.ao', 'Alfreod');
        $mail->addAddress('alfredochivela2@gmail.com', 'Nome do Destinatário');
        
        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Novo Lead';
        $mail->Body = 'Nome: ' . $name . '<br>Telefone: ' . $tel . '<br>Empresa: ' . $company;
        
        // Enviar o e-mail
        $mail->send();
        echo 'success';
    } catch (Exception $e) {
        echo 'error';
    }
} else {
    echo 'error';
}
?>
