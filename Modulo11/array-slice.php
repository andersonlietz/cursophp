<?php

$arr=[1,2,3,4,5,6,7,8,9,15, 18,20,22,24,26,27,29,31,38,39,42,44,48,51,53,55,58,59,63,69,100,300,444,999,10000];


$slice1 = array_slice($arr, 1,3);

print_r($slice1);
echo"<br>";

echo "<hr>";

$slice2 = array_slice($arr, 4,2);

print_r($slice2);
echo"<br>";

echo "<hr>";

$slice3 = array_slice($arr,1);

print_r($slice3);
echo"<br>";

echo "<hr>";












?>