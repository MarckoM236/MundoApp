<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/aerolineModel.php');

    class AerolineController{

        public function home(){
            
            try {
                if (isset($_POST['showAeroline'])){
                    $objAeroline= new AerolineModel("","","");
                    $objAeroline->setCode($_POST['txbCode']);
                    $objAeroline->setName($_POST['txbName']);
                    $aeroline=$objAeroline->show();
                    
                }
                else {
                    $objAeroline= new AerolineModel("","","");
                    $aeroline=$objAeroline->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/aeroline/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveAeroline'])){

                $objAeroline= new AerolineModel("","","");
                
                $objAeroline->setCode($_POST['txbCode']);
                $objAeroline->setName($_POST['txbName']);
                $objAeroline->setStatus($_POST['txbStatus']);
                
                $resInsert=$objAeroline->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objAeroline= new AerolineModel("","","");
                    
                    $objAeroline->setCode($_GET['code']);
                    $res=$objAeroline->show();
                    //print_r($res);
                    include_once('Views/aeroline/edit.php');
                }
    
                if(isset($_POST['updateAeroline'])){
                    //print_r($_POST);
                    $objAeroline= new AerolineModel("","","");
                    
                    $objAeroline->setCode($_POST['txbCode']);
                    $objAeroline->setName($_POST['txbName']);
                    $objAeroline->setStatus($_POST['txbStatus']);
                    
                    $resUpdate=$objAeroline->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objAeroline= new AerolineModel("","","");
                    
                    $objAeroline->setCode($_GET['code']);
                    $resDelete=$objAeroline->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>