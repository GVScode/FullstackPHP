<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>
    <?php

    $operacao = 4;

    switch ($operacao) {
        case 1:
            echo "Selecionando a opção $operacao: <strong>PIX</strong> <br><br>";
            break;
        case 2:
            echo "Selecionando a opção $operacao: <strong>Pagar boleto</strong> <br><br>";
            break;
        case 3:
            echo "Selecionando a opção $operacao: <strong>Cofrinho</strong> <br><br>";
            break;
        case 4:
            echo "Selecionando a opção $operacao: <strong>Investimento</strong> <br><br>";
            break;
        default:
            echo "Operação inválida! <br><br>";
            break;
    }

    ?>

</body>

</html>