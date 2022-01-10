
<?php

if(isset($_GET['controller']) && isset($_GET['action'])) {
    if($_GET['controller']=='company'){
        include_once('companyController.php');
        $object = new CompanyController();
        switch ($_GET['action']) {
            case 'search':
                $object->getAll();
                break;
            case 'searchById':
                $object->getById();
                break;    
            case 'insert':
                $object->insert();
                //print_r( $object->insert());
                break;   
            case 'update':
                $object->update();
                break;     
            case 'delete':
                $object->delete();
                break;
            default:
                # code...
                break;
        }
    }
    #next

   
    
    
    
}
?>