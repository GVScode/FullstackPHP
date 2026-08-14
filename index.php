<?php

//Inclui arquivo com a conexão com banco de dados
require_once('./connection.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <a href="create.php">Voltar para a tela de cadastro</a>

    <h2>Listar Usuários</h2>

    <?php

    //Criar a query listar usuários
    $sql = "SELECT id, name, email FROM users";

    //preparar a query
    $stmt = $conn->prepare($sql);

    //executar a query
    $stmt->execute();
    //var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

    while ($row_user = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // var_dump($row_user);

        //echo "ID: " . $row_user['id'] . "<br>";
        //echo "Nome: " . $row_user['name'] . "<br>";
        //echo "Email: " . $row_user['email'] . "<br>";

        //Extrair o array para imprimir os valores através do elemento do array
        extract($row_user);


        //Imprimir as informações do registro
        echo "ID: $id <br>";
        echo "Nome: $name <br>";
        echo "Email: $email <br>";
        echo "<a href='view.php?id=$id'>Visualizar</a> | ";
        echo "<hr>";
    }





    ?>

</body>

</html>