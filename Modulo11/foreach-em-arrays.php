<?php 


$anderson = [
    'nome' => 'Anderson',
    'idade'=> 24,
    'profissão'=> 'Programador'
];


$alexia = [
    'nome' => 'Alexia',
    'idade'=> 30,
    'profissão'=> 'Engenheira de Software'
];

$robson = [
    'nome' => 'Robson',
    'idade'=> 22,
    'profissão'=> 'Pedreiro'
];

foreach($robson as $carac => $value){

    echo "$carac =>$value<br>";
}
echo "<br> <hr> <br>";
foreach($alexia as $carac => $value){

    echo "$carac =>$value<br>";
}






