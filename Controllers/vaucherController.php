<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/liquidacModel.php');
    @include_once('Models/destinationModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/acomodacModel.php');
    @include_once('Models/tipoAlimModel.php');
    @include_once('Models/liquDetaModel.php');
    @include_once('Models/inclusioModel.php');

    class VaucherController{

        public function home(){
            //print_r($_POST);
            try {
                if (isset($_POST['showVaucher'])){
                    //print_r($_POST);
                    $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","","");
                    $objLiquidac->setCodeLiqu($_POST['txbCodeLiquidac']);
                    $liquidac=$objLiquidac->show();   

                    $objDestination= new DestinationModel("","");

                    $objHotel= new HotelModel("","","","","","","","");

                    $objAcomodac= new AcomodacModel("","");
                    
                    $objTipoAlim= new TipoAlimModel("","");

                    $objDetailLiquidac= new LiquDetaModel("","","","","","","","","","","","","","","","","","","","","");

                    $objInclude= new InclusioModel("","");
                    
                    //consultar registros
                    foreach($liquidac as $dataLiqu) {

                        $codeHotel=$dataLiqu->getCodeHotel();
                        $objHotel->setCode($codeHotel);
                        $hotel=$objHotel->show();
                        foreach($hotel as $dataHot) {
                            $nameHotel=$dataHot->getName();
                        }
                        $codeAcomodac=$dataLiqu->getCodeAcomodac();
                        
                        $codeDestination=$dataLiqu->getCodeDestination();
                        $objDestination->setCode($codeDestination);
                        $destination=$objDestination->show();
                        foreach($destination as $dataDest) {
                            $nameDestination=$dataDest->getName();
                        }
                        $codeTipoAlim=$dataLiqu->getCodeCodeAlim();
                        $objTipoAlim->setCode($codeTipoAlim);
                        $tipoAlim=$objTipoAlim->show();
                        foreach($tipoAlim as $dataAlim) {
                            $nameTipoAlim=$dataAlim->getName();
                        }
                        $codeDetail=$dataLiqu->getCodeLiqu();
                        $objDetailLiquidac->setCodeLiqu($codeDetail);
                        $detail=$objDetailLiquidac->show();
                        foreach($detail as $dataDetail) {
                            $date_arrival=$dataDetail->getHorArrFlightr();
                            $date_departure=$dataDetail->getHorExFlight();
                            $id_traveler=$dataDetail->getIdTraveler();
                            $name_traveler=$dataDetail->getNameTraveler();
                            $lastName_traveler=$dataDetail->getLastNameTraveler();
                            $birthday_traveler=$dataDetail->getDatBirTraveler();
                            $code_include=$dataDetail->getInclusio();
                            $objInclude->setCode($code_include);
                            $include=$objInclude->show();
                            foreach($include as $dataInclude) {
                                $nameInclude=$dataInclude->getName();
                            }
                            $code_notInclude=$dataDetail->getNotInclusio();
                            $objInclude->setCode($code_notInclude);
                            $notInclude=$objInclude->show();
                            foreach($notInclude as $dataNotInclude) {
                                $nameNotInclude=$dataNotInclude->getName();
                            }

                            $arr_detail[]=array("id_traveler"=>$id_traveler,
                            "name_traveler"=>$name_traveler,
                            "lastName_traveler"=>$lastName_traveler,
                            "birthday_traveler"=>$birthday_traveler,
                            "include"=>$nameInclude,
                            "notInclude"=>$nameNotInclude);
                            }

                        $arr_liquidac[] =array("date_arrival" => $date_arrival,
                        "date_departure" => $date_departure,
                        "nameHotel" => $nameHotel,
                        "nameAcomodac" => $codeAcomodac,
                        "nameDestination" => $nameDestination,
                        "nameTipoAlim" => $nameTipoAlim);    

                        
                    }
                   //rint_r($_SERVER["DOCUMENT_ROOT"]);
                }
                    
                }
                
            
            catch (Exception $e) {
                //throw $th;
            }
            //include_once('?controller=vaucher&action=home');
            include_once('C:\xampp\htdocs\MundoApp\Views\vaucher\home.php');

        }
        

    }

?>