<?php

$lista = ["Trigo", "Arroz","Feijão","Cerveja","Repolho","Suco"];

function listaParaString($arr){

    $str = "Você levou esses itens do mercado: ";


    for($i=0; $i <count($arr); $i++){

        if($i+1 == count($arr)){

            $str .="$arr[$i]. ";
        }else{
            $str .="$arr[$i], ";
        }


    }
    return $str;

}

echo listaParaString($lista);




