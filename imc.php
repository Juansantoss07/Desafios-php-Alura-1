<?php

// Nesse desafio vou realizar um IMC


$nome = "Juan";
$altura = 1.75;
$peso = 70;
$alturaAoQuadrado = $altura **2;
$resultado = $peso / $alturaAoQuadrado;

if($resultado < 18.5){
    echo "$nome, sua altura é de $altura cm e seu peso é $peso Kgs" . PHP_EOL . "Portanto seu IMC é $resultado e esse resultado é considerado abaixo do normal";
}else if ($resultado >= 18.5 &&  $resultado <= 24.9) {
    echo "$nome, sua altura é de $altura cm e seu peso é $peso Kgs" . PHP_EOL . "Portanto seu IMC é $resultado e esse resultado é considerado normal";
} else if ($resultado > 24.9 && $resultado <= 29.9) {
    echo "$nome, sua altura é de $altura cm e seu peso é $peso Kgs" . PHP_EOL . "Portanto seu IMC é $resultado e esse resultado é considerado sobrepeso";
} else {
    echo "$nome, sua altura é de $altura cm e seu peso é $peso Kgs" . PHP_EOL . "Portanto seu IMC é $resultado e esse resultado é considerado obesidade";
}



