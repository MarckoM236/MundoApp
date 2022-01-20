<?php
/* It receives the Ajax requests and calls the corresponding controller, according to the received parameters. */

include_once('companyController.php');
include_once('estareseController.php');
include_once('agencyController.php');
include_once('adviserController.php');
include_once('adviserController.php');
include_once('userController.php');
include_once('sellerController.php');
include_once('tipoLiQuController.php');
include_once('planController.php');
include_once('destinationController.php');
include_once('hotelController.php');
include_once('tipoalimController.php');
include_once('acomodacController.php');
include_once('conceptoController.php');
include_once('../Models/companyModel.php');
include_once('../Models/estareseModel.php');
include_once('../Models/agencyModel.php');
include_once('../Models/adviserModel.php');
include_once('../Models/adviserModel.php');
include_once('../Models/userModel.php');
include_once('../Models/sellerModel.php');
include_once('../Models/tipoLiQuModel.php');
include_once('../Models/planModel.php');
include_once('../Models/destinationModel.php');
include_once('../Models/hotelModel.php');
include_once('../Models/tipoAlimModel.php');
include_once('../Models/acomodacModel.php');
include_once('../Models/conceptoModel.php');
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
                        print_r($re);
                        //echo json_encode($re);
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

            if($_GET['controller']=='adviser'){
                $object = new AdviserController();
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

            if($_GET['controller']=='user'){
                $object = new UserController();
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


            if($_GET['controller']=='seller'){
                $object = new SellerController();
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

            if($_GET['controller']=='tipoLiQu'){
                $object = new TipoLiQuController();
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

            if($_GET['controller']=='plan'){
                $object = new PlanController();
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

            if($_GET['controller']=='destination'){
                $object = new DestinationController();
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

            if($_GET['controller']=='hotel'){
                $object = new HotelController();
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

            if($_GET['controller']=='tipoAlim'){
                $object = new TipoAlimController();
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

            if($_GET['controller']=='acomodac'){
                $object = new AcomodacController();
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

            if($_GET['controller']=='concepto'){
                $object = new ConceptoController();
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