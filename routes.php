<?php
    
    //Controlar los redireccionamientos de paginas.

    include_once('Controllers/pageController.php');

    //Instancia del controlador
    $controller= new PageController();
    //metodo home.
    $controller->home();
?>