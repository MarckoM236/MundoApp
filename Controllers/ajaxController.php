<?php
/* It receives the Ajax requests and calls the corresponding controller, according to the received parameters. */

include_once('companyController.php');
include_once('estareseController.php');
include_once('agencyController.php');
include_once('../Models/companyModel.php');
include_once('../Models/estareseModel.php');
include_once('../Models/agencyModel.php');
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
                        $re=$object->update();
                        //print_r($re);
                        echo json_encode($re);
                        break;     
                    case 'delete':
                        $re=$object->delete();
                        //print_r($re);
                        echo json_encode($re);
                        break;
                    default:
                        # code...
                        break;
                }
            }
            if($_GET['controller']=='estarese'){
                $object = new EstareseController();
                switch ($_GET['action']) {   
                    case 'insert':
                        $re=$object->insert();
                        //print_r($re);
                       echo json_encode($re);
                        break;   
                    case 'update':
                        $re=$object->update();
                        //print_r($re);
                        echo json_encode($re);
                        break;     
                    case 'delete':
                        $re=$object->delete();
                        //print_r($re);
                        echo json_encode($re);
                        break;
                    default:
                        # code...
                        break;
                }
            }
            if($_GET['controller']=='agency'){
                $object = new AgencyController();
                switch ($_GET['action']) {   
                    case 'insert':
                        $re=$object->insert();
                        //print_r($re);
                       echo json_encode($re);
                        break;   
                    case 'update':
                        $re=$object->update();
                        //print_r($re);
                        echo json_encode($re);
                        break;     
                    case 'delete':
                        $re=$object->delete();
                        //print_r($re);
                        echo json_encode($re);
                        break;
                    default:
                        # code...
                        break;
                }
            }
            #next
           
        }
    



?>