<?php

$arr = [
'Joaquim'=>20,
'Pedro'=>59,
'Joca'=>30,
'Juca'=>32,
'Paulo'=>24
];

asort($arr);
echo "Organizando as idades em ordem crescente com asort() :";
echo "<br>";
print_r($arr);
echo "<br>";
echo "<hr>";
$arr2 = [
    'Joaquim'=>20,
    'Pedro'=>59,
    'Joca'=>30,
    'Juca'=>32,
    'Paulo'=>24,
    'Tomas'=>40,
    'Tiago'=>26,
    'João'=>60,
    'Matheus'=>19,
    'Marcos'=>33
    ];
    
    arsort($arr2);
    echo "Organizando as idades em ordem decrescente com arsort() :<br>";
    print_r($arr2);
    echo "<br>";
    echo "<hr>";
    ksort($arr2);
    echo "Organizando as chaves (nomes) em ordem alfabética com ksort()<br>";
print_r($arr2);
echo "<br>";
echo "<hr>";
krsort($arr2);
echo "Organizando as chaves ao contrário com krsort();<br>";
print_r($arr2);





