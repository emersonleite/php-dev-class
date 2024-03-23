<?php

class Config
{
    const PATH_TO_SQLITE_FILE = '../../../db/user.db';
}

function connectToDB(): PDO
{
    return new PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE, "", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);
}

function createTable(string $table){
    $pdo = connectToDB();

    return $pdo->exec("CREATE TABLE IF NOT EXISTS $table (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
  );");
 
}


function createUser(string $table, $fields)
{
    // Transformando em array
    if (!is_array($fields)) {
        $fields = (array)$fields;
    }

    $pdo = connectToDB();

    $sql = "insert into $table (";
     $sql .= implode(", ", array_keys($fields)) . ")";
     $sql .= " values (";
     $sql .= ":" . implode(",:", array_keys($fields)) . ")";

     $insert = $pdo->prepare($sql);

     $insert->execute($fields);

    // dd($sql);
    // dd($pdo->prepare($sql));
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

function deleteAllUsers()
{
    $pdo = connectToDB();

    $sql = "DELETE FROM customers;";

    return $pdo->exec($sql);

}

function deleteTable()
{
    $pdo = connectToDB();

    $sql = "DROP TABLE customers;";

    return $pdo->exec($sql);

}