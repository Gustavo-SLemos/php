<?php

#Faça um script para uma loja de tintas. O script deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 3 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00. Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total.

#metrosQuadrados = readline("Digite o tamanho em metros quadrados da área a ser pintada: ");


function calcularQuantidadeLatas($area) {
    $litrosNecessarios = $area/3;
    $latasNecessarias = ceil($litrosNecessarios/18);

    return $latasNecessarias;
}

function calcularPrecoTotal($latas) {
    $precoPorLata = 80;
    $precoTotal = $latas * $precoPorLata;

    return $precoTotal;
}


$area = 300;
$latas = calcularQuantidadeLatas($area);
$precoTotal = calcularPrecoTotal($latas);

echo "Quantidade de latas necessárias: $latas" . PHP_EOL;
echo "Preco Total: $precoTotal" . PHP_EOL;