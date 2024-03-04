<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
  <input type="text" name="param">
  <select name="conversao" id="conversao">
    <option value="km-milha">Km > Milha</option>
    <option value="milha-km">Milha > Km</option>
    <option value="metro-km">Metro > Km</option>
    <option value="km-metro">Km > Metro</option>
  </select>

  <button>Calcular</button>
</form>

<style>
  form > * {
    font-size: 1.2rem;
    }
</style>

<?php
$_POST['param'];
$_POST['conversao'];

switch($_POST['conversao']) {
  case 'km-milha':
    $param = $_POST['param'] / 1.609;
   echo $mensagem = "{$_POST['param']} Km(s) = $param Milha(s)";
    break;
  case 'milha-km':
    $param = $_POST['param'] * 1.609;
    echo $mensagem = "{$_POST['param']} Milha(s) = $param Km(s)";
    break;
  case 'metro-km':
    $param = $_POST['param'] / 1000;
    echo $mensagem = "{$_POST['param']} Metro(s) = $param Km(s)";
    break;
  case 'km-metro':
    $param = $_POST['param'] * 1000;
    echo $mensagem = "{$_POST['param']} Km(s) = $param Metro(s)";
    break;
  default:
  echo $mensagem = "Nenhum valor calculado";
}