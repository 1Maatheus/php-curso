<div class="titulo">Desafio Palíndromo</div>

<?php
function palindromo($palavra) {
  return $palavra === strrev($palavra) ? 'A palavra é um palíndromo' : 'A palavra não é um palíndromo';
}
echo palindromo('arara') . '<br>';
echo "<br>";
echo "<hr>";

function palindromo2($palavra) {
  $ultimoIndice = strlen($palavra) - 1;
  for($i = 0; $i <= $ultimoIndice; $i++) {
    if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
      return 'A palavra não é um palíndromo!';
    };
  }
  return 'A palavra é um palíndromo!';
}

echo palindromo2('arara') . '<br>';