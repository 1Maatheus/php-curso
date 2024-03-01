<div class="titulo">Operadores Lógicos</div>

<?php 
echo "<p>Negação Lógica: </p>";
echo "<br>";
var_dump(true);
echo "<br>";
var_dump(!true); //Operador Not
echo "<br>";
echo "<br>";

echo "<p>Tabela Verdade do 'AND':</p>";
echo "<br>";
var_dump(true && true);
echo "<br>";
var_dump(true && false);
echo "<br>";
var_dump(false && true);
echo "<br>";
var_dump(false && false);

echo "<br>";
echo "<br>";

echo "<p>Tabela Verdade do 'OR':</p>";
echo "<br>";
var_dump(true || true);
echo "<br>";
var_dump(true || false);
echo "<br>";
var_dump(false || true);
echo "<br>";
var_dump(false || false);

echo "<br>";
echo "<br>";

echo "<p>Tabela Verdade do 'XOR' ou (OU Exclusivo):</p>";
echo "<br>";
var_dump(true xor true);
echo "<br>";
var_dump(true xor false);
echo "<br>";
var_dump(false xor true);
echo "<br>";
var_dump(false xor false);

echo "<br>";
echo "<br>";

echo "<p>Exemplo:</p>";
$idade = 62;
$sexo = 'F';

if($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar";
}elseif($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar";
}else{
    echo "Vai ter que trabalhar mais um pouco...";
}

