<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

<?php
$saldoContaCorrente = (float) 70.00;
$precoPizza = (float) 80.00;

if ($saldoContaCorrente >= $precoPizza) {
    echo "Verdadeiro: O valor do saldo da conta corrente é suficiente para comprar a pizza <br><br>";
}else {
    echo "Falso: O valor do saldo da conta corrente é insuficiente para comprar a pizza <br><br>";
}


?>



</body>

</html>