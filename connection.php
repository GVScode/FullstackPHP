<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = 3306;

try {

    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    echo "Conexão com o banco de dados realizado com sucesso!";
} catch (PDOException $e) {
    //echo "Erro: Conexão com o banco de dados não realizado. Erro gerado " . $e->getMessage();
    die("Erro 001: Por favor tente novamente mais tarde. Caso o problema persista, entre em contato com o administrador guilhermmesantos98@gmail.com");
}
