<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <?php

    // Inclui os arquivos
    require './Investimento.php';
    require './RendaFixa.php';
    require './Fundo.php';

    // A classe abstrata não pode ser instanciada
    // $investimento = new Investimento(100.11, 'CDI');
    // $msgInvestimento = $investimento->verValor();
    // echo $msgInvestimento;

    // Instanciar a classe RendaFixa, criar o objeto e chamar o método calcularJuro
    $cofrinho = new RendaFixa(3000.33, 'Cofrinho');
    $msgCofrinho = $cofrinho->calcularJuro();
    echo $msgCofrinho;

    // Instanciar a classe Fundo, criar o objeto e chamar o método calcularJuro
    $fundo = new Fundo(4000.44, 'Fundo Multimercado');
    $msgFundo = $fundo->calcularJuro();
    echo $msgFundo;

    ?>

</body>

</html>