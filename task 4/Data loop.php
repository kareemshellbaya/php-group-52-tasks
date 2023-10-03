<?php

    require_once("Data.php");


    
    foreach($countryList as $key => $state){

        echo"$key => $state <br>";

    }

    echo"<hr>";
    
    foreach($stateList['CA'] as $key => $state){
        
        echo"$key => $state <br>";
        
    }

    echo"<hr>";
    
    foreach($stateList['US'] as $key => $state){
        
        echo"$key => $state <br>";
        
    }
    echo"<hr>";
?>