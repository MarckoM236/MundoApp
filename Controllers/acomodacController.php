<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/acomodacModel.php');

    class AcomodacController{

        public function home(){
            
            try {
                if (isset($_POST['showAcomodac'])){
                    $objAcomodac= new AcomodacModel("","");
                    $objAcomodac->setCode($_POST['txbCode']);
                    $objAcomodac->setName($_POST['txbName']);
                    $acomodac=$objAcomodac->show();
                    
                }
                else{
                    $objAcomodac= new AcomodacModel("","");
                    $acomodac=$objAcomodac->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/acomodac/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveAcomodac'])){

                $objAcomodac= new AcomodacModel("","");
                
                $objAcomodac->setCode($_POST['txbCode']);
                $objAcomodac->setName($_POST['txbName']);
                
                $resInsert=$objAcomodac->insert();

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
                    $objAcomodac->setName($_POST['txbName']);
                    
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