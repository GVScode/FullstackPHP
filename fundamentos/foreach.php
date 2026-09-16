<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço de repetição Foreach</title>
</head>

<body>

 <h3>Lista de convidados</h3>
    <?php

    $convidados = [
        "João",
        "Maria",
        "José",
        "Ana",
        "Pedro"
    ];
    
    // a sintaxe do foreach é diferente dos outros laços de repetição, pois ele é usado para percorrer arrays.
    // A cada iteração, ele atribui o valor do elemento atual a uma variável e executa o bloco de código dentro do loop.

    foreach ($convidados as $convidado) {
        echo "Convidado: $convidado <br>";
    }

    ?>

</body>

</html>