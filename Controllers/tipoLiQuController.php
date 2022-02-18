<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/tipoLiQuModel.php');

    class TipoLiQuController{

        public function home(){
            
            try {
                if (isset($_POST['showTipoLiQu'])){
                    $objTipoLiQu= new TipoLiQuModel("","");
                    $objTipoLiQu->setCode($_POST['txbCode']);
                    $objTipoLiQu->setName($_POST['txbName']);
                    $tipoLiQu=$objTipoLiQu->show();
                    
                }
                else {
                    $objTipoLiQu= new TipoLiQuModel("","");
                    $tipoLiQu=$objTipoLiQu->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/tipoLiQu/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveTipoLiQu'])){

                $objTipoLiQu= new TipoLiQuModel("","");
                
                $objTipoLiQu->setCode($_POST['txbCode']);
                $objTipoLiQu->setName($_POST['txbName']);
                
                $resInsert=$objTipoLiQu->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objTipoLiQu= new TipoLiQuModel("","","","","","","");
                    
                    $objTipoLiQu->setCode($_GET['code']);
                    $res=$objTipoLiQu->show();
                    //print_r($res);
                    include_once('Views/tipoLiQu/edit.php');
                }
    
                if(isset($_POST['updateTipoLiQu'])){
                    //print_r($_POST);
                    $objTipoLiQu= new TipoLiQuModel("","");
                    
                    $objTipoLiQu->setCode($_POST['txbCode']);
                    $objTipoLiQu->setName($_POST['txbName']);
                    
                    $resUpdate=$objTipoLiQu->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objTipoLiQu= new TipoLiQuModel("","");
                    
                    $objTipoLiQu->setCode($_GET['code']);
                    $resDelete=$objTipoLiQu->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>