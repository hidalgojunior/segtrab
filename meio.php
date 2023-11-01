<?php

    if(isset($_GET['p'])){
        $pagina = $_GET['p'];


        switch ($pagina){
            case 1: include 'apresentacao.php';
                break;
            default: include 'apresentacao.php';
                break;
        }
    }