<div class="titulo">Desafio IntDiv</div>

<?php
include 'desafio.php';
use function \Aritmetica\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch(\Aritmetica\NaoInteiroException $e) {
    echo "Não foi possível calcular: {$e->getMessage()}<br>";
}

try {
    echo intdiv(8, 0) . '<br>';
} catch(\DivisionByZeroError $e) {
    echo "Não foi possível calcular: {$e->getMessage()}<br>";
} catch(\Aritmetica\NaoInteiroException $e) {
    echo "Não foi possível calcular: {$e->getMessage()}<br>";
}

try {
    echo intdiv(8, 2) . '<br>';
} catch(\Aritmetica\NaoInteiroException $e) {
    echo "Não foi possível calcular: {$e->getMessage()}<br>";
}

echo "Fim!";