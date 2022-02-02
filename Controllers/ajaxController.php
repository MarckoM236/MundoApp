<?php
/* It receives the Ajax requests and calls the corresponding controller, according to the received parameters. */
include_once('../Core/includes.php');
include_once('../Core/db.php');
include_once('../Core/baseModel.php');


        if(isset($_GET['controller']) && isset($_GET['action'])) {
            if($_GET['controller']=='company'){
                
                //EMPRESA
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

            //ESTADO DE LA RESERVA
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

            //AGENCIA
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
            
            //ASESOR
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
            
            //USUARIO
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

            //VENDEDOR
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
            
            //TIPO DE LIQUIDACION
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
            
            //PLAN
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
            
            //DESTINO
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
            
            //HOTEL
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
             
            //TIPO ALIMENTACION
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
            
            //ACOMODACION
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
            
            //CONCEPTO
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
            
            //AEROLINEA
            if($_GET['controller']=='aeroline'){
                $object = new AerolineController();
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
            
            //INCLUSION RECEPTIVOS
            if($_GET['controller']=='inclusio'){
                $object = new InclusioController();
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
            
            //SISTEMA
            if($_GET['controller']=='system'){
                $object = new SystemController();
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
            
            //OPERADOR
            if($_GET['controller']=='operator'){
                $object = new OperatorController();
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

            //BANCO
            if($_GET['controller']=='bank'){
                $object = new BankController();
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
            
            //VUELO
            if($_GET['controller']=='flight'){
                $object = new FlightController();
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
             
            //TERCERO
            if($_GET['controller']=='thirdParty'){
                $object = new ThirdPartyController();
                switch ($_GET['action']) {   
                    case 'insert':
                        $re=$object->insert();
                        //print_r($_POST);
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
            #----
           
        }
    



?>