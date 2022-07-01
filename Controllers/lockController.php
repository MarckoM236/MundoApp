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
                    $objAcomodac= new AcomodacModel("","");
                    
                    $objAcomodac->setCode($_GET['code']);
                    $res=$objAcomodac->show();
                    //print_r($res);
                    include_once('Views/acomodac/edit.php');
                }
    
                if(isset($_POST['updateAcomodac'])){
                    //print_r($_POST);
                    $objAcomodac= new AcomodacModel("","");
                    
                    $objAcomodac->setCode($_POST['txbCode']);
                    $objAcomodac->setName(strtoupper($_POST['txbName']));
                    
                    $resUpdate=$objAcomodac->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objAcomodac= new AcomodacModel("","");
                    
                    $objAcomodac->setCode($_GET['code']);
                    $resDelete=$objAcomodac->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>