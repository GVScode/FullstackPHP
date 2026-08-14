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
    <a href="index.php">listar</a>

    <h2>Visualizar detalhes do usuário</h2>

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



    ?>




</body>l

</html>