<?php

// Incluir o arquivo com a conexão com banco de dados
require_once('./connection.php');

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>


    <a href="index.php">Listar</a>

    <h2>Editar Usuário</h2>

    <?php

    $id = 2;
    $name = "Cesar";
    $email = "guiguiguiguigui@gui.com";

    $sql = "UPDATE users 

           SET name = :name, email = :email 
           WHERE id = :id";

    // Preparar a QUERY
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);



    IF ($stmt->execute()) {
        echo "<p style= 'color: #086;'>Registro atualizado com sucesso!</p>";
    } else {
        echo "<p style= 'color: #f00;'>Erro ao atualizar o registro!</p>";
    }
   
    ?>






</body>

</html>