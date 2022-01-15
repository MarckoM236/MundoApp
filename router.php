<?php

/* It dynamically redirects to the controller, 
according to url parameters obtained in the index, and binds the views with the main template. */
    
    //redireccionamientos dinamicos
    include_once('Controllers/'.$controller.'Controller.php');
    
    //nombre dinamico de la clase para instanciar.
    $objController=ucfirst($controller)."Controller";

    //Instancia de la clase
    $controller= new $objController();

    //llamada metodo dinamico.
    $controller->$action();

?>