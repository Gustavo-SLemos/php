<?php

#Faça um script que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês, sabendo-se que são descontados 11% para o Imposto de Renda, 8% para o INSS e 5% para o sindicato, faça um script que nos dê:
#salário bruto.
#quanto pagou ao INSS.
#quanto pagou ao sindicato.
#o salário líquido.
#calcule os descontos e o salário líquido, conforme a tabela abaixo:
#+ Salário Bruto : R$
#- IR (11%) : R$
#- INSS (8%) : R$
#- Sindicato ( 5%) : R$
#= Salário Liquido : R$
#Obs.: Salário Bruto - Descontos = Salário Líquido.

$ganhoPorHora = 80;
$horasTrabalhadas = 220;
$totalBruto = $ganhoPorHora * $horasTrabalhadas;
$ir = $totalBruto * 0.11;
$inss = $totalBruto * 0.08;
$sindicato = $totalBruto * 0.05;
$descontos = $ir + $inss + $sindicato;
$salarioLiquido = $totalBruto - $descontos;

echo "+ Salário Bruto: R$" . number_format($totalBruto, 2, ',', '.') . PHP_EOL;
echo "- IR (11%): R$" . number_format($ir, 2, ',', '.') . PHP_EOL;
echo "- INSS (8%): R$" . number_format($inss, 2, ',', '.') . PHP_EOL;
echo "- Sindicato (5%): R$" . number_format($sindicato, 2, ',', '.') . PHP_EOL;
echo "= Salário Liquido: R$" . number_format($salarioLiquido, 2, ',', '.') . PHP_EOL;