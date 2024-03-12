<div class="titulo">Membros Estáticos</div>

<?php

class A {
  public $naoStatic = 'Variável de instância';
  public static $static = 'Variável de classe (estática)';
  public function mostrarA() {
    echo "Class A) Não estática: {$this->naoStatic}<br>";
    echo "Class A) Estática: " . self::$static . "<br>";
  }
  public static function mostrarStaticA() {
    echo "Class A) Estática: " . self::$static . "<br>";
    // echo "Class A) Não estática: {$this->naoStatic}<br>";
  }

}

// $obj = new A();
// $obj->mostrarA();
// $obj->mostrarStaticA();
A::mostrarStaticA();
echo A::$static, '<br>';
A::$static = 'Alterado membro de classe!';
echo A::$static, '<br>';
echo $obj->naoStatic, '<br>';
echo A::$naoStatic, '<br>'; // Não é possível acessar membros de instância diretamente
