<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/inclusioModel.php');

    class InclusioController{

        public function home(){
            
            try {
                if (isset($_POST['showInclusio'])){
                    $objInclusio= new InclusioModel("","");
                    $objInclusio->setCode($_POST['txbCode']);
                    $objInclusio->setName($_POST['txbName']);
                    $inclusio=$objInclusio->show();
                    
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/inclusio/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveInclusio'])){

                $objInclusio= new InclusioModel("","");
                
                $objInclusio->setCode($_POST['txbCode']);
                $objInclusio->setName($_POST['txbName']);
                
                $resInsert=$objInclusio->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objInclusio= new InclusioModel("","");
                    
                    $objInclusio->setCode($_GET['code']);
                    $res=$objInclusio->show();
                    //print_r($res);
                    include_once('Views/inclusio/edit.php');
                }
    
                if(isset($_POST['updateInclusio'])){
                    //print_r($_POST);
                    $objInclusio= new InclusioModel("","");
                    
                    $objInclusio->setCode($_POST['txbCode']);
                    $objInclusio->setName($_POST['txbName']);
                    
                    $resUpdate=$objInclusio->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objInclusio= new InclusioModel("","");
                    
                    $objInclusio->setCode($_GET['code']);
                    $resDelete=$objInclusio->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>