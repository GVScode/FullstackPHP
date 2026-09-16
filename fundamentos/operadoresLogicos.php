<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>
    <?php

    $a = (int) 10;
    $b = (int) 8;
    $c = (string) "";

    // Utilizando o operador lógico AND para verificar se ambas as condições são verdadeiras
    if (($a == 10) and ($b == 8)) {
        echo "Utilizando AND: Verdadeiro <br><br>";
    } else {
        echo "Utilizando AND: Falso <br><br>";
    }


    // Utilizando o operador lógico OR para verificar se pelo menos uma das condições é verdadeira
    if (($a == 10) or ($b == 7)) {
        echo "Utilizando OR: Verdadeiro <br><br>";
    } else {
        echo "Utilizando OR: Falso <br><br>";
    }


    // Utilizando o operador lógico XOR (exclusive OR) para verificar se apenas uma das condições é verdadeira
    if (($a == 10) xor ($b == 7)) {
        echo "Utilizando XOR: Verdadeiro <br><br>";
    } else {
        echo "Utilizando XOR: Falso <br><br>";
    }

    // Utilizando o operador lógico NOT para verificar se a condição é falsa
    // O operador NOT é representado pelo símbolo de exclamação (!)
    // A função empty() é utilizada para verificar se uma variável está vazia ou não "diferente de vazia?"

    if (!empty($c)) {
        echo "Utilizando NOT: Verdadeiro <br><br>";
    } else {
        echo "Utilizando NOT: Falso <br><br>";
    }
    
    // Utilizando o operador lógico && (AND) para verificar se ambas as condições são verdadeiras
    if (($a == 10) && ($b == 8)) {
        echo "Utilizando &&: Verdadeiro <br><br>";
    } else {
        echo "Utilizando &&: Falso <br><br>";
    }



    // Utilizando o operador lógico || para verificar se pelo menos uma das condições é verdadeira
    if (($a == 10) || ($b == 7)) {
        echo "Utilizando ||: Verdadeiro <br><br>";
    } else {
        echo "Utilizando ||: Falso <br><br>";
    }

    ?>

</body>

</html>