<?php

//valores por defecto
$controller="page";
$action="home";

    //capturar valores por url si existen
    if(isset($_GET['controller']) && isset($_GET['action'])){
        
        //si no estan vacios
        if($_GET['controller']!="" && $_GET['action']!=""){

            $controller=$_GET['controller'];
            $action=$_GET['action'];

        }

    }

    include_once('Views/template.php');
?>