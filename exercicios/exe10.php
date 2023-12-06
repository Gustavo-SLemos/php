<?php

#Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:
#o produto do dobro do primeiro com metade do segundo .
#a soma do triplo do primeiro com o terceiro.
#o terceiro elevado ao cubo.

$numeroInteiro1 = 8;
$numeroInteiro2 = 10;
$numeroReal = 4.8;

$produto = ($numeroInteiro1 * 2) * ($numeroInteiro2/2);
$soma = ($numeroInteiro1 * 3) + $numeroReal;
$cubo = $numeroReal ** 3;

echo "O produto do dobro do primeiro com metade do segundo é: $produto" . PHP_EOL;
echo "A soma do triplo do primeiro com o terceiro é: $soma" . PHP_EOL;
echo "o terceiro elevado ao cubo é: $cubo" . PHP_EOL;