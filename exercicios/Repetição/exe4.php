<?php

#Supondo que a população de um país A seja da ordem de 80000 habitantes com uma taxa anual de crescimento de 3% e que a população de B seja 200000 habitantes com uma taxa de crescimento de 1.5%. Faça um programa que calcule e escreva o número de anos necessários para que a população do país A ultrapasse ou iguale a população do país B, mantidas as taxas de crescimento.

$populacaoA = 80000;
$taxaCrescimentoA = 0.03;
$populacaoB = 200000;
$taxaCrescimentoB = 0.015;
$anos = 0;

while ($populacaoA < $populacaoB) {
    $populacaoA += $populacaoA * $taxaCrescimentoA;
    $populacaoB += $populacaoB * $taxaCrescimentoB;
    $anos++;
}

echo "Serão necessários $anos anos para que a população do país A se iguale ou ultrapasse a população do país B.";