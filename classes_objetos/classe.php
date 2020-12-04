<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    public $nome = 'Anonimo';
    public $idade = 18;

    public function Apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Silva';
$c1->idade = 27.5;
echo $c1->Apresentar(), '<br>';

$c2 = new Cliente;
$c2->nome = 'Mário Costa';
$c2->idade = 33;
echo $c2->Apresentar();