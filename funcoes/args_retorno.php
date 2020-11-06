<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

obterMensagem(); // Precisa de um echo pra exibir no browser
$m = obterMensagem();
echo $m; 
echo '<br>', obterMensagem(); // Agora sim vai exibir no browser
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}";
}

echo '<br>', obterMensagemComNome('Wagner');
echo '<br>', obterMensagemComNome('Tiago');

function soma($a, $b) {
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>', soma(38, 42);
echo '<br>', soma($x, $y);

function trocaValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3); // Não troca o valor pois fez uma cópia de um valor
echo '<br>', $variavel;

function trocaValorDeVerdade(&$a, $trocaValor) {
    $a = $trocaValor;
}

trocaValorDeVerdade($variavel, 5000); // Vai trocar o valor pois recebeu um endereço de memória com &$a
echo '<br>', $variavel; 