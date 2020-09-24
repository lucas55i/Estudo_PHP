<?php

//Arrays Númericos

$carros = array("BMW", "VELOSTER", "HILUX", "CELTA", "PALIO");
$carros [] = "Fuscas";
$carros[10] = "Camaro";//Especifica onde o elemento vai ser inserido
print_r($carros); // Para leitura de array usas-se print_r

echo $carros[0]; //Leitura pelo indice
echo "<hr>";

$motos = array();
$motos[] = "yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);
echo "<hr>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";


//Count

echo count($carros); //Exibe a quantidade de elementos nesse array
echo "<hr>";
$totalClientes = count($clientes); //Pode ser atribuido a variaveis tbm
echo $totalClientes;
echo "<hr>";



//Foreach
foreach($carros as $valor){ // ele atribui cada elemento a variavel valor
    echo $valor. "<br>";
}
echo "<hr>";

foreach($motos as $valor){ // ele atribui cada elemento a variavel valor
    echo $valor. "<br>";
}
echo "<hr>";


//Arrays associativos

$pessoa = array("nome"=> "Lucas", "idade"=>20, "altura"=>1.80);
$pessoa["cidade"] = "Itabuna";
print_r($pessoa);
echo "<hr>";


foreach($pessoa as $indice => $valor){ //atribui o indice juntos dos valores 
    echo $indice. ": ".$valor."<br>";
}

echo "<hr>";

// Arryas multidimensionais
$times = array("cariocas"=> array("campeao"=>"vasco", "vice-campeao"=>"flamengo", "terceiro lugar"=>"botafogo"),
                "paulistas"=> array("campeao"=>"santos", "vice-campeao"=>"são paulo", "terceiro lugar"=>"palmeiras"),
                "baianos"=> array("campeao"=>"bahia"),
                "europeus"=> array("campeao"=>"Real Madrid", "vice-campeao"=>"Barcelona", "terceiro lugar"=>"Liverpoll", "rebaixado"=>"Porto")
            );


foreach($times["cariocas"] as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<br>";

foreach($times["paulistas"] as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<br>";

foreach($times["baianos"] as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<br>";

foreach($times["europeus"] as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}
echo "<hr>";


