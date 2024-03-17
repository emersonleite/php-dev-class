<?php


function flash($key, $message, $type = "danger"): void
{
    if (!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = $message;
    }
}

function get($key): string
{
    $message = "";
    if (isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];
    }
    return $message;
}

function show(string $message, string $type = "danger"): void
{
    echo "<div class='alert alert-{$type}'>{$message}</div>";
}

function clearFlash(string $key)
{
    unset($_SESSION['flash'][$key]);
}