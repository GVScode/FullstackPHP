<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

<?php
$saldoContaCorrente = (float) 60.00;
$precoPizza = (float) 80.00;

if ($saldoContaCorrente >= $precoPizza) {
    echo "Verdadeiro: O valor do saldo da conta corrente é suficiente para comprar a pizza <br><br>";
} 

if ($saldoContaCorrente <= $precoPizza) {
    echo "Falso: O valor do saldo da conta corrente é insuficiente para comprar a pizza <br><br>";
}

$temperatura = (int) 32;
$temSol = (bool) true;

if ($temperatura >= 25 and $temSol) {
    echo "Pensamento Curitibano: Bora pra praia! <br><br>";
} 

if ($temperatura >= 30 and $temSol) {
    echo "Pensamento Cuiabano: Bora pra chapada! <br><br>";
}





?>



</body>

</html>