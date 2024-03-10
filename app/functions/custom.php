<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd($dump): void
{
    var_dump($dump);
    die();
}

function getRequest(): array
{
    $request = $_SERVER['REQUEST_METHOD'];

    $list = ['POST' => $_POST, 'GET' => $_GET];

    return $list[$request];
}