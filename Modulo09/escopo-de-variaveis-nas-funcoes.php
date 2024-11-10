<?php 
$a = 10;
$b = 15;
function testeEscopo(){


$a = 5;
global $b;

echo "Escopo global da variável B, dentro da função: $b<br>";
echo "Escopo local de A: $a <br>";
}

echo "Escopo global da variável B:$b<br> ";
testeEscopo();
echo "Escopo Global de A: $a <br>";