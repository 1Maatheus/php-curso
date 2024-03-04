<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="post">
  <div>
    <label for="t1">Trabalho 1 (Terça-feira): </label>
     <select name="t1" id="t1">
      <option value="1">Executado</option>
      <option value="0">Não Executado</option>
     </select>
  </div>
  <div>
    <label for="t2">Trabalho 2 (Quinta-feira): </label>
     <select name="t2" id="t2">
      <option value="1">Executado</option>
      <option value="0">Não Executado</option>
     </select>
  </div>

  <button>Executar</button>
</form>

<style>
  button, select {
    font-size: 1.8rem;
  }
</style>

<?php
$t1 = $_POST['t1'] === '1';
$t2 = !!$_POST['t2'];
$tv = '';
$trabalho1 = $t1 ? 'Executado' : 'Não executado';
$trabalho2 = $t2 ? 'Executado' : 'Não executado';

if ($t1 && $t2) {
  $tv = 'TV 50"';
} elseif ($t1 xor $t2) {
  $tv = 'TV 32"';
}

$tv = $tv . ($t1 || $t2 ? ' Vamos comprar sorvete!' : ' Estamos saudáveis!');

echo "<p>Trabalho 1: $trabalho1</p>";
echo "<p>Trabalho 2: $trabalho2</p>";
echo "<p>Resultado: $tv</p>";

