<?php

$arr = [4,3,7,24,35,57,68,79,120,42,43,74,85,94,666,748,270,475];


function soma($a,$b){

return $a + $b;
}

function subtracao($a,$b){

    return $a - $b;
    }
$resultado = array_reduce($arr, "soma");
echo "$resultado <br>";
echo "<br><hr><br>";
$resultado2 = array_reduce($arr, "subtracao");
echo "$resultado2 <br>";

?>