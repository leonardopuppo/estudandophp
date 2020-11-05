<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens() {
    echo "Olá! ";
    echo 'Até a próxima! <br>';
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>"; // Dentro da função a variável tem um escopo próprio
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>"; // Não muda a variavel

function trocavalorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}
echo '<hr>';
echo "Antes: $variavel <br>";
trocavalorDeVerdade();
echo "Depois: $variavel <br>";