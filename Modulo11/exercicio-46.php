<?php


$arr = [
[7, 6, 8, 4],
[9, 5, 3, 2],
[10, 23, 45, 20]
];
//loop do array externo
for($i = 0; $i < count($arr); $i++){
//imprimindo array
echo "Imprimindo array externo!" . ($i + 1) . "<br>";

//imprimindo array interno

for($j = 0;$j < count($arr[$i]); $j ++){

echo $arr[$i][$j] . "<br>";
}
}



