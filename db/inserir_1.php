<div class="titulo">Inserir Registro 01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
VALUES (
  'Matheus',
  '1998-05-06',
  'matheus@gmail.com',
  'https://matheus.sites.com.br',
  0,
  3000
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
  echo "Sucesso :)";
} else {
  echo "Erro: " . $conexao->error;
}

$conexao->close();