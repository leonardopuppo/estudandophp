<div class="titulo">Operadores Logicos</div>

<?php
echo "<p><strong>V ou F</strong></p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p><strong>Tabela Verdade 'AND' (E)</strong></p><hr>";
var_dump(true && true); // verdadeiro
var_dump(true && false); // falso
var_dump(false && true); // falso
var_dump(false && false); // falso

echo "<p><strong>Tabela Verdade 'OR' (OU)</strong></p><hr>";
var_dump(true)


?>

<style>
    p {
        margin-bottom: 0px;    
    }

    hr {
        margin-top: 0px;
    }
</style>