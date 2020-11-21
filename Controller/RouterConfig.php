<?php

    if($_GET)
    {
        
        require_once($_GET["Controller"] . ".php");

        $Controller = $_GET["Controller"]   ;
        $Funcao     = $_GET["Funcao"]       ; 
        
        $Controller = new $Controller();
        
        $Controller->$Funcao();
    }
    else
    {
        header("Location: ../index.html");
    }
?>