<?php 
// No exemplo abaixo, vamos usar traços multiplos 

trait mensagem1{
    public function msg1() {
        echo "Aprendendo OOP em PHP";
    }
}

trait mensagem2{
    public function msg2() {
        echo "OOP ajuda o codigo a ficar mais limpo";
    }
}

class MyObj {
    use mensagem1;
}

class MyObj2 {
    use mensagem2, mensagem1; 
}

$obj = new MyObj(); 
$obj->msg1(); 

$obj2 = new MyObj2(); 
$obj2->msg1(); 
$obj2->msg2();


?>