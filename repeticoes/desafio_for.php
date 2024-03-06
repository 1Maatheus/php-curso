<div class="titulo">Desafio FOR</div>

<?php

$impressao = "";

for($impressao = "#"; $impressao !== "######"; $impressao .= "#") {
    echo "$impressao <br>";
}

echo "<hr>";
echo "<br>";

$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= "#";
    echo "$impressao <br>";
}

echo "<hr>";
echo "<br>";
