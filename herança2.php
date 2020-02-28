<?php 
// Sabemos que herança vai funcionar com todos os metodos e propriedades que forem publicas
// Mas e como fazemos isso pra propriedades protegidas? 

class Fruit {

    public $nome; 
    public $cor; 

    public function __construct($nome, $cor) {
        $this->nome = $nome; 
        $this->cor = $cor; 
    }

    protected function saudar () {
        echo "Sou um/uma {$this->nome} e minha cor é {$this->cor}"; 
    }
}

class Tomate extends Fruit {
    public function msg() {

        $this->saudar();
    }
}

$tomate = new Tomate("tomate", "vermelho"); 
$tomate->msg(); 

// Aqui, vai funcionar porque temos uma funçao na nossa classe filha 
// que chama a funçao existente na classe pai

?> 