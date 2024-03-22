<?php

$validateEmail = function (string $string): string {
    return filter_var($string, FILTER_SANITIZE_EMAIL);
};

$validateText = function (string $string): string {
    $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
    return str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
};