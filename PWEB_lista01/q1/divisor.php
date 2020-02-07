<?php
    $divi = $_GET["campo"];
    
    if($divi%10==0){
        echo "<h1>É divisivel por 10";
    }
    elseif($divi%5==0){
        echo "<h1>É divisivel por 5";
    }
    elseif($divi%2==0){
        echo "<h1>É divisivel por 2";
    }else{
        echo "Não é divisível por 10, 5 ou 2.";
    }