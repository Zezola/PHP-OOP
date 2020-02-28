<?php 
//Herança é quando uma classe deriva de outra classe.
// A classe "filha" vai herdar todos os metodos e propriedades publicas e protegidas
// da classe "pai", que é a classe que deu origem a ela. Além disso, ela pode ter 
// seus proprios metodos e classes. Como no exemplo abaixo. 
// Definimos uma relação pai-filho quando usamos a palavra reservada 'extends'
// Que é como se estivessemos falando 'classe A2 extende a classe A1'

class Fruit {
    public $nome; 
    private $cor; 

    public function __construct($nome, $cor) {
        $this->nome = $nome; 
        $this->cor = $cor; 
    }

    public function apresentar() {
        echo "Sou uma {$this->nome} e minha cor é {$this->cor}"; 
    }
}

class Tomate extends Fruit { // classe Tomate extende a classe Fruit
    public function criseExistencial() {
        echo "Se sou uma fruta por que me usam na salada de alface e nao da de frutas?";
    }
}

$tomate = new Tomate('tomate', 'vermelho'); 
$tomate->apresentar();
echo '<br>';
$tomate->criseExistencial();  

?>