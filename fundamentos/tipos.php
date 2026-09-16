<?php

// 1. Tipos Escalares (valores únicos)
$str  = "Fullstack PHP";  // string
$int  = 2026;             // int (inteiro)
$float = 3.14;            // float (ponto flutuante)
$bool = true;             // bool (booleano)

// 2. Tipos Compostos (coleções de dados)
$arr  = ["Laravel", "Vue"]; // array
$obj  = new stdClass();      // object

// 3. Tipos Especiais
$nulo = null;                // null

// --- EXIBINDO TUDO COM ECHO ---
echo "📌 Tipos de Variáveis no PHP:<br>";
echo "----------------------------------------<br>";
echo "1. String  : '" . $str . "' (tipo: " . gettype($str) . ")<br>";
echo "2. Inteiro : " . $int . " (tipo: " . gettype($int) . ")<br>";
echo "3. Float   : " . $float . " (tipo: " . gettype($float) . ")<br>";
echo "4. Boolean : " . ($bool ? 'true' : 'false') . " (tipo: " . gettype($bool) . ")<br>";
echo "5. Array   : " . json_encode($arr) . " (tipo: " . gettype($arr) . ")<br>";
echo "6. Objeto  : " . get_class($obj) . " (tipo: " . gettype($obj) . ")<br>";
echo "7. Nulo    : " . ($nulo === null ? 'NULL' : 'valor') . " (tipo: " . gettype($nulo) . ")<br>";
echo "----------------------------------------";

?>