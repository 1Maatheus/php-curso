<div class="titulo">Datas 01</div>

<?php
echo time() . '<br>';
echo date('D, d \d\e M \d\e Y') . '<br>';
setLocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
// echo strftime('%A, %d de %B de %Y', time()) . '<br>'; 
// echo strftime('%A, %d de %B de %Y', time()) . '<br>';
echo date('d/m/Y H:i A', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
// echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+1 week');
// echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
// echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';

