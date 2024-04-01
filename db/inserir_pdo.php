<div class="titulo">Inserir dados com PDO</div>

<?php 
require_once "conexao.php";

$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
VALUES (
  'Matheus',
  'matheus@gmail.com',
  '1998-05-06',
  'http://matheus.com.br',
  0,
  3000
)";

$conexao = novaConexao();

// print_r(get_class_methods($conexao));

if($conexao->connect($sql)) {
  echo "Novo cadastro com id $id";
} else {
  echo "Erro: " . $conexao->error;
}

