<?php 
// Constantes nao podem ser mudadas depois de declaradas
// Sao uteis caso voce queira declarar algo constante dentro de uma classe 
// Declaramos ela dentro da classe com a palavra reservada 'const'

class Pessoa {
    const saudacao = "Ola!";
}

// Para acessar a constante, usamos o nome da classe seguido de :: 

echo Pessoa::saudacao; 

// Ou podemos acessar de dentro da classe, usando 'self' seguido de :: seguido do nome da const

class Cachorro {
    const latido = "au au"; 

    public function latir() {
        echo self::latido; 
    }
}

$toto = new Cachorro(); 
$toto->latir();

?>

