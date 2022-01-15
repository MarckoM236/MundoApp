<?php
include_once('companyController.php');
include_once('../Models/companyModel.php');
include_once('../Core/db.php');
include_once('../Core/baseModel.php');


        if(isset($_GET['controller']) && isset($_GET['action'])) {
            if($_GET['controller']=='company'){
                
                $object = new CompanyController();
                switch ($_GET['action']) {   
                    case 'insert':
                        $re=$object->insert();
                        //print_r($re);
                       echo json_encode($re);
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