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
    $b = (int) 12;
    $c = (int) 10;

    var_dump($a);
    var_dump($b);
    var_dump($c);


    if ($a == $b) {
        echo "Verdadeiro: o numero $a é igual ao numero $b <br><br>";
    } else {
        echo "Falso: o numero $a é diferente do numero $b <br><br>";
    }

    if ($a === $b) {
        echo "Verdadeiro: o numero $a é igual ao valor ou tipo $b <br><br>";
    } else {
        echo "Falso: o numero $a é diferente do valor ou tipo $b <br><br>";
    }

    if ($a != $b) {
        echo "Verdadeiro: o numero $a é diferente do numero $b <br><br>";
    } else {
        echo "Falso: o numero $a é igual ao numero $b <br><br>";
    }

    if ($a < $b) {
        echo "Verdadeiro: o numero $a é menor que o numero $b <br><br>";
    } else {
        echo "Falso: o numero $a não é menor que o numero $b <br><br>";
    }

     if ($a > $b) {
        echo "Verdadeiro: o numero $a é maior que o numero $b <br><br>";
    } else {
        echo "Falso: o numero $a não é maior que o numero $b <br><br>";
    }

        if ($a <= $b) {
            echo "Verdadeiro: o numero $a é menor ou igual ao numero $b <br><br>";
        } else {
            echo "Falso: o numero $a não é menor ou igual ao numero $b <br><br>";
        }
    
        if ($a >= $b) {
            echo "Verdadeiro: o numero $a é maior ou igual ao numero $b <br><br>";
        } else {
            echo "Falso: o numero $a não é maior ou igual ao numero $b <br><br>";
        }
    
        if ($a !== $b) {
            echo "Verdadeiro: o numero $a é diferente do valor ou tipo do numero $b <br><br>";
        } else {
            echo "Falso: o numero $a é igual ao valor ou tipo do numero $b <br><br>";
        }

    ?>




</body>

</html>