<?php

#Tendo como dado de entrada a altura (h) de uma pessoa, construa um script que calcule seu peso ideal, utilizando as seguintes fórmulas:
#Para homens: (72.7*h) - 58
#Para mulheres: (62.1*h) - 44.7

$sexo = strtolower("homem");
$altura = 1.65;

if ($sexo == "mulher") {
    $pesoIdeal = (62.1 * $altura) - 44.7;
    echo "Seu peso ideal é de $pesoIdeal Kg.";
} 
elseif ($sexo == "homem") {
    $pesoIdeal = (72.7 * $altura) - 58;
    echo "Seu peso ideal é de $pesoIdeal Kg.";
} else {
    echo "Sexo inválido, tente novamente." . PHP_EOL;
}