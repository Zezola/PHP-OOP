<?php 
//Podemos sobre-escrever metodos que foram herdados

class Fruit {
    public $nome; 
    public $cor; 

    public function __construct($nome, $cor) {
        $this->nome = $nome; 
        $this->cor = $cor; 
    }

    public function apresentar () {
        echo "Isso é uma/um {$this->nome} e sua cor é {$this->cor}"; 
    }
}

class Morango extends Fruit {
    public $peso; 

    public function __construct($nome, $cor, $peso) {
        $this->nome = $nome; 
        $this->cor = $cor; 
        $this->peso = $peso; 
    }

    public function apresentar () {
        echo "A fruta é um/uma {$this->nome}, de cor {$this->cor} e peso {$this->peso}";
    }
}

$morango = new Morango("morango", "vermelho", "0.05g");
$morango->apresentar(); 

// A funçao construtora e a funçao apresentar esta presente em ambos as classes
// Mas foi reescrita na classe Morango. 
// Para reescrever um metodo, temos que fazer um metodo com o mesmo nome 
// na classe filha

?>