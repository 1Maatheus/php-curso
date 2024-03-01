<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
echo '<br>' . $TAXA_DE_JUROS . '!';
// TAXA_DE_JUROS = 2.5; // não pode ser reatribuída
const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;
echo '<br>';

$valorVariavel = 2.8;
define('NOVISSIMA_TAXA', $valorVariavel);
echo NOVISSIMA_TAXA;
echo '<br>';

echo PHP_VERSION;
echo '<br>';
echo PHP_INT_MAX;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;
echo '<br>';
echo __FUNCTION__;

function exibeNome() {
  echo '<br>' . __FUNCTION__;
}

exibeNome();

echo '<br>';
echo __CLASS__;
echo '<br>';
echo __TRAIT__;
echo '<br>';
echo __METHOD__;
echo '<br>';
echo __NAMESPACE__;
echo '<br>';

