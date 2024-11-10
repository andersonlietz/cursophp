<?php



$frase = "Bastiao Salgado Filho";

$contadorDeAs = 0;
for($i = 0; $i < strlen($frase); $i++){

if($frase[$i] === "a"){
$contadorDeAs++;
}
}
echo "O número de A`s na frase é de $contadorDeAs";

?>






