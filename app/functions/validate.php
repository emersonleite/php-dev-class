<?php

function validateFields(array $fields): object
{

    $validateEmail = function (string $string): string {
        return filter_var($string, FILTER_SANITIZE_EMAIL);
    };

    $validateText = function (string $string): string {
        $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
        return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
    };


    $validate = [];


    // Opção para FILTER_SANITIZE_STRING que está depreciado
    $sanitize = ["email" => $validateEmail,
        "name" => $validateText,
        "subject" => $validateText,
        "message" => $validateText
    ];


    foreach ($fields as $key => $value) {
        $validate[$key] = $sanitize[$key]($value);

    }
    return (object)$validate;
}

function isEmpty(array $fields): bool
{
    $empty = false;
    foreach ($fields as $key => $value) {
        if (empty($value)) {
            $empty = true;
        }
    }
    return $empty;
}
