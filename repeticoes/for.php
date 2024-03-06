<div class="titulo">Repetição FOR</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "Contador = $cont <br>";
}

echo "<hr>";
echo "<br>";

for(; $cont <= 10; $cont++) {
    echo "Contador = $cont <br>";
}

echo "<hr>";
echo "<br>";

for(; $cont <= 15;) {
    echo "Contador = $cont <br>";
    $cont++;
}

echo "<hr>";
echo "<br>";

$array = [
    "Domingo",
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];

print_r($array);
echo "<hr>";
echo "<br>";

for($i = 0; $i < count($array); $i++) {
    echo "$array[$i] <br>";
}

echo "<hr>";
echo "<br>";

$matrix = [
    ["a", "b", "c", "d", "e"],
    ["f", "g", "h", "i", "j"],
    ["k", "l", "m", "n", "o"],
    ["p", "q", "r", "s", "t"],
    ["u", "v", "x", "w", "y"],
    ["z"]
];

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
}