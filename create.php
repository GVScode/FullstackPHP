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

  <a href="view.php">listar</a>

  <h2>Cadastro de Usuário</h2>

  <?php
  // Receber os dados do formulário
  $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

  // Verificar se o token CSRF é válido
  if (isset($data['csrf_token']) && hash_equals($_SESSION['csrf_tokens']['form_create_user'], $data['csrf_token'])) {
    //var_dump($data);

    //Tratar exceções e erros
    try {

      //Criar a query cadastrar usuario
      $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";

      // Preparar a query
      $stmt = $conn->prepare($sql);

      //Substituir os links da QUERY pelos valores
      $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
      $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);

      // Executar a query
      $stmt->execute();


      // Acessa o IF quando cadastrar o registro no banco de dados

      if ($stmt->rowCount()) {

        // Recuperar o ID do registro cadastrado
        $lastId = $conn->lastInsertId();


        //excluir os dados da variavel $data
        unset($data);

        echo "<p style='color: #086;'>Usuário cadastrado com sucesso! - ID do registro: $lastId</p>";
      } else {
        echo "<p style='color: #f00;'>Erro: Usuário não cadastrado</p>";
      }
    } catch (PDOException $e) {
      echo "<p style='color: #f00;'>Erro: Usuário não cadastrado 2. Erro gerado: " . $e->getMessage() . "</p>";
    }
  }
  ?>

  <form method="POST" action="">

    <?php
    // A função random_bytes gera uma sequencia de 32 bytes aleatórios.
    // Afunção bin2hex converte os bytes binarios gerados pela random_bytes em uma representação hexadecimal.

    $token = bin2hex(random_bytes(32));

    // Salvar o token CSRD na sessão
    $_SESSION['csrf_tokens']['form_create_user'] = $token;

    ?>

    <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">

    <label for="name">Nome</label>
    <input type="text" id="name" name="name" placeholder="Nome completo"
      value="<?php echo htmlspecialchars($data['name'] ?? ''); ?>" required>
    <br><br>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Melhor e-mail"
      value="<?php echo htmlspecialchars($data['email'] ?? ''); ?>" required>
    <br><br>

    <input type="submit" value="Cadastrar">
  </form>

</body>

</html>