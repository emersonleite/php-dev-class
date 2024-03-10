<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd($dump): void
{
    var_dump($dump);
    die();
}

function getRequest(): array
{
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    $listOfRequest = ['POST' => $_POST, 'GET' => $_GET];

    return $listOfRequest[$requestMethod];
}



