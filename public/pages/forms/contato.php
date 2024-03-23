<?php


global $validateEmail, $validateText;
require "../../../bootstrap.php";
require "../../../app/functions/validations.php";


session_start();

// Obtendo tipo da request
$request = getRequest();

// Verificando campos vazios
if (isEmpty($request)) {

    // Guardando a mensagem na sessão
    createFlashMessage('message', 'Preencha todos os campos!');

    // redirecionamento
    redirect('contato');
}


// Opção para FILTER_SANITIZE_STRING que está depreciado
$sanitizeEmail = ["email" => $validateEmail,
    "name" => $validateText,
    "subject" => $validateText,
    "message" => $validateText
];

// Validando campos
$validate = validateFields($request, $sanitizeEmail);


// var_dump(isEmpty($request));
// dd($validate);

sendEmail($validate);












