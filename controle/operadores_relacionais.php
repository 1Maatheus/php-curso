<div class="titulo">Operadores Relacionais</div>

<?php

echo "<p>Operadores Relacionais:</p>";

var_dump(1 == 1); //True
echo "<br>";
var_dump(1 > 1); //False
echo "<br>";
var_dump(1 >= 1); //True
echo "<br>";
var_dump(1 != 1); //False
echo "<br>";
var_dump(1 <> 1); //False
echo "<br>";
var_dump(1 <= 1); //True
echo "<br>";
var_dump(1 < 1); //False
echo "<br>";

var_dump(111 == '111'); //True
echo "<br>";
var_dump(111 === '111'); //False
echo "<br>";
var_dump(111 != '111'); //False
echo "<br>";
var_dump(111 !== '111'); //True

echo "<hr>";
echo "<br>";

echo "<p>Relacionais no If/Else</p> ";

$idade = 15;
if($idade < 18){
  echo "Menor de idade = $idade anos.";
} else if($idade <= 65) {
  echo "Adulto = $idade anos.";
} else {
  echo "Terceira idade = $idade anos.";
}

echo "<hr>";
echo "<br>";

echo "<p>Spaceship:</p>";

var_dump(500 <=> 3); //1
echo "<br>";
var_dump(50 <=> 50); //0
echo "<br>";
var_dump(5 <=> 50); //-1
?>



