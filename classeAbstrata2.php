<?php 
// Mais um exemplo de classe abstrata 

abstract class ClassePai {
    abstract protected function getPrefixo($nome); //Declaramos a classe e o mtd abstrato
}

class ClasseFilho extends ClassePai {
    public function getPrefixo($nome) {
        if ( $nome == "Joao") {
            $prefixo = "Sr.";
        } elseif ( $nome == "Maria") {
            $prefixo = "Sra."; 
        } else {
            $prefixo = ""; 
        }

        return "{$prefixo} {$nome}";
    }
}

$maria = new ClasseFilho("Maria"); 
echo $maria->getPrefixo("Maria"); // "Sra. Maria"
?>