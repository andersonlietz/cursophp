<?php

$arr = [ "texto", 14, "Maverick", "Vendetta", 3, "Corsega", "Top Gun", 10, "Bandinhas", 1, "Bary"];

 $x = count($arr);
 $y = 0;

while($y < $x){
    if(is_string($arr[$y])){

        echo $arr[$y]."<br>";
    }

    $y++;
}

