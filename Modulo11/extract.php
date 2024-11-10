<?php



$arr = [
    'cor'=> 'Vermelho',
    'forma'=> 'Retangular',
    'material'=> 'Aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

echo "------------ <br> -------";

$nome = "Matheus";
$pessoa = [
    'nome'=> 'João',
    'idade' => 25
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";






?>