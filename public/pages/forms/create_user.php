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
    redirect('create_user');
    // Saindo do fluxo em caso de campos vazio
    return;
}

$sanitizeUserData = ["email" => $validateEmail,
    "name" => $validateText,
    "lastname" => $validateText,
    "password" => $validateText
];

// Validando campos
$validate = validateFields($request, $sanitizeUserData);

$cadastrado = createUser('customers', $validate);

if ($cadastrado) {
    createFlashMessage('message', 'Cadastro realizado com sucesso!');

      redirect('create_user');

    return;
}

createFlashMessage('message', 'Erro ao realizar o cadastro!');

redirect('create_user');


// var_dump(isEmpty($request));
// dd($validate);












