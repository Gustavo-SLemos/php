<?php
// calcule o IMC e mostre para o usuário se ele está abaixo, na média ou acima do recomendado. IMC = peso/altura**2

$peso = 70;
$altura = 1.78;
$imc = $peso/(($altura)**2);

if ($imc < 18.5) {
    echo "Seu IMC é $imc e está abaixo do recomendado.";
} elseif ($imc >= 18.5 and $imc <= 24.9) {
    echo "Seu IMC é $imc e está no índice recomendado.";
} else {
    echo "Seu IMC é $imc e está acima do recomendado.";
}