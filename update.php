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


    <a href="index.php">Listar</a>

    <h2>Editar Usuário</h2>

    <?php

    //Receber o id da URL
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    //Criar a query visualizar usuarios
    $sql = "SELECT id, name, email FROM users WHERE id = :id";

    //prepare a QUERY
    $stmt = $conn->prepare($sql);

    // substituir os links da QUERY pelos valores
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    //Executar  a QUERY
    $stmt->execute();

    //Ler os dados do registro
    $row_user = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($row_user);


    //verifica se nao encontrou o registro no banco de dados
    if (!$row_user) {

        //Criar mensagem de erro e salvar na variavel global
        $_SESSION['msg'] = "<p style='color: #f00;'>Usuário não encontrado!</p>";

        // Redirecionar o usuario para a pg listar
        header("location: index.php");

        //Parar o processamento
        return;
    }

    // Extrair o array para imprimir os valores através do elemento do array
    extract($row_user);

    // Receber os dados do formulario
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    var_dump($data);

    // Verificar se o token CSRF é válido
    if (isset($data['csrf_token']) && hash_equals($_SESSION['csrf_tokens']['form_update_user'], $data['csrf_token'])) {
        var_dump($data);
    }

    // Tratar exceções e erros
    try {

//criar a QUERY editar usuario

            $sql = "UPDATE users 

            SET name = :name, email = :email 
            WHERE id = :id";

     //Preparar a QUERY
     $stmt = $conn->prepare($sql);

     // Substituir os links da QUERY pelos valores
     $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
     $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
     $stmt->bindParam(':id', $data['csrf_id'], PDO::PARAM_INT);

     IF ($stmt->execute()) {
         echo "<p style= 'color: #086;'>Usuário editado com sucesso!</p>";
     } else {
         echo "<p style= 'color: #f00;'>Erro ao editar o Usuario!</p>";
     }

    } catch (Exception $e) {
        echo "<p style='color: #f00;'>Usuário não editado!</p>";
    }



    ?>

    <form method="POST" action="">
        <?php
        // A função random_bytes gera uma sequência de 32 bytes aleatórios.
        // A função bin2hex converte os bytes binários gerados pela random_bytes em uma representação hexadecimal.
        $token = bin2hex(random_bytes(32));

        // Salvar o token CSRF na sessão
        $_SESSION['csrf_tokens']['form_update_user'] = $token;

        ?>
        <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
        <input type="hidden" name="csrf_id" value="<?php echo $id; ?>">


        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome completo" value="<?php echo $data['name'] ?? $name; ?>" required><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Melhor e-mail" value="<?php echo $data['email'] ?? $email; ?>" required><br><br>

        <input type="submit" value="Salvar"><br><br>

    </form>

</body>

</html>