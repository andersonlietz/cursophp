<?php

function somaPares($n1, $n2){
    if($n1 %2 ===0 && $n2 % 2 === 0){

        $resultado = $n1 + $n2;
        echo "N1 é $n1 e N2 é $n2!<br>";
        echo $resultado;
    }else{
        echo "Adicione apenas números pares.";
    }
    
}

somaPares(98,4);
?>