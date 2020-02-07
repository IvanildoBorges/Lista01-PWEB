<?php

$nome = $_GET["nome"];
$sexo = $_GET["sex"];
$idade = $_GET["idade"];

if(($sexo == "F" && $idade < 18) || ($sexo == "M" && $idade < 18)){
    echo "$nome.<br> Acesso Proibido!";
}else{
    echo "$nome. <br> Acesso Permitido!";
}