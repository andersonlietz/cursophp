<?php


Class Pessoa{

function falar(){

    echo 'Olá Pessoal!';
}


}
$matheus = new Pessoa();

$matheus->nome = "Matheus";

$matheus->tamanho = "Um metro e oitenta";
echo $matheus->nome;
echo "<br";
echo $matheus->tamanho;
