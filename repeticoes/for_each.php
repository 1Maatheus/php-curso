<div class="titulo">Foreach</div>

<?php
$array = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

foreach($array as $valor) {
    echo "$valor <br>";
}
echo "<hr>";
echo "<br>";

foreach($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}
echo "<hr>";
echo "<br>";

$matrix = [
    ["a", "b", "c"],
    ["d", "e", "f"]
];

foreach($matrix as $linha) {
    foreach($linha as $letras) {
        echo "$letras ";
    }
    echo "<br>";
}

echo "<hr>";
echo "<br>";

$numeros = [1, 2, 3, 4, 5];
foreach($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}