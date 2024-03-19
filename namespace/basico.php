<?php namespace contexto; ?>

<div class="titulo">Exemplo básico</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 456);

echo constante1 . '<br>';
echo constante2 . '<br>';
// echo \contexto\constante3 . '<br>';

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>';
echo soma(1, 9) . '<br>';

function strpos($str, $text) {
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';
