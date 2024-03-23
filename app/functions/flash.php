<?php

function createFlashMessage($key, $message): void
{
    if (!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = $message;
    }
}

function getFlashMessage($key): string
{
    $message = "";
    if (isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];
    }
    return $message;
}

function showFlashMessage(string $message, string $type = "danger"): void
{
    echo "<div class='alert alert-{$type}'>{$message}</div>";
}

function clearFlashMessage(string $key)
{
    unset($_SESSION['flash'][$key]);
}
