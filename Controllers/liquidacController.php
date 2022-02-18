<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/liquidationModel.php');
    @include_once('Models/agencyModel.php');
    @include_once('Models/sellerModel.php');
    @include_once('Models/destinationModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/tipoAlimModel.php');
    @include_once('Models/acomodacModel.php');
    @include_once('Models/planModel.php');
    @include_once('Models/flightModel.php');
    @include_once('Models/conceptoModel.php');
    @include_once('Models/inclusioModel.php');

    class LiquidacController{

        public function home(){
            
            try {
                if (isset($_POST['showLiquidation'])){
                    $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","");
                    $objLiquidac->setCode($_POST['txbCode']);
                    $liquidac=$objLiquidac->show();
                    
                }
                else{
                    $objLiquidac= new LiquidacModel("");
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
                    $aerolineaFli=$dataFli->getAeroline();    
                    $routeFli=$dataFli->getRoute();
                    
                    //$arr_flight[] = array("routeFlight" => $routeFli); 
                } 
                //$arr=$arr_flight[0];   
            }
            else{
                $aerolineaFli="";    
                $routeFli=""; 
            }

                  
            return $arr[]= array("aer"=>$aerolineaFli,"rou"=>$routeFli);
        }

        public function showUser(){
            if (isset($_POST['ShowUsers']) & !empty($_POST['txbCodUser'])){
                $objUser= new UserModel("","","","");
                $objUser->setCode($_POST['txbCode']);
                $objUser->setName($_POST['txbName']);

                foreach($dataFlight as $dataFli) {
                    $aerolineaFli=$dataFli->getAeroline();    
                    $routeFli=$dataFli->getRoute();
                    
                } 
            }
            else{
                $aerolineaFli="";    
                $routeFli=""; 
            }

            return $arrUser[]= array("aer"=>$aerolineaFli,"rou"=>$routeFli);
        }
        

        public function insert(){
            //Consult agency to complete field.
            $objAgency= new AgencyModel("","",""); 
            $agency=$objAgency->show();

            //Consult agency to complete field.
            $objSeller= new SellerModel("","","",""); 
            $seller=$objSeller->show();
            
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


            include_once('Views/liquidations/insert.php');
            
            if (isset($_POST['saveLiquidac'])){

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
                
                $resInsert=$objLiquidac->insert();

            }
            return $resInsert;
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