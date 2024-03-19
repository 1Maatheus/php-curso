<?php 
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

if($_POST['email']) {
  $usuarios = [
    [
      "nome" => "Matheus",
      "email" => "matheus@gmail.com",
      "senha" => "123456"
    ],
    [
      "nome" => "Nayara",
      "email" => "nayara@gmail.com",
      "senha" => "1234567"
    ],
  ];

  foreach($usuarios as $usuario) {
    $emailValido = $email === $usuario['email'];  
    $senhaValida = $password === $usuario['senha'];

    if($emailValido && $senhaValida) {
      $_SESSION['erros'] = null;
      $_SESSION['usuario'] = $usuario['nome'];
      $exp = time() + 60 * 60 * 24 * 30;
      setcookie('usuario', $usuario['nome'], $exp);
      header('Location: index.php');
    }
  }

  if(!$_SESSION['usuario']) {
    $_SESSION['erros'] = ['Usuário ou Senha inválidos!'];
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>Exercício PHP</title>
  </head>
  <body class="login">
    <header class="header">
      <h1>Curso PHP</h1>
      <h2>Seja Bem-vindo(a)!</h2>
    </header>

    <main class="main">
      <div class="conteudo">
        <h3>Identifique-se</h3>
        <?php if($_SESSION['erros']): ?>
          <div class="erros">
            <?php foreach($_SESSION['erros'] as $erro): ?>
              <p><?= $erro ?></p>
            <?php endforeach ?>
          </div>
        <?php endif ?>

        <form action="#" method="post">
          <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
          </div>
          <div>
            <label for="password">Senha</label>
            <input type="password" id="password" name="password">
          </div>
          <button>Entrar</button>
        </form>
      </div>
    </main>

    <footer class="footer">
      MATHEUS DEV &copy <?= date('Y'); ?>
    </footer>
  </body>
</html>
