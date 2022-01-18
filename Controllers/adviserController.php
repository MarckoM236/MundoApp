<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/adviserModel.php');

    class AdviserController{

        public function home(){
            
            try {
                if (isset($_POST['showAdviser'])){
                    $objAdviser= new AdviserModel("","","","");
                    $objAdviser->setId($_POST['txbId']);
                    $objAdviser->setName($_POST['txbName']);
                    $objAdviser->setLastName($_POST['txbLastName']);
                    $adviser=$objAdviser->show();
                    
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/adviser/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveAdviser'])){

                $objAdviser= new AdviserModel("","","","");
                
                $objAdviser->setId($_POST['txbId']);
                $objAdviser->setName($_POST['txbName']);
                $objAdviser->setLastName($_POST['txbLastName']);
                $objAdviser->setStatus($_POST['txbStatus']);
                //$resInsert=$_POST;
                $resInsert=$objAdviser->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['id'])){
                    $objAdviser= new AdviserModel("","","","");
                    
                    $objAdviser->setId($_GET['id']);
                    $res=$objAdviser->show();
                    //print_r($_GET);
                    include_once('Views/adviser/edit.php');
                }
    
                if(isset($_POST['updateAdviser'])){
                    //print_r($_POST);
                    $objAdviser= new AdviserModel("","","","");
                    
                    $objAdviser->setId($_POST['txbId']);
                    $objAdviser->setName($_POST['txbName']);
                    $objAdviser->setLastName($_POST['txbLastName']);
                    $objAdviser->setStatus($_POST['txbStatus']);

                    $resUpdate=$objAdviser->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['id'])){
                    $objAdviser= new AdviserModel("","","","");
                    
                    $objAdviser->setId($_GET['id']);
                    //$resDelete=$_GET;
                    $resDelete=$objAdviser->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>