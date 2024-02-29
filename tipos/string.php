<div class="titulo">String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// Concatenação
echo "Nós também" . ' somos';
echo '<br>';
echo "Também aceito", " vírgulas";
echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" " . "\\";
echo '<br>';
print("<br> Também existe a função print");
print "<br> Também existe a função print";
echo '<br>';

// Algumas funções
echo strtoupper('maximizado');
echo '<br>';
echo strtolower('MINIMIZADO');
echo '<br>';
echo ucfirst('só a primeira letra');
echo '<br>';
echo ucwords('todas as palavras');
echo '<br>';
echo strlen('Quantas letras?');
echo '<br>';
echo mb_strlen('Eu também', 'utf-8');
echo '<br>';
echo substr('Só uma parte mesmo', 7, 6);
echo '<br>';
echo str_replace('isso', 'aquilo', 'Trocar isso isso');
echo '<br>';
?>