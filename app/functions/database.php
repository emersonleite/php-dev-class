<?php

class Config
{
    const PATH_TO_SQLITE_FILE = 'user.db';
}

function connectToDB(): PDO
{
    return new PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE, "", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
}


function createUser(string $table, stdClass $fields)
{
    // $pdo = connectToDB();


    // Transformando em array
    if (!is_array($fields)) {
        $fields = (array)$fields;
    }

    $pdo = connectToDB();

    $pdo->exec("CREATE TABLE IF NOT EXISTS $table (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
  );");

    $pdo->exec("insert into customers(id, name, lastname, email, password) values (1,'Emerson', 'Leite','emerson.leite@gmail.com', '123456')");

    /*$sql = "insert into $table (";
    $sql .= implode(", ", array_keys($fields)) . ")";
    $sql .= " values (";
    $sql .= ":" . implode(",:", array_keys($fields)) . ")";*/

    // dd($sql);
    // dd($pdo->prepare($sql));


    // $insert = $pdo->prepare($sql);

    // $insert->execute($fields);

    // return $insert->execute($fields);
}

function updateUser($username, $password)
{
}

function findUser($username)
{
}

function deleteUser($username)
{
}