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

  <form method="POST" action="">

      
      
      <input type="hidden" name="csrf_token" value="123456">

      <label>nome</label> 
      <input type="text" name="name" placeholder="nome completo" required>
      <br><br>

      <label>email</label>
      <input type="email" name="email" id="email" required>
      <br><br>

      <input type="submit" value="Cadastrar">




</body>

</html>