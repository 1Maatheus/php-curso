<div class="titulo">Tipos</div>

<?php

function somar1($a, $b) {
  echo "<span>Somando $a + $b = </span>";
  return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(1.6, 2.3) . '<br>';
echo "<br>";
echo "<hr>";

function somar2(int $a, int $b) {
  echo "<span>Somando $a + $b = </span>";
  return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(1.6, 2.3) . '<br>';
echo somar2('1', 2) . '<br>';
echo "<br>";
echo "<hr>";

function somar3($a, $b): int {
  echo "<span>Somando $a + $b = </span>";
  return $a + $b;
}

echo somar3(1, 2) . '<br>';
echo somar3(1.6, 2.3) . '<br>';
echo somar3('1', 2) . '<br>';
