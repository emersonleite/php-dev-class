<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

/*
function sendEmail($data)
{
    $to = "emerson.leite@gmail.com";
    $subject = $data->subject;
    $message = $data->message;
    $headers = "From: " . $data->email . "\r\n" .
        "Reply-To: " . $data->email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}*/

function sendEmail(object $fields)
{
    // Instanciar o objeto do PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP - mailtrap - https://mailtrap.io/
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '2613650cb68352';
        $mail->Password = 'ab22a2d46f3e1e';
        $mail->SMTPSecure = 'PLAIN'; //tls ou ssl
        $mail->Port = 587; // Porta de saída do servidor SMTP

        // Configurações do e-mail
        $mail->setFrom($fields->email, $fields->name);
        $mail->addAddress($fields->email, $fields->name);
        $mail->addReplyTo($fields->email, $fields->name);

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = $fields->subject;
        $mail->Body = $fields->message;

        // Enviar e-mail
        $mail->send();
        echo 'E-mail enviado com sucesso!';
    } catch (Exception $e) {
        echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
    }
}