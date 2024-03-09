<?php
require "../bootstrap.php";
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Curso PHP class</title>
</head>
<body>

<div class="container">
    <?php

    try {
        require load();
    } catch (Exception $e) {
        // Mostrar erro na tela de forma mais amigável
        echo $e->getMessage();
    }

    ?>
</div>
</body>
</html>