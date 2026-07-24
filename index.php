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

  <?php
  // Receber os dados do formulário
  $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

  // Verificar se o token CSRF é válido
  if (isset($data['csrf_token'])) {
    var_dump($data);

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
      echo "Usuário cadastrado com sucesso!";
    } else {
      echo "Erro: Usuário não cadastrado com sucesso!";
    }
  }
  ?>



  <form method="POST" action="">

    <input type="hidden" name="csrf_token" value="123456">

    <label>nome</label>
    <input type="text" name="name" placeholder="nome completo" required>
    <br><br>

    <label>email</label>
    <input type="email" name="email" placeholder="Melhor e-mail" id="email" required>
    <br><br>

    <input type="submit" value="Cadastrar">




</body>

</html>