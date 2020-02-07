<?php

$num1 = $_GET["campo1"];
$num2 = $_GET["campo2"];

$soma = $num1 + $num2;

echo "$num1+$num2=$soma <br>";

if($soma > 20){
    $soma +=8;
    print("Soma maior que 20, valor final somado com 8 = $soma\n");
}
elseif($soma <= 20){
    $soma -=5;
    echo "Soma menor que 20, valor final subtraido em 5 = $soma";
}