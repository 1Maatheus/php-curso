<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado! <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu! <br>';
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos. <br>";
    }

    public function apresentar() {
        echo $this . '<br>';
    }

    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib} <br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor} <br>";
    }

    public function __call($metodo, $params) {
        echo "Tentando executar método inexistente: {$metodo} <br>";
        echo "Com os parâmetros: ";
        print_r($params);
    }

}

$pessoa = new Pessoa('Matheus', 25);
// $pessoa->apresentar();
// echo $pessoa, '<br>';
// $pessoa->nome = 'Matheus Oliveira';
// $pessoa->apresentar();

// $pessoa->nomeCompleto = 'Matheus Oliveira';
// echo $pessoa -> nome;
$pessoa -> exec(1, 'teste', [1, 2, 3]);

$pessoa = null;