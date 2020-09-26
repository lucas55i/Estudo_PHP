<?php

//IF
$numero = 8;

if ($numero == 10) {
    echo "É igual a 10";
}
elseif($numero <= 9){
    echo "É menor ou igual a 9";
}else {
    echo "É diferente de 10";
}

echo "<hr>";

$media = 7;


//Operandor Ternario ? = IF e : = ELSE
echo ($media >= 7 ? "Aprovado" : "Reprovado");
echo "<hr>";

$cor = "roxo";

switch ($cor):

    case "Vermelho":
        echo "Sua cor preferia é";
    break;

    case "Verde":
        echo "Sua cor prefirida é verde";   
    break;

    case "Azul":
        echo "Sua cor preferida é azul";
    break;

    default:
    echo "Sua cor prefirida não é nenhuma";
endswitch;

