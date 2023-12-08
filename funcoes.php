<?php

function sacar($conta, $valorASacar) {
    if($valorASacar > $conta['saldo']) {
        exibeMensagem(mensagem: "Você não tem saldo suficiente para o saque.");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}