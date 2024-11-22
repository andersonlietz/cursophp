<?php

$arr1 = [ 1,2,3,4,5,6];
$arr2 = [7,2,8,9,4,10,11,6];

$diff = array_diff($arr1,$arr2);

print_r($diff);
echo "<br>";


$diff2 = array_diff($arr2,$arr1);
print_r($diff2);









