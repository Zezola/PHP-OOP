<?php 
//Classes e metodos abstratos sao quando a classe pai tem um metodo 
//Mas precisa das classes filhas pra preenche-los
//Uma classe abstrata contem pelo menos um metodo abstrato. 
//Um metodo abstrato e um metodo que e declarado mas nao implementado
//Começamos um metodo ou classe abstrata com a palavra reservada 'abstract'

// abstract class ClassePai () {
    // abstract public function metodo(); 
    // abstract public function metodo2($arg1, $arg2); 
    // abstract public function metodo3() : string;
//}

// Quando herdando de uma classe pai abstrata, o metodo da classe filho
// deve ter o mesmo nome e o mesmo tipo e numero de argumentos, assim como o 
// modificador de acesso. Mas a classe filho pode ter argumentos opcionais em adiçao 
// aos herdados 

abstract class Carro {
    public $nome; 
    public function __construct($nome) {
        $this->nome = $nome; 
    }

    abstract public function frase (): string; 
}

class Audi extends Carro {
    public function frase () : string {
        return "Sou um carro alemao chamado $this->nome"; 
    }
}

class Ferrari extends Carro {
    public function frase () : string {
        return "Sou um carro alemao chamado $this->nome"; 
    }
}

$audi = new Audi("Audi"); 
echo $audi->frase();
echo "<br>";

$ferrari = new Ferrari("Ferrari");
echo $ferrari->frase(); 



?>