<?php

require_once "../../../vendor/autoload.php";

try {
    createTable('customers');

    echo 'Tabela criada com sucesso!';
} catch (Exception $e) {
    echo $e->getMessage();
}

