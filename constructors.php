<!DOCTYPE html> 
<html>
<body>

<?php 
    class Fruit {
        public $name;
        public $color; 

        function __construct($name) {
            $this->name = $name; 
        }
        
        function get_name () {
            return $this->name; 
        }
    }

    class Pessoa {
        //Declara as propriedades normalmente
        public $nome;
        public $idade; 
        public $sexo;
        public $cpf; 

        //O constructor inicializa as propriedades automaticamente
        function __construct($nome, $idade, $sexo, $cpf) {
            $this->nome = $nome; 
            $this->idade = $idade; 
            $this->sexo = $sexo; 
            $this->cpf = $cpf; 
        }

        function set_nome () {
            return $this->nome;
        }

        function set_idade () {
            return $this->idade; 
        }
    }

    $apple = new Fruit("Apple");
    echo $apple->get_name();
    echo "<br>";

    $pedro = new Pessoa("Pedro", "23", "M", "123123123123"); 
    echo $pedro->set_nome(); 


?>


</body>
</html>