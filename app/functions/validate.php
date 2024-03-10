<?php

function validate(array $fields): object
{

    $sanitize = ["email" => FILTER_SANITIZE_EMAIL,
        "name" => FILTER_SANITIZE_STRING,
        "subject" => FILTER_SANITIZE_STRING,
        "message" => FILTER_SANITIZE_STRING];
    
    $validate = [];

    foreach ($fields as $key => $value) {
        $validate[$key] = filter_var($value, $sanitize[$key]);

    }
    return (object)$validate;
}
