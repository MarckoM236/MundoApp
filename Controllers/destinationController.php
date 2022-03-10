<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/destinationModel.php');

    class DestinationController{

        public function home(){
            
            try {
                if (isset($_POST['showDestination'])){
                    $objDestination= new DestinationModel("","");
                    $objDestination->setCode($_POST['txbCode']);
                    $objDestination->setName(strtoupper($_POST['txbName']));
                    $destination=$objDestination->show(); 
                }
                else{
                    $objDestination= new DestinationModel("","");
                    $destination=$objDestination->show(); 
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/destination/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveDestination'])){

                $objDestination= new DestinationModel("","");
                
                $objDestination->setCode($_POST['txbCode']);
                $objDestination->setName(strtoupper($_POST['txbName']));
                
                $resInsert=$objDestination->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objDestination= new DestinationModel("","","","","","","");
                    
                    $objDestination->setCode($_GET['code']);
                    $res=$objDestination->show();
                    //print_r($res);
                    include_once('Views/destination/edit.php');
                }
    
                if(isset($_POST['updateDestination'])){
                    //print_r($_POST);
                    $objDestination= new DestinationModel("","");
                    
                    $objDestination->setCode($_POST['txbCode']);
                    $objDestination->setName(strtoupper($_POST['txbName']));
                    
                    $resUpdate=$objDestination->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objDestination= new DestinationModel("","");
                    
                    $objDestination->setCode($_GET['code']);
                    $resDelete=$objDestination->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>