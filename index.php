<?php 

require_once "./connection.php";

//colocacando dados na tabela users
//$sql = " INSERT INTO users (name, email) VALUES ('Giovanna', 'giovanna@gmail.com')";

//Prepara a query para ser executada no banco de dados
//$stmt = $conn->prepare($sql);

//Executa a query no banco de dados
//$stmt->execute();               


$name = "Murilo";
$email = "murilo@gmail.com";


$sql = "INSERT INTO users (name, email) Values (:name, :email)";
//Prepara a query 
$stmt = $conn->prepare($sql);
//Executa a query 
$stmt->execute();                 