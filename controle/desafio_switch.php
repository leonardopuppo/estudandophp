<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_FAHRENHEIT_CELSIUS = 1.8;
$parametro = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $parametro * FATOR_KM_MILHA;
        $mensagem = "$parametro Km = $distancia Milhas";
    break;
    case 'milha-km':
        $distancia = $parametro / FATOR_KM_MILHA;
        $mensagem = "$parametro Milhas = $distancia Km";
    break;
    case 'metro-km':
        $distancia = $parametro / FATOR_METRO_KM;
        $mensagem = "$parametro Metros = $distancia Km";
    break;
    case 'km-metro':
        $distancia = $parametro * FATOR_METRO_KM;
        $mensagem = "$parametro Km = $distancia Metros";
    break;
    case 'fahrenheit-celsius':
        $conversao = ($parametro - 32) / FATOR_FAHRENHEIT_CELSIUS;
        $mensagem = "{$parametro}° Fahrenheit = {$conversao}° Celsius";
    break;
    case 'celsius-fahrenheit':
        $conversao = $parametro * FATOR_FAHRENHEIT_CELSIUS + 32;
        $mensagem = "{$parametro}° Celsius = {$conversao}° Fahrenheit";
    break;
    default:
        $mensagem = "Nenhum valor calculado!";
}

echo "<p>$mensagem</p>";