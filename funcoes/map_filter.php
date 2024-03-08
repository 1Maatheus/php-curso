<div class="titulo">Map e Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];
foreach($notas as $nota) {
  $notasFinais1[] = round($nota);
}
print_r($notasFinais1);

echo '<br>';
echo '<hr>';

// $notasFinais2 = array_map(round, $notas);
// print_r($notasFinais2);

echo '<br>';

$apenasAprovados1 = [];
foreach($notas as $nota) {
  if($nota >= 7) {
    $apenasAprovados1[] = $nota;
  }
}
print_r($apenasAprovados1);
echo '<br>';
echo '<hr>';

function aprovados($notas) {
  return $notas >= 7;
}

echo '<br>';
// $apenasAprovados2 = array_filter($notas, aprovados);
print_r($apenasAprovados2);