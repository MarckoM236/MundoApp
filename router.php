<?php
    
    //redireccionamientos dinamicos

    include_once('Controllers/'.$controller.'Controller.php');
    
    //nombre dinamico de la clase para instanciar.
    $objController=ucfirst($controller)."Controller";

    //Instancia de la clase
    $controller= new $objController();

    //metodo dinamico.
    $controller->$action();

?>