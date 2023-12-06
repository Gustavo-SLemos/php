<?php

# um array de arrays (associativo)
$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    12345478911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    12845628910 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes[17487333875] = [
    'titular' => 'Gustavo',
    'saldo' => 100000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'], ' CPF ', $cpf . PHP_EOL;
}