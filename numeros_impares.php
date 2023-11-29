<?php
// Imprima todos os números impares de 0 a 100

for ($numero = 0; $numero <= 100; $numero++) {
    if ($numero %2 != 0) {
        echo $numero . PHP_EOL;
    }
}