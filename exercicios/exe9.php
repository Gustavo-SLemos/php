<?php

#Faça um script que peça a temperatura em graus Celsius, transforme e mostre em graus Farenheit.

$celcius = 30;
$farenheit = (9/5) * $celcius + 32;

echo "A temperatura em Celcius de $celcius C, em Farenheit é de " . number_format($farenheit,2) . "F." . PHP_EOL;