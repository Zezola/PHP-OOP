<?php 

//Quando declaramos um metodo ou propriedade com a palavra reservada static
//Eles nao precisam ser instanciados com a classe ao serem utilizados. 
//Uma propriedade declarada com static, nao pode ser acessada instanciando a classe
//Apesar de um metodo poder. 

class ClassName {
    public static function metodoEstatico() {
        echo "Sou um metodo estatico!";
    }
}

ClassName::metodoEstatico();

//Uma classe pode ter metodos estaticos e nao-estaticos. 
//Um metodo estatico pode ser acessado atraves de outro metodo da mesma classe
//Utilizando a palavra-reservada "self" e ::

class Garrafa {
    public static function encher () {
        echo "Glub Glub";
    }

    public function __construct () {
        self::encher();
    }
}

new Garrafa();

//Metodos estaticos podem ser chamados utilizando outros metodos em outras classes
//Mas pra isso, precisamos utilizar o modificador de acesso 'public' ao criamos ele

class Saudacao {
    public static function ola(){
        echo "Ola!";
    }
}

class Chegando {
    public function mensagem () {
        Saudacao::ola();
    }
}

$pessoa = new Chegando; 
$pessoa->mensagem();

?>