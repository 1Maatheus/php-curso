<div class="titulo">Classe</div>

<?php
class Cliente {
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        echo "Nome: {$this->nome} <br> Idade: {$this->idade} <br>";
    }
}

$c1 = new Cliente();
$c1 -> nome = "Matheus Oliveira Monteiro";
$c1 -> idade = 25;
$c1 -> apresentar();

echo "<br>";
echo "<hr>";

$c2 = new Cliente();
$c2 -> nome = "Nayara Sanches Dall'ara";
$c2 -> idade = 25;
$c2 -> apresentar();