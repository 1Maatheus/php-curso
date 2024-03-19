<?php
session_start();

if($_COOKIE['usuario']) {
  $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
  header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/exercicios.css">
    <title>Exercício PHP</title>
  </head>
  <body class="exercicio">
    <header class="header">
      <h1>Curso PHP</h1>
      <h2>Visualização do Exercício</h2>
    </header>
    
    <nav class="nav">
    <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
      <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
      <a href="index.php" class="vermelho">Voltar</a>
      <a href="logout.php" class="azul">Sair</a>
    </nav>

    <main class="main">
      <div class="conteudo">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
      </div>
    </main>
    <footer class="footer">
      MATHEUS DEV &copy <?= date('Y'); ?>
    </footer>
  </body>
</html>
