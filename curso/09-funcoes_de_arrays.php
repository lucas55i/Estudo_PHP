<?php
$nomes = array("primo"=>"Lucas", "vizinho"=>"felipe", "cunhado"=>"amon");
echo is_array($nomes);
echo "<hr>";


 //Verifica se o valor existe em alguma posição
if(in_array("Lucas", $nomes)):
    echo "Existe no array";
else:
    echo "Não existe";
endif;
echo "<hr>";


//Devolve os indices como posição
$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";


//Retorna um novoarray com os valores do array passado como parametro
$values = array_values($nomes);
print_r($nomes);
echo "<hr>";


//Agrega o conteúdo dos dois arrays
$carros = array("camaro", "uno", "gol");
$motos = array("pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";


//Exclui a útima posição do array
print_r($carros);
echo "<hr>";

echo array_pop($carros); //Se colocar o echo ele mostra qual elemento foi exluido
print_r($carros);
echo "<hr>";


//Exclui a primeira posição do array
echo array_shift($carros); //Se colocar o echo ele mostra qual elemento foi exluido
print_r($carros);
echo "<hr>";


//Adiciona um ou mais elemento no INICÍO do array
$frutas = array("Uva", "Laranja");
print_r($frutas);
echo "<hr>";
array_unshift($frutas, "Mamão", "pera", "morango");
print_r($frutas);

//Adiciona um ou mais elemento no FINAL do array
print_r($frutas);
echo "<hr>";
array_push($frutas, "Melancia", "Jabuticaba");
print_r($frutas);
echo "<hr>";


//Mescla os dois arrays
$keys = array("Campeão", "Vice", "Terceiros");
$times = array("Vasco", "Flamengo", "Botafogo");
$result = array_combine($keys, $times);
print_r($result);
echo "<hr>";


//Calcula a soma dos elementos de um array
$soma = array(5,6,10,8);
echo array_sum($soma);
echo "<hr>";


//Transforma uma string em array
$data = "30/02/2018";
$novaData = explode('/', $data);// Primeiro parametro é o divisor e o segundo é a variavel do array
echo $string;
print_r($novaData);
echo "<hr>";

$frase = "Lucas programa demais";
$array = explode(" ", $frase);// Primeiro parametro é o divisor e o segundo é a variavel do array
echo $string;
print_r($array);
echo "<hr>";

//Transforma um array em uma string
$pessoas = array("Fernando", "Pedro", "Jamal");
$string = implode(", ", $pessoas); // Primeiro parametro é o divisor e o segundo é a variavel do array
echo $string;




