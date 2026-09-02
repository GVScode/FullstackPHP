<?php

session_start(); // Iniciar a sessão

ob_start(); // Limpar o buffer

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

    <a href="index.php">Listar</a><br>
    <h2>Visualizar Usuário</h2>

    <?php

    // Receber o id da URL
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    // Criar a QUERY visualizar usuários
    $sql = "SELECT id, name, email FROM users WHERE id = :id";

    // Preparar a QUERY
    $stmt = $conn->prepare($sql);

    // Substituir os links da QUERY pelos valores
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Executar a QUERY
    $stmt->execute();

    // Ler os dados do registro
    $row_user = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($row_user);

    // Verificar se encontrou o registro no banco de dados
    if ($row_user ?? false) {

        // Extrair o array para imprimir os valores através do elemento do array
        extract($row_user);

        echo "ID: $id<br>";
        echo "Nome: $name<br>";
        echo "E-mail: $email<br>";
    } else {

        // Criar mensagem de erro e salvar na variável global
        $_SESSION['msg'] = "<p style='color: #f00;'>Usuário não encontrado!</p>";

        // Redirecionar o usuário para a página listar
        header("Location: index.php");
    }
    ?>

</body>

</html>