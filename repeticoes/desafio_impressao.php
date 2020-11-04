<div class="titulo">Desafio Impressão</div>

<!--
    Enunciado:
    - Imprima apenas os valores do array que contém indice par
    - Resolver com for e foreach
    - Valores esperados: AAA, CCC, EEE
    -->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "FFF",
];

for($i = 0; $i < count($array); $i++) {
    if($i % 2 !== 0) continue;
    echo "{$array[$i]}<br>";
}

foreach($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor<br>";
}