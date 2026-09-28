<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <?php

    // Incluir o arquivo com a classe de usuários
    require './Usuarios.php';

    // Instanciar a classe Usuarios
    $listarUsuarios = new Usuarios();

    // Chamar o método listar
    $resultadoUsuarios = $listarUsuarios->listar();

    // Exibir os resultados
    foreach($resultadoUsuarios as $rowUsuario){

        // Extrai as variáveis do array associativo para facilitar o acesso aos dados
        extract($rowUsuario);

        // echo "ID do usuário: " . $rowUsuario['id'] . "<br>";
        echo "ID do usuário: $id<br>";
        echo "Nome do usuário: $nome<br>";
        echo "E-mail do usuário: $email<br>";
        echo "<hr>";
    }

    ?>

</body>

</html>