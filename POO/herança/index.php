<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <?php

    // Inclui o arquivo da classe Cliente
    require './Cliente.php';

    // Inclui o arquivo da classe ClientePessoaFisica
    require './ClientePessoaFisica.php';

    // Inclui o arquivo da classe ClientePessoaJuridica
    require './ClientePessoaJuridica.php';

    // Instancia da classe Cliente
    $cliente = new Cliente();
    $cliente->logradouro = "Rua Francisco Rocha - A";
    $cliente->bairro = "Batel";
    $msg = $cliente->verEndereco();
    echo $msg;

    // Instancia da classe ClientePessoaFisica
    $clientePF= new ClientePessoaFisica();
    $clientePF->logradouro = "Rua Francisco Rocha - B";
    $clientePF->bairro = "Batel";
    $clientePF->nome = "Cesar";
    $clientePF->cpf = 12345678901;
    $msgPF = $clientePF->verInformacaoUsuario();
    echo $msgPF;

    // Instancia da classe ClientePessoaJuridica
    $clientePJ= new ClientePessoaJuridica();
    $clientePJ->logradouro = "Rua Francisco Rocha - C";
    $clientePJ->bairro = "Batel";
    $clientePJ->nomeFantasia = "Celke";
    $clientePJ->cnpj = 12345678901234;
    $msgPJ = $clientePJ->verInformacaoEmpresa();
    echo $msgPJ;
    
    ?>

</body>

</html>