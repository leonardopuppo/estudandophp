<div class="titulo">Desafio For</div>

<!--
Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
1) Não pode usar incremento $i++
-->
<?php
$array = ['#', '##', '###', '####', '#####'];

for($i = 0; $i < count($array); $i++) {
    echo "$array[$i]<br>";
}

echo '<hr>';
$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';
for(
    $impressao = '#'; 
    $impressao2 !== '######'; 
    $impressao2 .= '#'
) {
    echo "$impressao2 <br>";
}