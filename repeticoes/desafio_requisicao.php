<div class="titulo">Desafio Requisição</div>

<form action="#" method="post">
  <div>
    <label for="linhas">Linhas</label>
    <input type="number" value="10" name="linhas" id="linhas">
  </div>
  <div>
    <label for="colunas">Colunas</label>
    <input type="number" value="10" name="colunas" id="colunas">
  </div>
  <button>Gerar</button>
</form>

<?php 

  $linhas = intval($_POST['linhas']);
  $colunas = intval($_POST['colunas']);

  if(!$linhas) $linhas = 10;

  if(!$colunas) $colunas = 10;

  echo "<table>";
  for($i = 1; $i <= $linhas; $i++) {
    if($i % 2 === 0) {
      echo "<tr class='rowColor'>";
    } else {
      echo "<tr>";
    }
    for($j = 1; $j <= $colunas; $j++) {
      echo "<td>". ($i * $j) ."</td>";
    }
    echo "</tr>";
  }
  echo "</table>";

?>

  <style>

  form * {
      font-size: 1.2rem;
  }

  form > div {
      margin-bottom: 1rem;
  }

  table {
    border: 1px solid #444;
    border-collapse: collapse;
    margin: 20px 0px;
  }
  table tr {
    border: 1px solid #444;
  }
  table td {
    padding: 10px 20px;
  }

  .rowColor {
    background-color: #55ec;
  }
</style>