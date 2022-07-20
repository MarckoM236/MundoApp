<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/liquidacModel.php');
    @include_once('Models/agencyModel.php');
    @include_once('Models/sellerModel.php');
    @include_once('Models/adviserModel.php');
    @include_once('Models/estareseModel.php');
    @include_once('Models/destinationModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/tipoAlimModel.php');
    @include_once('Models/acomodacModel.php');
    @include_once('Models/planModel.php');
    @include_once('Models/flightModel.php');
    @include_once('Models/conceptoModel.php');
    @include_once('Models/inclusioModel.php');
    @include_once('Models/travelerModel.php');
    @include_once('Models/liquDetaModel.php');
    @include_once('Models/systemModel.php');

    class LiquidacController{

        public function home(){
            
            try {
                if (isset($_POST['showLiQu'])){
                    $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","","");
                    $objLiquidac->setCodeLiqu($_POST['txbCode']);
                    $liquidac=$objLiquidac->show();
                    
                }
                else{
                    $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","","");
                    $liquidac=$objLiquidac->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/liquidations/home.php');

        }

        public function showFli(){
            if (isset($_POST['ShowFlight']) & !empty($_POST['txbCodFlightSh'])){
                $objDataFlight= new FlightModel("","","","","");
                $objDataFlight->setNum($_POST['txbCodFlightSh']);
                $dataFlight=$objDataFlight->show();   
                
                   foreach($dataFlight as $dataFli) {
                    $codAerolineaFli=$dataFli->getCodAeroline();   
                    $aerolineaFli=$dataFli->getAeroline();    
                    $routeFli=$dataFli->getRoute();
                    
                    //$arr_flight[] = array("routeFlight" => $routeFli); 
                } 
                //$arr=$arr_flight[0];   
            }
            else{
                $codAerolineaFli="";
                $aerolineaFli="";    
                $routeFli=""; 
            }

                  
            return $arr[]= array("codAer"=>$codAerolineaFli,"aer"=>$aerolineaFli,"rou"=>$routeFli);
        }

        public function showTraveler(){
            if (isset($_POST['ShowTraveler']) & !empty($_POST['txbCodTraveler'])){
                $objTraveler= new TravelerModel("","","","");
                $objTraveler->setId($_POST['txbCodTraveler']);
                $traveler=$objTraveler->show();

                foreach($traveler as $data) {
                    $nameTraveler=$data->getName();    
                    $lastName=$data->getLastName();
                    $bDate=$data->getBirthDate();

                    //format date
                    $dataBD=str_replace("/","-",$bDate);
                    $birthDate = date("Y-m-d", strtotime($dataBD));
                    
                } 
            }
            else{
                $nameTraveler="";    
                $lastName="";
                $birthDate="";
            }

            return $arrTraveler[]= array("name"=>$nameTraveler,"lastName"=>$lastName,"birthDate"=>$birthDate);
        }

        public function showLiquidac(){
            if (isset($_POST['ShowLiquidac']) & !empty($_POST['txbCodeLiquidac'])){
                    $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","","");
                    $objLiquidac->setCodeLiqu($_POST['txbCodeLiquidac']);
                    $liquBank=$objLiquidac->show();

                foreach($liquBank as $dataBank) {
                    $dateLiqu=$dataBank->getFecSis();    
                    $ag=$dataBank->getCodeAgency();
                    $sell=$dataBank->getCodeSeller();
                    $valueLiqu=$dataBank->getValTotEmp();

                    //format date
                    $dateL=str_replace("/","-",$dateLiqu);
                    $dateLiquSys = date("Y-m-d", strtotime($dateL));

                    //find names
                    //Consult agency to complete field.
                    $objAgency= new AgencyModel("","","","","","",""); 
                    $objAgency->setCode($ag);
                    $agency=$objAgency->show();
                    foreach($agency as $dataAgen) {
                        $nameAgency=$dataAgen->getName();
                    }

                    //Consult agency to complete field.
                    $objSeller= new SellerModel("","","",""); 
                    $objSeller->setId($sell);
                    $seller=$objSeller->show();
                    foreach($seller as $dataSeller) {
                        $nameSeller=$dataSeller->getName();
                    }
                    
                } 
            }
            else{
                $dateLiquSys="";    
                $nameAgency="";
                $nameSeller="";
                $valueLiqu="";
            }

            return $arrLiquBank[]= array("date"=>$dateLiquSys,"agency"=>$nameAgency,"seller"=>$nameSeller,"value"=>$valueLiqu);
        }
        

        public function insert(){
            //Consult agency to complete field.
            $objAgency= new AgencyModel("","","","","","",""); 
            $agency=$objAgency->show();

            //Consult agency to complete field.
            $objSeller= new SellerModel("","","",""); 
            $seller=$objSeller->show();

            //Consult adviser to complete field.
            $objAdviser= new AdviserModel("","","","");
            $adviser=$objAdviser->show();

            //Consult esterese to complete field.
            $objEstarese= new EstareseModel("","");
            $estarese=$objEstarese->show();
            
            //Consult destination to complete field.
            $objDestination= new DestinationModel("","");
            $destination=$objDestination->show();

            //Consult hotel to complete field.
            $objHotel= new HotelModel("","","","","","","","");
            $hotel=$objHotel->show();

            //Consult tipoAlim to complete field.
            $objAlim= new TipoAlimModel("","");
            $alim=$objAlim->show();

            //Consult acomodac to complete field.
            $objAcomodac= new AcomodacModel("","");
            $acomodac=$objAcomodac->show();

            //Consult plan to complete field.
            $objPlan= new PlanModel("","");
            $plan=$objPlan->show();

            //Consult plan to complete field.
            $objFlight= new FlightModel("","","","","");
            $flight=$objFlight->show();

             //Consult concepto to complete field.
             $objInclusio= new InclusioModel("","");
             $inclusio=$objInclusio->show();

            //Consult concepto to complete field.
            $objConcepto= new ConceptoModel("","");
            $concepto=$objConcepto->show();

            //Consult concepto to complete field.
            $objSystem= new SystemModel("","","","","");
            $system=$objSystem->show();
            
            $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","","");
            $numLiqu=$objLiquidac->showUltimate();
            
            if (isset($_POST['saveLiquidac'])){
                //Format date
                //print_r($_POST);
                /* $dateSys = date_create($_POST['txbfecSis']);
                $dpSys=date_format($dateSys,"d/m/Y");  */
                
                $datePl50 = date_create($_POST['txbPl50Liqu']);
                $dp50=date_format($datePl50,"d/m/Y");
            
                $datePl100 = date_create($_POST['txbPl100Liqu']);
                $dp100=date_format($datePl100,"d/m/Y");
                //print_r($_POST);
                $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","","");
                
                $objLiquidac->setTipoLiqu($_POST['txbChTipoLiqu']);
                $objLiquidac->setFecSis($_POST['txbfecSis']);
                $objLiquidac->setCodeLiqu($_POST['txbCodeLiqu']);
                $objLiquidac->setCodeAgency($_POST['txbCodeAgency']);
                $objLiquidac->setCodeSeller($_POST['txbCodeSeller']);
                //$objLiquidac->setCodeAdviser($_POST['txbCodeAdviser']);
                $objLiquidac->setCodeDestination($_POST['txbCodeDestination']);
                $objLiquidac->setCodeHotel($_POST['txbCodeHotel']);
                $objLiquidac->setCodeAlim($_POST['txbCodeAlim']);
                $objLiquidac->setCodePlan($_POST['txbCodePlan']);
                $objLiquidac->setCodeAcomodac($_POST['txbCodeAcomodac']);
                $objLiquidac->setValTotTraveler($_POST['txbValTotTraveler']);
                $objLiquidac->setValDes($_POST['txbValDes']);
                $objLiquidac->setValIvaLiqu($_POST['txbValIvaLiqu']);
                $objLiquidac->setValIcaLiqu($_POST['txbValIcaLiqu']); 
                $objLiquidac->setValRtfLiqu($_POST['txbValRtfLiqu']);
                $objLiquidac->setValTotEmp($_POST['txbvalTotEmp']);
                $objLiquidac->setPl50Liqu($dp50);
                $objLiquidac->setPl100Liqu($dp100);
                $objLiquidac->setIdUser($_POST['txbIdUser']);
                //$objLiquidac->setNumRes($_POST['txbNumRes']);
                $objLiquidac->setNumRes('1');

                
                $resInsert=$objLiquidac->insert();
                //print_r($objLiquidac);
                return $resInsert;
                //print_r(strval($_POST['txbValIvaLiqu']));
            }
            if(isset($_POST['saveDetail'])){
                $objDetailLiquidac= new LiquDetaModel("","","","","","","","","","","","","","","","","","","","","");
                $codLiquDetail=$_POST['codDetail'];
                $arrFlight=json_decode($_POST["arrFliJson"], true);
                
                
                //print_r($codLiquDetail);
                
                 foreach ($arrFlight as $val) {
                        foreach($val['travelFli'] as $valT){
                            foreach($val['incFli'] as $valI){
                                foreach($val['nincFli'] as $valNI){
                                    foreach($val['concFli'] as $valCn){
                                        $dateF = date_create($val['dateFli']);
                                        $dateFli=date_format($dateF,"d/m/Y");
                                        $hEx = date_create($val['dateFli']." ".$val['arriFli'].":00");
                                        $horExFli=date_format($hEx,"d/m/Y H:i:s");
                                        $hAr = date_create($val['dateFli']." ".$val['arriFli'].":00");
                                        $horArrFli=date_format($hAr,"d/m/Y H:i:s");
                                        $birDa = date_create($valT['birthDateTr']);
                                        $birtDat=date_format($birDa,"d/m/Y");
                                        $objDetailLiquidac->setCodeLiqu($codLiquDetail);
                                        $objDetailLiquidac->setCodeAeroline($val['aerFli']);;
                                        $objDetailLiquidac->setCodeFlight($val['codFli']);;
                                        $objDetailLiquidac->setRouteFlight($val['rouFli']);;
                                        $objDetailLiquidac->setDateFlight($dateFli);;
                                        $objDetailLiquidac->setHorExFlight($horExFli);
                                        $objDetailLiquidac->setHorArrFlight($horArrFli);
                                        $objDetailLiquidac->setObsFlight($val['commFli']);
                                        $objDetailLiquidac->setNameTraveler($valT['nameTr']);
                                        $objDetailLiquidac->setLastNameTraveler($valT['lastNameTr']);
                                        $objDetailLiquidac->setDatBirTraveler($birtDat);
                                        $objDetailLiquidac->setIdTraveler($valT['idTr']);
                                        $objDetailLiquidac->setInclusio($valI['codI']);
                                        $objDetailLiquidac->setNotInclusio($valNI['codNI']);
                                        $objDetailLiquidac->setConcept($valCn['codConc']);
                                        $objDetailLiquidac->setValUnConcept($valCn['preConc']);
                                        $objDetailLiquidac->setQuanConcept($valCn['cantConc']);
                                        $objDetailLiquidac->setTotConcept($valCn['totConc']); 
                                        //print_r($objDetailLiquidac);
                                        $resInsertDeta=$objDetailLiquidac->insert(); 
                                    }
                                     
                                }
                                
                            }
                            
                        }

                     
                     
                }
                return $resInsertDeta;
            }
            include_once('Views/liquidations/insert.php');
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","");
                    
                    $objLiquidac->setCode($_GET['code']);
                    $res=$objLiquidac->show();
                    //print_r($res);
                    include_once('Views/liquidation/edit.php');
                }
    
                if(isset($_POST['updateLiquidac'])){
                    //print_r($_POST);
                    $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","");
                    
                    $objLiquidac->setCode($_POST['txbCode']);
                    $objLiquidac->setName($_POST['txbTiLi']);
                    $objLiquidac->setName($_POST['txbCodeFeGe']);
                    $objLiquidac->setName($_POST['txbCodeAgen']);
                    $objLiquidac->setName($_POST['txbCodeVend']);
                    $objLiquidac->setName($_POST['txbCodeDest']);
                    $objLiquidac->setName($_POST['txbCodeHote']);
                    $objLiquidac->setName($_POST['txbCodeTiAl']);
                    $objLiquidac->setName($_POST['txbCodePlan']);
                    $objLiquidac->setName($_POST['txbCodeAcom']);
                    $objLiquidac->setName($_POST['txbPoDe']);
                    $objLiquidac->setName($_POST['txbVaPa']);
                    $objLiquidac->setName($_POST['txbVaIv']);
                    $objLiquidac->setName($_POST['txbVaIc']);
                    $objLiquidac->setName($_POST['txbVaRf']);
                    $objLiquidac->setName($_POST['txbVaEm']);
                    $objLiquidac->setName($_POST['txbFePa']);
                    $objLiquidac->setName($_POST['txbFeTo']);
                    $objLiquidac->setName($_POST['txbCodeUsua']);
                        
                    $resUpdate=$objLiquidac->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","");
                    
                    $objLiquidac->setCode($_GET['code']);
                    $resDelete=$objLiquidac->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>