<?php

// Config do dotenv. Deve ficar na mesma pasta do .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
