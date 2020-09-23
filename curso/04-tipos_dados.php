<?php 

// Dados escalares

// String
$nome = "123 lucas $%%&* 888";
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else: 
    echo "Não é uma string";
endif;
echo "<hr>";
echo "<hr>";


//Int
$idade = 27;
var_dump($idade);
if(is_int($idade)):
    echo "É um interio";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";

//Float
$altura = 1.77;

var_dump($altura);
if(is_float($altura)):
    echo "É um Float";
else:
    echo "Não é um Float";
endif;
echo "<hr>";

// boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
    echo "É um boleano";
else:
    echo "Não é um boleano";
endif;
echo "<hr>";


/******************** Compostos ***************************/
// array
$carro = array("Gol", "Celta", "Uno", "Camaro", 12, 20.6, true);
var_dump($carro);
if(is_array($carro)):
    echo "É um Array";
else:
    echo "Não é um Array";
endif;
echo "<hr>";

// object
class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Lucas");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um Objeto";
else:
    echo "Não é um Objeto";
endif;
echo "<hr>";


/******************** Especiais  *******************/

//Null

$cidade = null;
var_dump($cidade);






