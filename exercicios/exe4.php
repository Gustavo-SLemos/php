<?php

#Faça um script que peça 3 notas de um aluno e mostra sua média.

$nota1 = 7.3;
$nota2 = 9.2;
$nota3 = 10;

$media = ($nota1 + $nota2 + $nota3)/ 3;

echo "A média das notas do aluno é: " . number_format($media, 2) . PHP_EOL;