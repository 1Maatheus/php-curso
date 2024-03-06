<div class="titulo">Desafio Impressão</div>

<?php
$array = [
  "AAA",
  "BBB",
  "CCC",
  "DDD",
  "EEE",
  "FFF",
];

foreach($array as $indice => $valor) {
  if($indice % 2 === 0) {
    echo "$valor <br>";
  }
}

echo "<hr>";
echo "<br>";

for($i = 0; $i < count($array); $i++) {
  if($i % 2 === 0) {
    echo "{$array[$i]} <br>";
  }
}