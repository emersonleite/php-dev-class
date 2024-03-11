<?php

/**
 * @throws Exception
 */
function load(): string
{
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";

    // Verifica se o diretório ou arquivo existe
    if (!file_exists($page)) {
        throw new Exception('Page not found');
    }

    return $page;

}