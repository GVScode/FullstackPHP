<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <?php

    // 1 - Pagamento com saldo da conta corrente
    // 2 - Pagamento com cartão de crédito

    $tipoPagamento = 2;

    $saldoContaCorrente = (float) 10.00;
    $saldoCartaoCredito = (float) 20.00;
    $precoPizza = (float) 80.00;

    if (($tipoPagamento == 1) and ($saldoContaCorrente >= $precoPizza)) {
        echo "Verdadeiro: O valor do saldo da conta corrente é suficiente para comprar a pizza <br><br>";
    }elseif (($tipoPagamento == 2) and ($saldoCartaoCredito >= $precoPizza)) {
        echo "Verdadeiro: O valor do saldo do cartão de crédito é suficiente para comprar a pizza <br><br>";
    }else {
        echo "Falso: O valor do saldo da conta corrente é insuficiente para comprar a pizza <br><br>";
    }


    ?>



</body>

</html>