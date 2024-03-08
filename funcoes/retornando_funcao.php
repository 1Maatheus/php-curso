<div class="titulo">Retornando Função</div>

<?php 

function soma($a) {
  return function($b) use ($a){
    return $a + $b;
  };
};

echo soma(13)(3) . '<br>';

$doisMais = soma(2);
echo $doisMais(10) . '<br>';
echo $doisMais(18) . '<br>';