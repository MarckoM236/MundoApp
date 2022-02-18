<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/estareseModel.php');

    class EstareseController{

        public function home(){
            
            try {
                if (isset($_POST['showEstarese'])){
                    $objEstarese= new EstareseModel("","");
                    $objEstarese->setCode($_POST['txbCode']);
                    $objEstarese->setName($_POST['txbName']);
                    $estarese=$objEstarese->show();
                    
                }
                else {
                    $objEstarese= new EstareseModel("","");  
                    $estarese=$objEstarese->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/estarese/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveEstarese'])){

                $objEstarese= new EstareseModel("","");
                
                $objEstarese->setCode($_POST['txbCode']);
                $objEstarese->setName($_POST['txbName']);
                
                $resInsert=$objEstarese->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objEstarese= new EstareseModel("","","","","","","");
                    
                    $objEstarese->setCode($_GET['code']);
                    $res=$objEstarese->show();
                    //print_r($res);
                    include_once('Views/estarese/edit.php');
                }
    
                if(isset($_POST['updateEstarese'])){
                    //print_r($_POST);
                    $objEstarese= new EstareseModel("","");
                    
                    $objEstarese->setCode($_POST['txbCode']);
                    $objEstarese->setName($_POST['txbName']);
                    
                    $resUpdate=$objEstarese->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objEstarese= new EstareseModel("","");
                    
                    $objEstarese->setCode($_GET['code']);
                    $resDelete=$objEstarese->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>