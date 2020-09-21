<?php
// Constantes NÃO PODEM SER ALTERADAS
define('NOME', "Lucas de Jesus");
define("IDADE", 25);
define("ALTURA", 1.90);
define("CASADO", true);

echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.' e tenho '.ALTURA.'';
echo "<hr>";

define("TIMES", ['vasco', 'flamengo', 'santos']);
echo TIMES[2];
echo "<br>";
echo "<hr>";

function exibeNome(){
    echo NOME;

}

exibeNome();
echo "<hr>";
