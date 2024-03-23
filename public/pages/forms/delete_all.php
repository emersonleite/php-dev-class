<?php

require_once "../../../vendor/autoload.php";

try {
    deleteAllUsers();

    echo 'Usuários apagados com sucesso';
} catch (Exception $e) {
    echo $e->getMessage();
}

