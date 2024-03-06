<div class="titulo">Breank and Continue</div>

<?php
$cont = 10;
for(;;) {
    $cont++;
    if($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
    if($cont >= 30) {
        break;
    }
}

echo "<hr>";
echo "<br>";

for(;;) {
    $cont++;
    if($cont > 100) {
        break;
    }
    if($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
}
echo "<hr>";
echo "<br>";

foreach(array(1, 2, 3, 4, 5, 6) as $valor) {
    if($valor === 5) break;
    if($valor % 2 === 0) continue;
    echo "$valor <br>";
}