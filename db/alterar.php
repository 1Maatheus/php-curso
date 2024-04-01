<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<div class="titulo">Alterar Registro</div>

<h2>
  Cadastro
</h2>

<?php
require_once "conexao.php";
$conexao = novaConexao();

if($_GET['codigo']) {
  $sql = "SELECT * FROM cadastro WHERE id = ?";
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("i", $_GET['codigo']);
  
  if($stmt->execute()) {
    $resultado = $stmt->get_result();
    if($resultado->num_rows > 0) {
      $dados = $resultado->fetch_assoc();
      if($dados['nascimento']) {
        $nascimento = new DateTime($dados['nascimento']);
        $dados['nascimento'] = $nascimento->format('d/m/Y');
      }
      if($dados['salario']) {
        $dados['salario'] = str_replace(".", ",", $dados['salario']);
      }
    }
  }
  
}

if(count($_POST) > 0) {
  $dados  = $_POST;
  $erros = [];

  //Validação do nome
  if(trim($dados['nome']) === "") {
    $erros[] = "Nome é obrigatório";
  }
  //Validação do nascimento
  if(isset($dados['nascimento'])) {
    $nascimento = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
    if(!$nascimento) {
      $erros[] = "Data de nascimento deve estar no padrão dd/mm/aaaa";
    }
  }
  //Validação do email
  if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
    $erros[] = "Email inválido";
  }
  //Validando url
  if(!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
    $erros[] = "Site inválido";
  }
  //Validação dos filhos
  $filhosConfig = [
    "options" => ["min_range" => 0, "max_range" => 20]
  ];

  if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0) {
    $erros[] = "Quantidade de filhos inválida";
  }

  //Validação salário
  $salarioConfig = [
    "options" => ["decimal" => ","]
  ];
  if(!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
    $erros[] = "Salário inválido";
  }

  if(!count($erros)) {
    $sql = "UPDATE cadastro
    SET nome = ?, 
    nascimento = ?,
    email = ?,
    site = ?,
    filhos = ?,
    salario = ? 
    WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $params = [
      $dados['nome'],
      $nascimento ? $nascimento->format('Y-m-d') : null,
      $dados['email'],
      $dados['site'],
      $dados['filhos'],
      $dados['salario']
    ];
    $stmt->bind_param("ssssidi", ...$params);
    if($stmt->execute()) {
      unset($dados);
    }
  }
}
?>

<?php foreach($erros as $erro): ?>
  <!-- <div class="alert alert-danger" role="alert">
    <?= $erro ?>
  </div> -->
<?php endforeach ?>

<form action="/exercicio.php" method="get">
  <input type="hidden" name="dir" value="db">
  <input type="hidden" name="file" value="alterar">
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="number" class="form-control" name="codigo" value="<?= $_GET['codigo']?>" placeholder="Informe o código para consulta">
    </div>
    <div class="col-sm-2">
      <button class="btn btn-success mb-4">
        Consultar
      </button>
    </div>
  </div>
</form>

<form action="#" method="post">
  <input type="hidden" name="id" value="<?= $dados['id'] ?>">
  <div class="form-row">
    <div class="form-group col-md-9 "> 
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o seu nome" value="<?= $dados['nome']?>">
      <div class="invalid-feedback">
        <?= $erros['nome'] ?>
      </div>
    </div>
    <div class="form-group col-md-3"> 
      <label for="nascimento">Nascimento</label>
      <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder="Insira o seu nascimento"
      value="<?= $dados['nascimento']?>">
      <div class="invalid-feedback">
        <?= $erros['nascimento']?>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6"> 
      <label for="email">E-mail</label>
      <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="exemplo@exemplo.com" value="<?= $dados['email']?>">
    </div>
    <div class="form-group col-md-6"> 
      <label for="site">Site</label>
      <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $dados['site']?>">
      <div class="invalid-feedback">
        <?= $erros['site']?>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6"> 
      <label for="filhos">Qtd. Filhos</label>
      <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" id="filhos" name="filhos" placeholder="Qtd. Filhos" value="<?= $dados['filhos']?>">
      <div class="invalid-feedback">
        <?= $erros['filhos']?>
      </div>
    </div>
    <div class="form-group col-md-6"> 
      <label for="salario">Salário</label>
      <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '' ?>" id="salario" name="salario" placeholder="Salário" value="<?= $dados['salario']?>">
      <div class="invalid-feedback">
        <?= $erros['salario']?>
      </div>
    </div>
  </div>

  <button class="btn btn-primary btn-lg mt-2">Enviar</button>
</form>