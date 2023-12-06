<?php

#Faça um script que peça a temperatura em graus Farenheit, transforme e mostre a temperatura em graus Celsius.
#C = (5 * (F-32) / 9).

$farenheit = 70;
$celsius = (5 * ($farenheit - 32)/ 9);

echo "A temperatura em Farenheit de $farenheit F, em Celsius é de " . number_format($celsius,2) . "C." . PHP_EOL;