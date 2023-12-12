<?php

#Faça um programa que peça uma nota, entre zero e dez. Mostre uma mensagem caso o valor seja inválido e continue pedindo até que o usuário informe um valor válido.

#Digite uma nota entre zero e dez.

while (true) {
    $nota = 10;

    if ($nota < 0 || $nota > 10) {
        echo "Nota inválida, digite novamente.";
        break;
        
    } else {
        echo "Nota $nota armazenada com sucesso.";
        break;
    }
}