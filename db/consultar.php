<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<div class="titulo">Consultando Dados</div>

<?php
require_once "conexao.php";

$sql = "SELECT id, nome, nascimento, email FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0) {
  while($row = $resultado->fetch_assoc()) {
    $registros[] = $row;
  }
} elseif($conexao->error) {
  echo "Erro: " . $conexao->error;
}

$conexao->close();

?>

<table class="table table-hover table-striped table-bordered">
  <thead>
    <th>ID</th>
    <th>Nome</th>
    <th>Nascimento</th>
    <th>Email</th>
  </thead>
  <tbody>
   <?php foreach($registros as $registro): ?>
    <tr>
      <td><?= $registro['id'] ?></td>
      <td><?= $registro['nome'] ?></td>
      <td>
        <?= 
          date('d/m/Y', strtotime($registro['nascimento']))
        ?>
      </td>
      <td><?= $registro['email'] ?></td>
    <?php endforeach ?>
  </tbody>
</table>