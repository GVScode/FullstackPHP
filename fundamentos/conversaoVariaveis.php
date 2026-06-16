<?php

$resultado = "2";
echo "O resultado exemplo um é:  $resultado <br>";
var_dump($resultado);

$resultado_dois = $resultado + 1;
echo "O resultado exemplo dois é:  $resultado_dois<br>";
var_dump($resultado_dois);

$resultado_tres = $resultado_dois + 3.5;
echo "O resultado exemplo tres é:  $resultado_tres<br>";
var_dump($resultado_tres);

$resultado_quatro = 11;
var_dump($resultado_quatro);

$resultado_cinco = (float) $resultado_quatro;
echo "O resultado exemplo cinco é:  $resultado_cinco<br>";
var_dump($resultado_cinco);

$resultado_seis = 8.9;
var_dump($resultado_seis);

$resultado_sete = (int) $resultado_seis;
echo "O resultado exemplo sete é:  $resultado_sete<br>";
var_dump($resultado_sete);
?>