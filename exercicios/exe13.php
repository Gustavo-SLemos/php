<?php

#João Papo-de-Pescador, homem de bem, comprou um microcomputador para controlar o rendimento diário de seu trabalho. Toda vez que ele traz um peso de peixes maior que o estabelecido pelo regulamento de pesca do estado de São Paulo (50 quilos) deve pagar uma multa de R$ 4,00 por quilo excedente. João precisa que você faça um script que leia a variável peso (peso de peixes) e calcule o excesso. Gravar na variável excesso a quantidade de quilos além do limite e na variável multa o valor da multa que João deverá pagar. Imprima os dados do script com as mensagens adequadas.

$pesoPeixes = 60;
# Ou $pesoPeixes = readline("Digite a quantidade de quilos: ");
$excesso = $pesoPeixes - 50;
$multa = 4 * $excesso;

if ($pesoPeixes > 50) {
    echo "Você passou do limite permitido em $excesso Kg e deve pagar a multa de R$$multa";
} else {
    echo "O peso de $pesoPeixes está dentro do permitido e não será cobrada multa.";
}