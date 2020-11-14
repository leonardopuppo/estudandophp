<div class="titulo">Recursividade</div>

<?php
function soma($num) {
    $soma = 0;
    for(; $num >= 1; $num--) {
        $soma += $num;
    }
    return $soma;
}

echo soma(5) . '<br>';

function somaRecursiva($numero) {
    // Condição de Parada
    if($numero === 1) {
        return 1;
    }
    return $numero + somaRecursiva($numero - 1);
}
echo somaRecursiva(5) . '<br>';