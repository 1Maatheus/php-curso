<div class="titulo">Argumentos de Retorno</div>

<?php
function obterMensagem() {
  return 'Seja bem vindo(a)!';
}

obterMensagem();
$mensagem = obterMensagem();
echo $mensagem;
echo '<br>';
echo obterMensagem();
echo '<br>';
var_dump(obterMensagem());

echo "<br>";
echo "<hr>";

function obterMensagemComNome($nome) {
  return "Bem vindo, {$nome}!";
}
echo obterMensagemComNome('Matheus');
echo "<br>";
echo "<hr>";

function soma($a, $b) {
  return $a + $b;
}
echo soma(1998, 2024);
echo "<br>";
echo "<hr>";

function trocaValor($a, $novoValor) {
  $a = $novoValor;
  return $a;
}
$variavel = 1;
echo trocaValor($variavel, 3);

echo "<br>";
echo "<hr>";

function trocaValorDeVerdade(&$a, $novoValor) {
  $a = $novoValor;
  return $a;
}
echo trocaValorDeVerdade($variavel, 5000);
echo "<br>";
echo "<hr>";