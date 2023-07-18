<?php

// Nesse desafio vou exibir a tabuada de um determinado número

$numeroDaTabuada = 2;

for ($i = 1; $i <= 10; $i++) {
   $resultado = $i * $numeroDaTabuada; 
   echo "$numeroDaTabuada X $i = " . $resultado . PHP_EOL; 
}