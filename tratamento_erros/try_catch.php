<div class="titulo">Try/Catch</div>

<?php
try {
    echo intdiv(7, 0) . '<br>';
} catch (Error $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
}

try {
  throw new Exception('Um erro muito estranho aconteceu');
  echo intdiv(7, 0) . '<br>';
} catch(DivisionByZeroError $e) {
  echo 'Divisão por zero<br>';
} catch(Throwable $e) {
  echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
  echo 'Sempre executado<br>';
}

echo 'Execução continua...<br>';