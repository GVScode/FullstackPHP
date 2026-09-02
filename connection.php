<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = 3307;

try {

    // Conexão com a porta
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    // Conexão sem a porta
    //$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //echo "Conexão com banco de dados realizado com sucesso.";

} catch (PDOException $e) {
    // echo "Erro: Conexão com banco de dados não realizado. Erro gerado " . $e->getMessage();
    die("Erro 001: Por favor tente novamente. Caso o problema persista, entre em contato com o administrador cesar@celke.com.br  " . $e->getMessage());
}
