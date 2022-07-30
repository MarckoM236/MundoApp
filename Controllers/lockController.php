<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/lockModel.php');
    @include_once('Models/aerolineModel.php');
    @include_once('Models/destinationModel.php');
    @include_once('Models/flightModel.php');

    class LockController{

        public function home(){
            
            try {
                if (isset($_POST['showLock'])){
                    $objLock= new LockModel("","","","","","","","","","","","","");
                    $objLock->setCode($_POST['txbCodeAeroline']);
                    $objlock->setOrigen($_POST['txbCodeOrigen']);
                    $lock=$objLock->show();

                    //Consult aeroline to complete field.
                    $objAeroline= new AerolineModel("","",""); 
                    $aeroline=$objAeroline->show();

                    //Consult destination to complete field.
                    $objDestination= new DestinationModel("","");
                    $destination=$objDestination->show(); 

                    //Consult flight to complete field.
                    $objFlight= new FlightModel("","","","",""); 
                    $flight=$objFlight->show();

                    $numUtil=$objLock->showUltimate(); 
                    
                }
                else{
                    $objLock= new LockModel("","","","","","","","","","","","","");
                    $lock=$objLock->show();

                    //Consult aeroline to complete field.
                    $objAeroline= new AerolineModel("","",""); 
                    $aeroline=$objAeroline->show();

                    //Consult destination to complete field.
                    $objDestination= new DestinationModel("","");
                    $destination=$objDestination->show(); 

                    //Consult flight to complete field.
                    $objFlight= new FlightModel("","","","",""); 
                    $flight=$objFlight->show();

                    $numUlt=$objLock->showUltimate(); 
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/lock/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveLock'])){
                //Format date
                $fecIdaLock = date_create($_POST['txbFecIdaLock']);
                $fecI=date_format($fecIdaLock,"d/m/Y");

                $fecRegLock = date_create($_POST['txbFecRegLock']);
                $fecR=date_format($fecRegLock,"d/m/Y");

                $objLock= new LockModel("","","","","","","","","","","","","");
                
                $objLock->setCode($_POST['txbCode']);
                $objLock->setOrigen($_POST['txbCodeOr']);
                $objLock->setDestination($_POST['txbCodeDest']);
                $objLock->setDateIn($fecI);
                $objLock->setDateFi($fecR);
                $objLock->setAeroline($_POST['txbCodeAeroline']);
                $objLock->setFlightI($_POST['txbCodeFlightIda']);
                $objLock->setFlightR($_POST['txbCodeFlightReg']);
                $objLock->setAmount($_POST['txbCantLock']);
                $objLock->setAmountFree($_POST['txbCantLock']);
                $objLock->setBalance($_POST['txbCantLock']);
                $objLock->setTariff($_POST['txbTariLock']);
                $objLock->setUser($_POST['txbUserLock']);
                
                $resInsert=$objLock->insert();
                //print_r($objLock);

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objLock= new LockModel("","","","","","","","","","","","","");
                    $objLock->setCode($_GET['code']);
                    $lock=$objLock->show();
                    //
                    foreach($lock as $dataLock) {
                        $code=$dataLock->getCode();
                        $codeOrigen=$dataLock->getOrigen();
                        //Consult origen to complete field.
                        $objOrigen= new DestinationModel("","");
                        $objOrigen->setCode($codeOrigen);
                        $origen=$objOrigen->show(); 
                        foreach($origen as $dataOrigen) {
                            $nameOrigen=$dataOrigen->getName();
                        }
                        
                        $codeDestination=$dataLock->getDestination();
                        //Consult destination to complete field.
                        $objDestination= new DestinationModel("","");
                        $objDestination->setCode($codeDestination);
                        $destination=$objDestination->show(); 
                        foreach($destination as $dataDestination) {
                            $nameDestination=$dataDestination->getName();
                        }

                        $dateI=$dataLock->getDateIn();
                        $datIn=str_replace("/","-",$dateI);
                        $dateIn = date("Y-m-d", strtotime($datIn));

                        $dateF=$dataLock->getDateFi();
                        $datFi=str_replace("/","-",$dateF);
                        $dateFi = date("Y-m-d", strtotime($datFi));

                        $codeAeroline=$dataLock->getAeroline();
                        $objAeroline= new AerolineModel("","",""); 
                        $objAeroline->setCode($codeAeroline);
                        $aeroline=$objAeroline->show();
                        foreach($aeroline as $dataAeroline) {
                            $nameAeroline=$dataAeroline->getName();
                        }

                        $codeFlightI=$dataLock->getFlightI();
                        //Consult flightI to complete field.
                        $objFlight= new FlightModel("","","","",""); 
                        $objFlight->setNum($codeFlightI);
                        $flightI=$objFlight->show();
                        foreach($flightI as $dataFlightI) {
                            $nameFlightI=$dataFlightI->getRoute();
                        }

                        $codeFlightR=$dataLock->getFlightR();
                        //Consult flightR to complete field.
                        $objFlight= new FlightModel("","","","",""); 
                        $objFlight->setNum($codeFlightR);
                        $flightR=$objFlight->show();
                        foreach($flightR as $dataFlightR) {
                            $nameFlightR=$dataFlightR->getRoute();
                        }

                        $amount=$dataLock->getAmount();
                        $tariff=$dataLock->getTariff();
            
                        $arr_lock[] = array("code" => $code,
                        "codeOrigen" => $codeOrigen,
                        "nameOrigen" => $nameOrigen,
                        "codeDestination" => $codeDestination,
                        "nameDestination" => $nameDestination,
                        "dateIn" => $dateIn,
                        "dateFi" => $dateFi,
                        "codeAeroline" => $codeAeroline,
                        "nameAeroline" => $nameAeroline,
                        "codeFlightI" => $codeFlightI,
                        "nameFlightI" => $nameFlightI,
                        "codeFlightR" => $codeFlightR,
                        "nameFlightR" => $nameFlightR,
                        "amount" => $amount,
                        "tariff" => $tariff);    

                        
                    }

                    //Consult aeroline to complete field.
                    $objAeroline= new AerolineModel("","",""); 
                    $aeroline=$objAeroline->show();

                    //Consult destination to complete field.
                    $objDestination= new DestinationModel("","");
                    $destination=$objDestination->show(); 

                    //Consult flight to complete field.
                    $objFlight= new FlightModel("","","","",""); 
                    $flight=$objFlight->show();


                    include_once('Views/lock/edit.php');
                }
    
                if(isset($_POST['updateLock'])){
                    //print_r($_POST);
                    //Format date
                    $fecIdaLock = date_create($_POST['txbFecIdaLock']);
                    $fecI=date_format($fecIdaLock,"d/m/Y");

                    $fecRegLock = date_create($_POST['txbFecRegLock']);
                    $fecR=date_format($fecRegLock,"d/m/Y");

                    $objLock= new LockModel("","","","","","","","","","","","","");
                    
                    $objLock->setCode($_POST['txbCode']);
                    $objLock->setOrigen($_POST['txbCodeOr']);
                    $objLock->setDestination($_POST['txbCodeDest']);
                    $objLock->setDateIn($fecI);
                    $objLock->setDateFi($fecR);
                    $objLock->setAeroline($_POST['txbCodeAeroline']);
                    $objLock->setFlightI($_POST['txbCodeFlightIda']);
                    $objLock->setFlightR($_POST['txbCodeFlightReg']);
                    $objLock->setAmount($_POST['txbCantLock']);
                    $objLock->setAmountFree("");
                    $objLock->setBalance("");
                    $objLock->setTariff($_POST['txbTariLock']);
                    $objLock->setUser($_POST['txbUserLock']);
                        
                        //print_r($objLock);
                        $resUpdate=$objLock->update();
                        return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            
            
        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objLock= new LockModel("","","","","","","","","","","","","");
                    $objLock->setCode($_GET['code']);
                    //print_r($_GET);
                    $resDelete=$objLock->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>