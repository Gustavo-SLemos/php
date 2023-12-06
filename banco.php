<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '123.454.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '128.456.289-10' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.454.789-11']['saldo'] -= 500;
if(500 > $contasCorrentes['128.456.289-10']['saldo']) {
    echo "Você não tem saldo suficiente para o saque." . PHP_EOL;
} else {
    $contasCorrentes['128.456.289-10']['saldo'] -= 500;
}


foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'], ' CPF ', $cpf, ' saldo ', $conta['saldo'] . PHP_EOL;
}