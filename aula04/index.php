<?php

//função sem retorno e sem parâmetro
function calcularSoma(){
    $resultado = 4+4;
    echo $resultado;
}
// chamada de função
// calcularSoma();

//função sem retorno e com parâmetro
function calcularPreco($quantidade, $preco){
    $valor = $quantidade * $preco;
    echo $valor;
}
//chamada da função
// calcularPreco(5, 2);

//funcao com retorno e parametros
function calcularSubtracao($n1, $n2){
    return $n1-$n2;
}
//chamada de função
$resultado = calcularSubtracao(5, 4);
// echo $resultado;

// echo calcularSubtracao(3, 2);

function calcularSomaSequencia($limite){
    $soma = 0;
    for ($i = 0; $i < $limite; $i++){
        $soma+=$i;
    }
    return $soma;
}

// $valor = calcularSomaSequencia(5);
// echo $valor;

function ePar ($numero){
    if($numero%2 == 0){
        return true;
    }
        return false;
}

//chamando a função com operador ternário
echo ePar(15)?"é par":"é ímpar";
?>