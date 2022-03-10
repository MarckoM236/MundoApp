<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/flightModel.php');
    @include_once('Models/aerolineModel.php');

    class FlightController{

        public function home(){
            
            try {
                if (isset($_POST['showFlight'])){
                    $objFlight= new FlightModel("","","","","");
                    $objFlight->setNum($_POST['txbNum']);
                    $objFlight->setRoute(strtoupper($_POST['txbRoute']));
                    $flight=$objFlight->show();

                    //Consult aeroline to complete field.
                    $objAeroline= new AerolineModel("","",""); 
                    $aeroline=$objAeroline->show();
                    
                }
                else{
                    $objFlight= new FlightModel("","","","",""); 
                    $flight=$objFlight->show();
                    
                    //Consult aeroline to complete field.
                    $objAeroline= new AerolineModel("","",""); 
                    $aeroline=$objAeroline->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/flight/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveFlight'])){

                $objFlight= new FlightModel("","","","","");
                
                $objFlight->setNum($_POST['txbNum']);
                $objFlight->setRoute(strtoupper($_POST['txbRoute']));
                $objFlight->setStatus($_POST['txbStatus']);
                $objFlight->setCodAeroline($_POST['txbCodAeroline']);
                //print_r($objFlight);
                $resInsert=$objFlight->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objFlight= new FlightModel("","","","","");
                    $objFlight->setNum($_GET['code']);
                    $resFlight=$objFlight->show();

                     //Consult aeroline to complete field.
                     $objAeroline= new AerolineModel("","",""); 
                     $resAeroline=$objAeroline->show();
                    //print_r($res);
                    include_once('Views/flight/edit.php');
                }
    
                if(isset($_POST['updateFlight'])){
                    //print_r($_POST);

                    $objFlight= new FlightModel("","","","","");
                
                    $objFlight->setNum($_POST['txbNum']);
                    $objFlight->setRoute(strtoupper($_POST['txbRoute']));
                    $objFlight->setStatus($_POST['txbStatus']);
                    $objFlight->setCodAeroline($_POST['txbCodAeroline']);

                    $resUpdate=$objFlight->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['num'])){
                    $objFlight= new FlightModel("","","","","");
                    
                    $objFlight->setNum($_GET['num']);
                    $resDelete=$objFlight->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>