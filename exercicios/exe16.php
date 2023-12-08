<?php

/*Faça um script para uma loja de tintas. O script deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros, que custam R$ 25,00.
Informe ao usuário as quantidades de tinta a serem compradas e os respectivos preços em 3 situações:
comprar apenas latas de 18 litros;
comprar apenas galões de 3,6 litros;
misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre arredonde os valores para cima, isto é, considere latas cheias.*/

function quantidadeDeLitros($area) {
    $litros = $area/6;
    return $litros;
}

function quantidadeDeLatas($litros) {
    $latas = ceil($litros/18);
    return $latas;
}

function quantidadeDeGaloes($litros) {
    $galoes = ceil($litros/3.6);
    return $galoes;
}

function precoTotalLatas($latas) {
    $precoLatas = $latas * 80;
    return $precoLatas;
}

function precoTotalGaloes($galoes) {
    $precoGaloes = $galoes * 25;
    return $precoGaloes;
}

function lataEGalao($litros) {
    $soLatas = ceil($litros / 18);
    $soLatasResto = $litros % 18;
    $soGaloes = $soLatasResto / 3.6;
    return $soLatas;
    return $soGaloes;
}

$area = 392;

$quantidadeLatas = quantidadeDeLatas($area);
$precoLatas = precoTotalLatas($quantidadeLatas);
echo "A quantidade de latas necessárias é de $quantidadeLatas." . PHP_EOL;
echo "O valor total das latas é de R$" . number_format($precoLatas, 2, ',', '.') . PHP_EOL . PHP_EOL;

$quantidadeGaloes = quantidadeDeGaloes($area);
$precoGaloes = precoTotalGaloes($quantidadeGaloes);
echo "A quantidade de galões necessários é de $quantidadeGaloes." . PHP_EOL;
echo "O valor total de galões é de R$" . number_format($precoGaloes, 2, ',', '.') . PHP_EOL . PHP_EOL;

$quantidadeLatasEGaloes = lataEGalao($area);
echo "A quantidade de latas e galões é de $quantidadeLatasEGaloes." . PHP_EOL;