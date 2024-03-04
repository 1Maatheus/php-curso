<div class="titulo">Arrays Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ]
];

print_r($dados);
echo '<br>';
echo $dados[0]['idade'];
echo '<br>';
echo $dados[1]['idade'];
echo '<br>';
echo $dados[0]['nome'];
echo '<br>';
echo $dados[1]['nome'];
echo '<br>';
echo $dados[0]['naturalidade'];
echo '<br>';
echo $dados[1]['naturalidade'];

$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "Chaves";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);
