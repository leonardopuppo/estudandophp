<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    public function __construct($novoNome, $idade = 18) {
        echo 'Construtor Invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    public function __destruct() {
        echo "E morreu! <br>";
    }

    public function apresentar() {
        return "{$this->nome}, {$this->idade} anos <br>";
    }
}

$apresentar = new Pessoa('Ronaldo', 22);
echo $apresentar->apresentar();

$apresentarB = new Pessoa('Mario', 89);
echo $apresentarB->apresentar();
unset($apresentarB); // Chamando Destrutor com unset

$apresentarC = new Pessoa('Maria da Silva', 33);
echo $apresentarC->apresentar();
$apresentarC = null; // Chamando destrutor com null