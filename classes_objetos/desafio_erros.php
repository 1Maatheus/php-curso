<div class="titulo">Desafio Erros</div>

<?php 
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro) {
        echo "Estou funcionando";
    }
    public function metodo1() {
        echo "Estou funcionando";
    }
    public function metodo2($parametro) {
        echo "Estou funcionando";
    }
}

$exemplo = new Classe('teste');
echo '<br>';
$exemplo->metodo3();
echo '<br>';
$exemplo->metodo1();
echo '<br>';
$exemplo->metodo2('teste');
?>
