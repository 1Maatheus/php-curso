<div class="titulo">Closures & Callables</div>

<?php
$soma1 = function ($a, $b) {
  return $a + $b;
};

function soma2($a, $b) {
  return $a + $b;
}

echo $soma1(1, 2) . '<br>';
echo $soma1(4, 2) . '<br>';

//As duas funções são 'Callables', ou seja, podem ser chamadas.