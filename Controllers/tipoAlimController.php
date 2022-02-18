<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/tipoAlimModel.php');

    class TipoAlimController{

        public function home(){
            
            try {
                if (isset($_POST['showTipoAlim'])){
                    $objTipoAlim= new TipoAlimModel("","");
                    $objTipoAlim->setCode($_POST['txbCode']);
                    $objTipoAlim->setName($_POST['txbName']);
                    $tipoAlim=$objTipoAlim->show();
                    
                }
                else{
                    $objTipoAlim= new TipoAlimModel("","");
                    $tipoAlim=$objTipoAlim->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/tipoAlim/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveTipoAlim'])){

                $objTipoAlim= new TipoAlimModel("","");
                
                $objTipoAlim->setCode($_POST['txbCode']);
                $objTipoAlim->setName($_POST['txbName']);
                
                $resInsert=$objTipoAlim->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objTipoAlim= new TipoAlimModel("","");
                    
                    $objTipoAlim->setCode($_GET['code']);
                    $res=$objTipoAlim->show();
                    //print_r($res);
                    include_once('Views/tipoAlim/edit.php');
                }
    
                if(isset($_POST['updateTipoAlim'])){
                    //print_r($_POST);
                    $objTipoAlim= new TipoAlimModel("","");
                    
                    $objTipoAlim->setCode($_POST['txbCode']);
                    $objTipoAlim->setName($_POST['txbName']);
                    
                    $resUpdate=$objTipoAlim->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objTipoAlim= new TipoAlimModel("","");
                    
                    $objTipoAlim->setCode($_GET['code']);
                    $resDelete=$objTipoAlim->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>