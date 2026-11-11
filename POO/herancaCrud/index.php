<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <a href="create.php">Cadastrar Usuário</a><br>
    <a href="index.php">Listar Usuário</a><br><br>

    <h2>Listar o Usuário</h2>


    <?php

// Verifica se existe uma mensagem de sessão e exibe
    if (isset($_SESSION['MSG'])) {
    
    // Exibe a mensagem de sessão
    echo $_SESSION['MSG'];

    // Remove a mensagem de sessão para que não seja exibida novamente
        unset($_SESSION['MSG']);
    }

    // impota a classe connection que estabelece a conexão com o DB

    require './Connection.php';

    // Importar a classe ListUsers QUE REALIZA A CONSULTA NO BANCO DE DADOS E RETORNA UM ARRAY COM OS USUÁRIOSque realiza a consulta aos usuarios
    require './users.php';

    // Instancia a classe ListUsers e armazena a referencia em $listUsers
    $listUsers = new users();

    //Executa o método list() para obter os usuários do DB e armazena o resultado em $resultUsers
    $resultUsers = $listUsers->list();


    //Percorre cada usuario retornado pela consulta
    foreach ($resultUsers as $rowUsers) {


        extract($rowUsers);
        echo "ID: {$id} <br>";
        echo "Nome: {$name} <br>";
        echo "Email: {$email}<br>";
        echo "<hr>";
    }
    ?>

</body>

</html>