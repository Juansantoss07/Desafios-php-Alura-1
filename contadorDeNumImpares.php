<?php 

// Nesse desafio vou listar todos os números ímpares até 100 usando laço de repetição.


for ($i = 0; $i <= 100; $i++) {
    if($i % 2 == 0) {
        continue;
    }
    echo "$i" . PHP_EOL;
} 

