<div class="titulo">Datas 02</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();
print_r($agora) . '<br>';
echo '<br>';

echo $agora->format($formatoData1) . '<br>';
setLocale(LC_TIME, 'pt_BR');
// echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';

$amanha = new DateTime('+1 day');
echo date($formatoData2, $amanha -> getTimestamp()) . '<br>';

$tz = new DateTimeZone('America/Sao_Paulo');
// $agora = new DateTime(null, $tz);
echo $agora->format($formatoDataHora) . '<br>';
