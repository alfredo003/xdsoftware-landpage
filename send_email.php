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
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com'; // Servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'seu_email@example.com'; // Seu e-mail
        $mail->Password = 'sua_senha'; // Sua senha
        $mail->SMTPSecure = 'tls'; // Tipo de segurança (tls/ssl)
        $mail->Port = 587; // Porta SMTP
        
        // Configurar o remetente e o destinatário
        $mail->setFrom('seu_email@example.com', 'Seu Nome');
        $mail->addAddress('destinatario@example.com', 'Nome do Destinatário');
        
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
