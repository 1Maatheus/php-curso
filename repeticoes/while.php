<div class="titulo">While/Do While</div>

<?php
echo "Condição While: <br>";

const VALOR_LIMITE = 5;
$contador = 0;

while($contador < VALOR_LIMITE) {
  echo "While: $contador <br>";
  $contador++;
}

echo "<hr>";
echo "<br>";

echo "Condição Do-While: <br>";
$contador = 0;
do {
  echo "Do-While: $contador <br>";
  $contador++;
} while($contador < VALOR_LIMITE);

echo "<hr>";
echo "<br>";

while(true) {
  echo "while(true) $contador <br>";
  $contador++;
  if($contador >= VALOR_LIMITE) break;
}