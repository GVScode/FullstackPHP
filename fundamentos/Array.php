<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>

    <?php

    /*****************************************/
    /************** Array numérico ***********/
    /*****************************************/


    //criar um array numérico

    $frutas = ["maçã", "banana", "laranja", "abacaxi"];
    var_dump($frutas);

    //acessar um elemento do array
    echo "Recuperar um elemento do array numerico: " . $frutas[0] . "<br>"; // saida: maçã


    // adicionar um novo elemento ao array associativo

    $precos["uva"] = 4.00;
    //var_dump($precos);

    unset($precos["laranja"]); // Remove o elemento "banana" do array associativo
    var_dump($precos);


    // Adicionar um novo elemento ao array numérico
    $frutas[] = "uva";
    var_dump($frutas);


    unset($frutas[1]); // Remove o elemento "banana" do array
    var_dump($frutas);




    /*****************************************/
    /********** Array Assossiativo ***********/
    /*****************************************/

    //criar um array associativo
    $precos = [
        "maçã" => 3.00,
        "banana" => 2.00,
        "laranja" => 2.50,
    ];

    var_dump($precos);

    //Acessar elementos 
    echo "Banana: R$ " . number_format($precos["maçã"], 2, ",", ".") . "<br>"; // saida: R$ 3,00
    var_dump($precos);

    // Adicionar um novo elemento ao array associativo
    $precos["abacaxi"] = 5.00;
    Var_dump($precos);

    // Remover um elemento do array associativo
    unset($precos["banana"]); // Remove o elemento "banana" do array associativo
    var_dump($precos);

    ?>
</body>

</html>