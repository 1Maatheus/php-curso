<div class="titulo">Ler Arquivo</div>

<?php 
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, filesize('teste.txt'));
fclose($arquivo);
echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)) {
    echo fgetc($arquivo);
}
echo "<hr>";
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "Adicionado durante a leitura\n");
fclose($arquivo);

echo "Fim";