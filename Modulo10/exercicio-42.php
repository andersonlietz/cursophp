<?php

$str = "Cadê o meu queijo? Ele estava aqui em cima!";

$queijo = substr($str, 11, 7);
$estava = substr($str, 23, -14);

echo $str.'<br>';
echo $queijo.'<br>';
echo $estava;