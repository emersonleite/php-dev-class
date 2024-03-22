<?php

function validateFields(array $fields, array $sanitize): object
{

    $validate = [];

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
