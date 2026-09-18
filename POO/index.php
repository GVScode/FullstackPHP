<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Classe e objetos</title>
</head>

<body>

    <?php

    // Incluir o arquivo da classe Usuario
    require_once('./Usuario.php');

    // Instanciar a classe Usuario e criar o objeto $usuario
    $usuario = new Usuario();

    // Chamar o método cadastrar() da classe Usuario
    $msg = $usuario->cadastrar();

    // Imprimir a mensagem de sucesso
    echo $msg;






    ?>
</body>

</html>