<?php

require "../../../bootstrap.php";

session_start();

// Obtendo tipo da request
$request = getRequest();

// Verificando campos vazios
if (isEmpty($request)) {

    // Guardando a mensagem na sessão
    flash('message', 'Preencha todos os campos!');

    // redirecionamento
    redirect('contato');
}

// Validando campos
$validate = validateFields($request);

sendEmail($validate);

// var_dump(isEmpty($request));
// dd($validate);












