<body>

<header>
<h1>Hello!</h1>
</header>

<form method="POST">
<h2>Selecione um número de 10 há 30.</h2>
      <input name="nSelecionado"  placeholder="Escolha um número de 20 a 60.">
      <input type="submit" value="ENVIAR">

      <?php

function sortearNumero($x){

    define( "INFERIOR",10);
    define("SUPERIOR",20);
    $numero = rand(INFERIOR, SUPERIOR);
    $maximo = 20;
    $minimo = 10;
    
    if($x < $maximo|| $x > $minimo){
        echo "Lance do Algoritmo: $numero"."<br>";
        
        if($x == $numero){
            echo "Parabéns! Seu número foi sorteado!";
        }else{
            echo "Não foi dessa vez :(";
        }
    }else{
        echo "O número $x não é válido! Apenas números maiores de 10 e menores de 30! ";
    }

    
}
if(isset($_POST['nSelecionado'])){
    $nSelecionado=addslashes($_POST['nSelecionado']);
    $x = $nSelecionado;
    echo "Você selecionou o número: $x!"."<br>";
    sortearNumero($x);
}
?>


</form>

</body>
<style rel="stylesheet" type= "text/css">

body{
    width: 100%;
    height:auto;
    background-color:#FF0000;
    margin:auto;
}
header{
    width:70%;
    margin:auto;
    height:300px;

}
form{
    width:70%;
    margin:auto;
    font-family:Arial;
    background-color:green;
}


</style>


