<?php

#Faça um script que peça o tamanho de um arquivo para download (em MB) e a velocidade de um link de Internet (em Mbps), calcule e informe o tempo aproximado de download do arquivo usando este link (em minutos).

$tamanhoArquivo = 600;
$velocidadeLink = 10;

$tempoDeDownload = ($tamanhoArquivo / $velocidadeLink) / 60;

echo "O tempo para fazer o download solicitado é de $tempoDeDownload minutos.";