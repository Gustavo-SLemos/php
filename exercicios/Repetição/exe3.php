<?php

#Faça um programa que leia e valide as seguintes informações:
#Nome: maior que 3 caracteres;
#Idade: entre 0 e 150;
#Salário: maior que zero;
#Sexo: 'f' ou 'm';
#Estado Civil: 's', 'c', 'v', 'd';

$nome = "José";
$idade = 22;
$salario = 3200;
$sexo = strtolower("M");
$estadoCivil = "s";

while (true) {
    if (strlen($nome) >= 3 && $idade >= 0 && $idade <= 150 && $salario > 0 && ($sexo == "m" || $sexo == "f") && ($estadoCivil == "s" || $estadoCivil == "c" || $estadoCivil == "v" || $estadoCivil == "d")) {
        echo "Tudo ok com os dados, registro realizado." . PHP_EOL;
        break;
    } else {
        echo "Cadastro inválido, tente novamente." . PHP_EOL;
        break;
    }
}