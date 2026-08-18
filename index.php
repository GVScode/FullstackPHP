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
    $sql = "SELECT id, name, email FROM users where id = :id";

    //preparar a query
    $stmt = $conn->prepare($sql);

   
   // substituir os links da query pelos valores
   $stmt->bindParam(':id', $id, PDO::PARAM_INT);
   
    //executar a query
    $stmt->execute();
    

    //ler os dados do registro
    $row_user = $stmt->fetchAll(PDO::FETCH_ASSOC);

    extract($row_user);


    echo "ID: $id<br>";
    echo "Nome: $name<br>";
    echo "Email: $email<br>";
    




    ?>

</body>

</html>