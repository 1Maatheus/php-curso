<div class="titulo">Argumento Padrão</div>

<?php 

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
  return "Bem vindo, $nome $sobrenome! <br>";
}

echo saudacao();
echo "<br>";
echo "<hr>";
echo saudacao('Matheus', 'Oliveira'); 
echo "<br>";
echo "<hr>";

function anotarPedido($comida, $bebida = 'Água') {
  echo "Para comer: $comida <br>";
  echo "Para beber: $bebida <br>";
}

echo anotarPedido('Pizza');
echo "<br>";
echo "<hr>";
echo anotarPedido('Hamburguer', 'Refrigerante');
echo "<br>";
echo "<hr>";

function anotarPedidoCompleto($bebida = 'Água', $comida) {
  echo "Para comer: $comida <br>";
  echo "Para beber: $bebida <br>";
}

echo anotarPedidoCompleto('Refrigerante', 'Pizza');