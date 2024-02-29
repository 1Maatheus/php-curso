<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
echo '<br>';

echo isset($soma);
echo '<br>';

unset($soma);
echo '<br>';
var_dump($soma);

echo '<br>';

$variavel = 10;
echo $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

