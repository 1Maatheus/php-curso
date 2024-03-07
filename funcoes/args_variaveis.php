<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b) {
  return $a + $b;
}

echo soma(14, 15) . '<br>';

function somaCompleta(...$numeros) {
  $soma = 0;
  foreach($numeros as $n) {
    $soma += $n;
  }
  return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5) . '<br>';

$array = [6, 7, 8];
echo somaCompleta(...$array) . '<br>';

function membros($titular, ...$dependentes) {
  echo "Titular: $titular <br>";
  if($dependentes) {
    foreach($dependentes as $d) {
      echo "Dependente: $d <br>";
    }
  }
}

membros('Ana Silva', 'Pedro', 'Rafaela', 'Amanda');
echo "<br>";
membros('Roberto');