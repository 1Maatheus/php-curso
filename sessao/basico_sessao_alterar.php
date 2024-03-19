<?php
session_start();
print_r($_SESSION);
?>

<p>
  <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
  <b>Email: </b> <?= $_SESSION['email'] ?><br>
</p>


<?php
$_SESSION['email'] = 'matheusoliveira@gmail.com';
?>

<p>
  <a href="/sessao/basico_sessao.php">Voltar</a>
</p>

<p>
  <a href="/sessao/limpar.php">Limpar Sessão</a>
</p>