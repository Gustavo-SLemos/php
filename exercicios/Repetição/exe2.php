<?php

#Faça um programa que leia um nome de usuário e a sua senha e não aceite a senha igual ao nome do usuário, mostrando uma mensagem de erro e voltando a pedir as informações.

$nomeUsuario = "Gustavo";
$senha = 12345678;

while (true) {
    $digiteUsuario = "Gustavo";
    $digiteSenha = 12345678;

    if ($digiteUsuario != $nomeUsuario || $digiteSenha != $senha) {
        echo "Nome de usuário ou senha incorreto, tente novamente." . PHP_EOL;
        break;
    } else {
        echo "Usuário logado com sucesso." . PHP_EOL;
        break;
    }
}