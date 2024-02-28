<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Curso PHP</title>
  </head>
  <body>
    <header class="header">
      <h1>Curso PHP</h1>
      <h2>Índice dos Exercícios</h2>
    </header>
    <main class="main">
      <div class="conteudo">
        <nav class="modulos">
          <div class="modulo verde">
            <h3>Básico</h3>
            <ul>
              <li>
                <a href="exercicio.php?dir=basico&file=ola" >Olá, PHP</a>
              </li>
              <li>
                <a href="exercicio.php?dir=basico&file=html" >Integração HTML</a>
              </li>
              <li>
                <a href="exercicio.php?dir=basico&file=css" >Integração CSS</a>
              </li>
              <li>
                <a href="exercicio.php?dir=basico&file=desafio" >Desafio</a>
              </li>
            </ul>
          </div>
          <div class="modulo vermelho">
            <h3>Tipos</h3>
            <ul>
              <li>
                <a href="exercicio.php?dir=tipos&file=int" >Tipo Inteiro</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </main>
    <footer class="footer">
      MATHEUS DEV &copy <?= date('Y'); ?>
    </footer>
  </body>
</html>
