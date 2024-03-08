<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa {
  public $nome;
  public $idade;

  function __construct($novoNome, $idade = 18) {
    echo 'Construtor invocado! <br>';
    $this->nome = $novoNome;
    $this->idade = $idade;
  }

  function __destruct() {
    echo 'E morreu! <br>';
  }

  public function apresentar() {
    return "{$this->nome}, {$this->idade} anos<br>";
  }
}
 
$pessoa = new Pessoa('Matheus', 25);
$pessoa2 = new Pessoa('Nayara', 25);
echo $pessoa->apresentar();
echo $pessoa2->apresentar();

unset($pessoa);