<!DOCTYPE html>
<html>
<body>

<?php 
    class Fruit {
        //props
        public $name; 
        public $color; 

        //methods
        function get_name($name) {
            $this->name = $name; 
        }
        function set_name() {
            return $this->name; 
        }
    }

    $apple = new Fruit(); 
    $banana = new Fruit(); 
    $apple->get_name('Apple');
    $banana->get_name('Jorge'); 

    echo $apple->set_name(); 
    echo "<br>";
    echo $banana->set_name();
?>
 
</body>
</html>
