<div class="titulo">Desafio PI</div>

<?php
echo "<p>Desafio PI:</p>";
echo "<br>";

$pi = 3.14;
// echo pi();

if($pi - pi() <= 0.01){
  echo "Praticamente iguais!";
} else {
  echo "Valor errado!";
}

