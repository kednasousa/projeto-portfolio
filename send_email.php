<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Configurar o e-mail
    $to = "kednacsousa@gmail.com"; // Substitua pelo seu e-mail
    $subject = "Novo contato de $name";
    $body = "Nome: $name\nEmail: $email\n\nMensagem:\n$message";
    $headers = "From: $email";

    // Enviar o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>