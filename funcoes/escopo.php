<div class="titulo">Escopo</div>

<?php
function imprimirMensagem() {
    echo "Hello, world!";
    echo "<br>";
    echo "Até a próxima! <br>";
    echo "<hr>";
}
imprimirMensagem();

$variavel = 1;
function trocarValor() {
  $variavel = 2;
  echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarValor();
echo "Depois: $variavel <br>";
echo "<hr>";

function trocaValorDeVerdade() {
  global $variavel;
  $variavel = 3;
  echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

