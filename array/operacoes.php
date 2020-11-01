<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "jose",
    "idade" => 28
];

$dados2 = [
    "nome" => "jose", // conflito, fica o dado a esquerda da operação
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // verificar se é um array com essa função
echo '<br>' . count($dadosCompletos); // verificar quantos elementos tem no array

echo '<br>';
$indice = array_rand($dadosCompletos); // forma randomica
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
unset($dadosCompletos["nome"]); // exclui
echo '<br>';
print_r($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); // função para juntar os dois arrays
echo '<br>';
print_r($decimais);

sort($decimais); // função para ordenar (alterando os arrays)
echo '<br>';
print_r($decimais);