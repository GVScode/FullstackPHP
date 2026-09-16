<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço de repetição For</title>
</head>
<body>

<?php

// Numero pra gerar a tabuada
$numero = 5;

// Laço de repetição For

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
}

?>
    
</body>
</html>