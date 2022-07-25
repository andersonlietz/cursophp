<?php


$x = 4;
$y =& $x;



echo "$x<br>";
echo "$y";
echo "<br>";
$y = 50;

echo "Valor após mudança na variável x <br>";
  echo "$y<br>";
  echo "$x<br";








