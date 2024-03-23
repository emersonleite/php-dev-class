<?php

require_once "../../../vendor/autoload.php";

try {
    deleteTable();

    echo 'Tabela apagada com sucesso!';
} catch (Exception $e) {
    echo $e->getMessage();
}

