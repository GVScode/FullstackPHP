<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <?php

    // Incluir o arquivo que possui a classe
    require './Usuario.php';

    // Instanciar a classe e criar o objeto
    $usuario = new Usuario;

    // Chamar o método cadastrar
    $msg = $usuario->cadastrar("Cesar", "cesar@celke.com.br", 37);

    // Imprimir a mensagem recebida do método
    echo $msg;

    ?>

</body>

</html>