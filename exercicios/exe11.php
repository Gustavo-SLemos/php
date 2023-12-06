<?php

#Tendo como dados de entrada a altura de uma pessoa, construa um script que calcule seu peso ideal, usando a seguinte fórmula: (72.7*altura) - 58

$altura = 1.78;
$pesoIdeal = (72.7 * $altura) - 58;

echo "O seu peso ideal baseado na sua altura de $altura é de " .number_format($pesoIdeal, 2) . "kg" . PHP_EOL;