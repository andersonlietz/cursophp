<?php


$arr = range(10, 45);

foreach($arr as $ar){

$soma = $ar + 6;
echo "<br>";
echo $ar."--> ";
echo $soma;
if($soma > 30){
  echo "Número excedeu o limite";
}
}
?>