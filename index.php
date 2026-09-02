<?php

session_start(); // Iniciar a sessão

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

    <a href='create.php?id=id'>Cadastrar</a><br>

    <h2>Listar Usuários</h2>

    <?php

    // Verificar se existe a mensagem de sucesso ou erro
    if (isset($_SESSION['msg'])) {

        // Imprimir a mensagem de sucesso ou erro
        echo $_SESSION['msg'];

        // Destruir a mensagem de sucesso ou erro
        unset($_SESSION['msg']);
    }

    // Criar a QUERY listar usuários
    $sql = "SELECT id, name, email FROM users";

    // Preparar a QUERY
    $stmt = $conn->prepare($sql);

    // Executar a QUERY
    $stmt->execute();
    // var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

    // Criar o laço de repetição para ler os registros
    while ($row_user = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // var_dump($row_user);

        // echo "ID: " . $row_user['id'] . "<br>";
        // echo "Nome: " . $row_user['name'] . "<br>";
        // echo "E-mail: " . $row_user['email'] . "<br>";

        // Extrair o array para imprimir os valores através do elemento do array
        extract($row_user);

        // Imprimir as informações do registro
        echo "ID: $id<br>";
        echo "Nome: $name<br>";
        echo "E-mail: $email<br>";

        echo "<a href='view.php?id=$id'>Visualizar</a><br>";
        echo "<a href='update.php?$=$id'>Editar</a><br>";

        echo "<hr>";
    }
        
    ?>

</body>

</html>