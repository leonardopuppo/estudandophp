<div class="titulo">Array Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];
// FRUTAS[0] = 'banana'; # erro
// FRUTAS[] = 'banana'; # erro
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];