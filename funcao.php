<?php

function sacar($conta, $valorASacar) {
    if($valorASacar > $conta['saldo']) {
        exibeMensagem(mensagem: "Você não tem saldo suficiente para o saque.");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}


function exibeMensagem ($mensagem) {
    echo $mensagem . PHP_EOL;
}


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

$contasCorrentes['128.456.289-10'] = sacar($contasCorrentes['128.456.289-10'], valorASacar: 500);
$contasCorrentes['123.454.789-11'] = sacar($contasCorrentes['123.454.789-11'], valorASacar: 500);


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem( mensagem: $cpf . " " . $conta['saldo']);
}