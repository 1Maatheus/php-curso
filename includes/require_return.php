<div class="titulo">Require Return</div>

<?php
$valorRetornado = require('return_usado.php');
echo $valorRetornado . '<br>';
echo $variavelRetornada . '<br>';

echo __DIR__ . '<br>';

$valorRetornado2 = require(__DIR__ . '/return_nao_usado.php');
echo $valorRetornado2 . '<br>';
echo $variavelDeclarada . '!<br>';