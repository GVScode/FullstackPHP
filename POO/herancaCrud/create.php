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

    <h2>Cadastrar Usuário</h2>



    <?php

    // impota a classe connection que estabelece a conexão com o DB

    require './Connection.php';

    // Importar a classe users que realiza a consulta aos usuarios
    require './users.php';

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($formData['addUser'])) {
        $createUser = new users();
        $createUser->setFormData($formData);
        $value = $createUser->create();

        if ($value) {
            $_SESSION['MSG'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
            echo $_SESSION['MSG'];
            header("Location: index.php");
        } else {
            echo "<p style='color:red;'>Erro ao cadastrar usuário!</p>";
        }
    }

    ?>

    <form method="POST" action="">

        <label>Nome:</label>
        <input type="text" name="name" placeholder="Digite o nome" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" placeholder="Digite o email" required><br><br>

        <input type="submit" name="addUser" value="Cadastrar">
    </form>


</body>

</html>