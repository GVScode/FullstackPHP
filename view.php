<?php

session_start(); // Inicia a sessão 

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

    <a href="index.php">Listar</a><br>

    <h2>Visualizar usuário</h2>

    <?php

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    //Criar a query listar usuários
    $sql = "SELECT id, name, email FROM users WHERE id = :id";


    // Preparar a query
    $stmt = $conn->prepare($sql);

    //Substituir os links da QUERY pelos valores
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Executar a query
    $stmt->execute();

    //Ler os dados do registro
    $row_user = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($row_user);

    if ($row_uaer ?? false) {

        // Extrair o array para imprimir os valores atraves do elemento do array
        extract($row_user);


        echo "ID: " . $id . "<br>";
        echo "Nome: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    } else {

        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";

        header("Location: index.php");
    }

    ?>




</body>

</html>