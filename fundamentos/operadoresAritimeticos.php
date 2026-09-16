<?php

$a = (int) 2;
$b = (int) 4;
$c = (int) 7;

$resultadoSoma = $a + $b + $c;
$resultadoSubtracao = $a - $b - $c;
$resultadoMultiplicacao = $a * $b * $c;
$resultadoDivisao = $a / $b / $c;
$resultadoResto = $a % $b % $c;

echo "O resultado da soma é: $resultadoSoma <br>";
echo "O resultado da subtração é: $resultadoSubtracao <br>";        
echo "O resultado da multiplicação é: $resultadoMultiplicacao <br>";
echo "O resultado da divisão é: $resultadoDivisao <br>";
echo "O resultado do resto é: $resultadoResto <br>";

echo "<hr>";    

$contaCorrente = 38564.32;
var_dump($contaCorrente);
echo "O valor da conta corrente é R$ " . number_format($contaCorrente, 2, ',', '.') . " <br><br>";

$debito = 200.16;
var_dump($debito);
echo "O valor do débito é R$ " . number_format($debito, 2, ',', '.') . " <br><br>";

$saldo = $contaCorrente - $debito;
var_dump($saldo);
echo "O saldo da conta corrente após o débito é R$ " . number_format($saldo, 2, ',', '.') . " <br><br>";
?>