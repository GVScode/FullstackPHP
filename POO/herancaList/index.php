<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>
    <h2>Listar o Usuário</h2>

<?php

require './Connection.php';
require './ListUsers.php';

$listUsers = new ListUsers();
$resultUsers = $listUsers->list();

foreach($resultUsers as $rowUsers){
    

    extract($rowUsers);
    echo "ID: {$id} <br>";
    echo "Nome: {$name} <br>";
    echo "Email: {$email}<br>";
    echo "<hr>";
}
?>

</body>
</html>