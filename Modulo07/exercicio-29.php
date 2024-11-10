<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$i = 0;

while($i < count($arr)){


$numeroAtual = $arr[$i];
if($numeroAtual == 30 || $numeroAtual == 40){
$i ++;
continue;



}
echo "Elemento: $numeroAtual <br>";

$i ++;

}







//
$x = count($arr);
$y = 10;
while( $y < $x){
if($x <= 30){
    echo "Estamos no loop $x e contando!";
}else{
    continue;
}

$y = $y + 10;

}

