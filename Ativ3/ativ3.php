<?php

    $num = isset($_GET["txtdia"]) ? $_GET["txtdia"] : 0;

    switch ($num) {
        case 2:
        case 3:
        case 4: 
        case 5:
        case 6:
            echo "Dia de Trabalhar";
            break;
        case 1:
        case 7:
            echo "Final de Semana";
            break;
        default:
            echo "Valor invalido!";
    }

?>