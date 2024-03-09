<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd($dump): void
{
    var_dump($dump);
    die();
}