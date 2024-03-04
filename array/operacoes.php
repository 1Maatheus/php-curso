<div class="titulo">Operações Array</div>

<?php

$dados1 = [
  "nome" => "Jose",
  "idade" => 28,
  "empresa" => "Google"
];

$dados2 = [
  "naturalidade" => "Fortaleza",
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>';
echo is_array($dadosCompletos) . '<br>';
echo count($dadosCompletos) . '<br>';

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompleto['idade']}";

echo '<br>';

unset($dadosCompletos);
print_r($dadosCompletos);

echo '<br>';

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
print_r($decimais);

echo '<br>';

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);

