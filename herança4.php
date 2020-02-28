<?php 
//Podemos prevenir herança entre classes ou sobre-escrita de metodos usando a palavra
// 'final'. Como no exemplo abaixo: 

final class Fruit {
    // .... // 
}

class Morango extends Fruit {
    // codigo 
}// Aqui vai dar "Morango may not inherit from final class Fruit" justamente
// Pq usamos a keyword 'final' na classe Fruit 

// Podemos fazer isso em metodos tambem 

class Carro {
    final public function acelerar () {
        //
    }
}

class Civic extends Carro {

    public function acelerar() {
        // Nao podemos sobre escrever a funçao acelerar, porque usamos final quando ela foi declarada
        
    }
}

?>