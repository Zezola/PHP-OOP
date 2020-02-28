<?php 
// Propriedades estaticas podem ser chamadas diretamente sem instanciar a classe

class ClassName {
    public static $staticProp = "Myprop";
}

echo ClassName::$staticProp;

// Pra acessar uma propriedade estatica, usamos o nome da classe e ::, seguido do nome da prop

class Quadrado {
    public static $lado = 4; 
}

echo Quadrado::$lado;

?>