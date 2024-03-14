<?php

require "../../../bootstrap.php";

// Obtendo tipo da request
$request = getRequest();

// Verificando campos vazios
if (isEmpty($request)) {
    flash('message', 'Preencha todos os campos!');

    // redirecionamento
    redirect('contato');
}

// Validando campos
$validate = validateFields($request);

send();

// sendEmail($validate);

// var_dump(isEmpty($request));
// dd($validate);












