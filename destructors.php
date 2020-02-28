<!DOCTYPE html>
<html>
<body> 

<?php 
class Carro {
    //props
    public $modelo; 
    public $ano; 

    //methods
    function __construct($ano, $modelo) {
        $this->ano = $ano; 
        $this->modelo = $modelo; 
    }

    function __destruct() {
        echo "O modelo é {$this->modelo} <br>";
        echo "O ano é {$this->ano}";
    }
}

$honda = new Carro("civic", "2012");


?>

</body> 
</html> 