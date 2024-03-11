<?php

require "../../../bootstrap.php";

// Obtendo tipo da request
$request = getRequest();

// Verificando campos vazios
if (isEmpty($request)) {
    flash('message', 'Preencha todos os campos!');
    // echo 'preencha todos os campos!';
    // redirecionamento
    header("location:/?page=contato");
}

// Validando campos
$validate = validateFields($request);

// var_dump(isEmpty($request));
dd($validate);












