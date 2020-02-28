<?php 
// Em PHP cada classe filho so pode herdar de UMA classe pai. 
// Mas e quando queremos que uma classe herde multiplos comportamentos? 
// Podemos usar traços, ou traits, pra resolver esse problema. 
// Traços sao usados pra declarar metodos que podem ser usadas em multiplas classes
// Traços podem ter metodos abstratos e metodos comuns,
// que podem ter qualquer modificador de acesso 
// Sao declarados com a palavra reservada trait 

trait NomeDoTraco {
    // codigo 
}

// Pra usar um traço em uma classe usamos a palavra reservada use 

class MinhaClasse {
    use NomeDoTraco;
}

//Exemplo 
trait Mensagem1 {
    public function msg1 () {
        echo "Aprendendo OOP em PHP";
    }
}

class BemVindo {
    use Mensagem1;
}

$obj = new BemVindo(); 
$obj->msg1(); 


?>