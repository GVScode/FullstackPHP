<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço de repetição Do...While</title>
</head>
<body>
    <?php
//Capacidade máxima da garrafa

$capacidade_garrafa = 450; //ml
$agua_na_garrafa = 0; //ml
$quantidade_por_dose = 50; //ml

do {
    $agua_na_garrafa += $quantidade_por_dose;
    echo "Quantidade de água na garrafa: $agua_na_garrafa ml <br>";
} while ($agua_na_garrafa < $capacidade_garrafa);




?>


</body>
</html>