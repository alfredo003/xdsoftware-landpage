<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $company = $_POST["company"];

    $to = "geral@conviktus.co.ao"; // Substitua pelo seu endereço de email
    $subject = "Novo lead da venda de software";
    $message = "Nome: $name\n";
    $message .= "Telefone: $tel\n";
    $message .= "Empresa: $company\n";
    
    // Enviar email
    mail($to, $subject, $message);
}
?>
