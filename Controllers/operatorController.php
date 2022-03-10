<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/operatorModel.php');

    class OperatorController{

        public function home(){
            
            try {
                if (isset($_POST['showOperator'])){
                    $objOperator= new OperatorModel("","","","","","","");
                    $objOperator->setCode($_POST['txbCode']);
                    $objOperator->setName(strtoupper($_POST['txbName']));

                    $operator=$objOperator->show();
                    
                }
                else{
                    $objOperator= new OperatorModel("","","","","","",""); 
                    $operator=$objOperator->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/operator/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveOperator'])){

                $objOperator= new OperatorModel("","","","","","","");
                
                $objOperator->setCode($_POST['txbCode']);
                $objOperator->setName(strtoupper($_POST['txbName']));
                $objOperator->setAddress(strtoupper($_POST['txbAddress']));
                $objOperator->setPhone($_POST['txbPhone']);
                $objOperator->setStatus($_POST['txbStatus']);
                $objOperator->setEmail(strtoupper($_POST['txbEmail']));
                $objOperator->setMobile($_POST['txbMobile']);
                //print_r($_POST);
                $resInsert=$objOperator->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objOperator= new OperatorModel("","","","","","","");
                    
                    $objOperator->setCode($_GET['code']);
                    $res=$objOperator->show();
                    //print_r($res);
                    include_once('Views/operator/edit.php');
                }
    
                if(isset($_POST['updateOperator'])){
                    //print_r($_POST);

                    $objOperator= new OperatorModel("","","","","","","","");
                
                    $objOperator->setCode($_POST['txbCode']);
                    $objOperator->setName(strtoupper($_POST['txbName']));
                    $objOperator->setAddress(strtoupper($_POST['txbAddress']));
                    $objOperator->setPhone($_POST['txbPhone']);
                    $objOperator->setStatus($_POST['txbStatus']);
                    $objOperator->setEmail(strtoupper($_POST['txbEmail']));
                    $objOperator->setMobile($_POST['txbMobile']);

                    $resUpdate=$objOperator->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objOperator= new OperatorModel("","","","","","","");
                    
                    $objOperator->setCode($_GET['code']);
                    $resDelete=$objOperator->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>