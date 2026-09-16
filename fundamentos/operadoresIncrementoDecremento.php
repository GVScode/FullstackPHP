<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>
    <?php

    echo "<h3>Pós incremento</h3>";
    $a = 5;
    echo "O valor de a é: " . $a++ . "<br>";
    echo "O valor de a após o pós incremento é: $a <br>";

    echo "<h3>Pré incremento</h3>";
    $b = 5;
    echo "O valor de b é: " . ++$b . "<br>";
    echo "O valor de b após o pré incremento é: $b <br>";

    echo "<h3>Pós decremento</h3>";
    $a = 10;
    echo "O valor de a é: " . $a-- . "<br>";
    echo "O valor de a após o pós incremento é: $a <br>";

    echo "<h3>Pré decremento</h3>";
    $b = 10;
    echo "O valor de b é: " . --$b . "<br>";
    echo "O valor de b após o pré incremento é: $b <br>";

    ?>
</body>

</html>