<?php

$a = 1;
$b = "string";
$c = [];


if(is_int($a) || is_float($a)){

$multi1 = $a * 2;
if($multi1 > 100){
    echo "O número é maior que 100! <br>";
}else{
    echo "O número não é maior que 100! <br>";
}


}else{
    echo "Não é um número <br>";
}








