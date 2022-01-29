<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/bankModel.php');

    class BankController{

        public function home(){
            
            try {
                if (isset($_POST['showBank'])){
                    $objBank= new BankModel("","","","");
                    $objBank->setCode($_POST['txbCode']);
                    $objBank->setName($_POST['txbName']);
                    $objBank->setNumAccount($_POST['txbNumAccount']);

                    $bank=$objBank->show();
                    
                }
                else{
                    $objBank= new BankModel("","","","");
                    $bank=$objBank->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/bank/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveBank'])){

                $objBank= new BankModel("","","","");
                
                $objBank->setCode($_POST['txbCode']);
                $objBank->setName($_POST['txbName']);
                $objBank->setTiAccount($_POST['txbTiAccount']);
                $objBank->setNumAccount($_POST['txbNumAccount']);
                //print_r($objBank);
                $resInsert=$objBank->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objBank= new BankModel("","","","","","","");
                    
                    $objBank->setCode($_GET['code']);
                    $res=$objBank->show();
                    //print_r($res);
                    include_once('Views/bank/edit.php');
                }
    
                if(isset($_POST['updateBank'])){
                    //print_r($_POST);
                    $objBank= new BankModel("","","","");
                    
                    $objBank->setCode($_POST['txbCode']);
                    $objBank->setName($_POST['txbName']);
                    $objBank->setTiAccount($_POST['txbTiAccount']);
                    $objBank->setNumAccount($_POST['txbNumAccount']);
                    
                    $resUpdate=$objBank->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objBank= new BankModel("","","","");
                    
                    $objBank->setCode($_GET['code']);
                    $resDelete=$objBank->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>