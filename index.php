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
    <title>Curso PHP</title>
  </head>
  <body>
    <header class="header">
      <h1>Curso PHP</h1>
      <h2>Índice dos Exercícios</h2>
    </header>

    <nav class="nav">
      <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
      <a href="logout.php" class="logoutB">Sair</a>
    </nav>

    <main class="main">
      <div class="conteudo">
        <nav class="modulos">

          <div class="modulo laranja">
              <h3>15. Banco de Dados</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=db&file=criar_banco" >Banco de Dados</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=criar_tabela" >Criar Tabela</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=inserir_1" >Inserir Registro</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=consultar" >Consultando Dados PHP</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=excluir_1" >Excluindo Registro 01</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=excluir_2" >Excluindo Registro 02</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=inserir_2" >Inserir Registro 02</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=alterar" >Alterar Registro</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=inserir_pdo" >Inserir dados com PDO</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=consultar_pdo" >Consultar dados com PDO</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=alterar_pdo" >Alterar dados com PDO</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=db&file=excluir_pdo" >Excluir dados com PDO</a>
                </li>
              </ul>
          </div>


          <div class="modulo azul">
              <h3>13. Datas</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=api&file=datas_01" >Datas</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=api&file=datas_02" >Datas 02</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=api&file=escrever_arquivo" >Escrever Arquivo</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=api&file=ler_arquivo" >Ler Arquivo</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=api&file=upload" >Upload</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=api&file=download" >Download</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=api&file=imagens" >Imagens</a>
                </li>
              </ul>
          </div>

          <div class="modulo vermelho">
              <h3>12. Tratamento de erro</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=sessao&file=basico_sessao" >Sessão</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=sessao&file=gerenciando_sessao" >Gerenciando Sessão</a>
                </li>
                </ul>
          </div>

          <div class="modulo verde">
              <h3>11. Tratamento de erro</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=tratamento_erros&file=try_catch" >Tratamento de erros</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=tratamento_erros&file=erros_personalizados" >Erros personalizados</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=tratamento_erros&file=desafio_intdiv" >Desafio de módulo</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=tratamento_erros&file=gerenciador_erro" >Error Handler</a>
                </li>
              </ul>
          </div>

          <div class="modulo laranja-escuro">
              <h3>10. Namespace</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=namespace&file=basico" >Namespace</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=namespace&file=sub_namespaces" >Sub Namespaces</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=namespace&file=use_as" >Use/As</a>
                </li>
              </ul>
          </div>

          <div class="modulo roxo-escuro">
              <h3>9. Includes</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=includes&file=include" >Include</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=includes&file=include_funcao" >Include Função</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=includes&file=include_require" >Include vs Require</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=includes&file=require_return" >Return Require</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=includes&file=include_once" > Include Once</a>
                </li>
              </ul>
          </div>

          <div class="modulo azul-escuro">
              <h3>8. Classes e Objetos</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=classe" >Classe</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=desafio_classe" >Desafio Classe</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=construtor_destrutor" >Construtor e Destrutor</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=heranca" >Herança</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=visibilidade" >Visibilidade</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=static" >Membros Estáticos</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=interface" >Interface</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=abstract" >Classe Abstrata</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=desafio_erros" >Desafio Erros</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=final" >Modificador Final</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=traits_01" >Traits 01</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=traits_02" >Traits 02</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=metodos_magicos" >Métodos Mágicos</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=classes_objetos&file=polimorfismo" >Polimorfismo</a>
                </li>
              </ul>
          </div>


          <div class="modulo vermelho-escuro">
              <h3>7. Array</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=escopo" >Escopo</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=args_retorno" >Argumentos de Retorno</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=desafio_palindromo" >Desafio Palíndromo</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=args_variaveis" >Argumentos Variáveis</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=arg_padrao" >Argumento Padrão</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=tipos" >Tipos</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=anonimas" >Frunções Anônimas</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=closure_callable" >Closure e Callables</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=recursividade" >Recursividade</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=desafio_recursividade" >Desafio Recursividade</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=funcoes&file=map_filter" >Map e Filter</a>
                </li>
              </ul>
          </div>

          <div class="modulo verde-escuro">
              <h3>6. Array</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=repeticoes&file=for" >Repetição FOR</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=repeticoes&file=desafio_for" >Desafio FOR</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=repeticoes&file=for_each" >For Each</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=repeticoes&file=break_continue" >Break and Continue</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=repeticoes&file=break_continue" >Break and Continue</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=repeticoes&file=desafio_impressao" >Desafio Impressão</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=repeticoes&file=while" >While/Do While</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=repeticoes&file=desafio_tabela" >Desafio Tabela</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=repeticoes&file=desafio_requisicao" >Desafio Requisição</a>
                </li>
              </ul>
          </div>

          <div class="modulo laranja">
              <h3>5. Array</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=array&file=basico" >Array</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=array&file=mapa" >Mapa</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=array&file=desafio_index" >Desafio Index</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=array&file=desafio_meses" >Desafio Meses</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=array&file=operacoes" >Operações Array</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=array&file=desafio_sorteio" >Desafio Sorteio</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=array&file=multi" >Arrays Multidimensionais</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=array&file=constantes" >Arrays Constantes</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=array&file=get" >Método GET</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=array&file=post" >Método POST</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=array&file=comparacao" >Comparação de Arrays</a>
                </li>
              </ul>
          </div>

          <div class="modulo roxo">
              <h3>4. Controle</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=controle&file=if_else" >If e Else</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=controle&file=operadores_relacionais" >Operadores Relacionais</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=controle&file=desafio_pi" >Desafio PI</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=controle&file=operadores_logicos" >Operadores Lógicos</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=controle&file=desafio_operadores_logicos" >Desafio Operadores Lógicos</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=controle&file=operador_ternario" >Operador Ternário</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=controle&file=switch" >Switch</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=controle&file=desafio_switch" >Desafio Switch</a>
                </li>
              </ul>
          </div>

          <div class="modulo azul">
              <h3>3. Variáveis</h3>
              <ul>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=basico" >Tipo Inteiro</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=desafio_equacao" >Desafio Equação</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=atribuicoes" >Atribuições</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=interpolacao" >Interpolação</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis" >Variáveis Variáveis</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=valor_referencia" >Valor VS Referência</a>
                </li>
                <li>
                  <a href="exercicio.php?dir=variaveis&file=constantes" >Constantes</a>
                </li>
              </ul>
          </div>

          <div class="modulo vermelho">
            <h3>2. Tipos</h3>
            <ul>
              <li>
                <a href="exercicio.php?dir=tipos&file=int" >Tipo Inteiro</a>
              </li>
              <li>
                <a href="exercicio.php?dir=tipos&file=float" >Tipo Float</a>
              </li>
              <li>
                <a href="exercicio.php?dir=tipos&file=aritmeticas" >Operações Aritméticas</a>
              </li>
              <li>
                <a href="exercicio.php?dir=tipos&file=desafio_precedencia" >Desafio Precedência</a>
              </li>
              <li>
                <a href="exercicio.php?dir=tipos&file=string" >String</a>
              </li>
              <li>
                <a href="exercicio.php?dir=tipos&file=desafio_string" >Desafio String</a>
              </li>
              <li>
                <a href="exercicio.php?dir=tipos&file=boolean" >Tipo Booleano</a>
              </li>
              <li>
                <a href="exercicio.php?dir=tipos&file=conversoes" >Conversões</a>
              </li>
            </ul>
          </div>

          <div class="modulo verde">
            <h3>1. Básico</h3>
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

        </nav>
      </div>
    </main>
    <footer class="footer">
      MATHEUS DEV &copy <?= date('Y'); ?>
    </footer>
  </body>
</html>
