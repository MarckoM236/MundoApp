<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/utildetaModel.php');

    class UtildetaController{

        public function home(){

            try {
                if (isset($_POST['showPay'])){
                    $objUtildeta= new UtildetaModel("","","","","","","");
                    $objUtildeta->setCodeLiqu($_POST['txbIL']);
                    $utildeta=$objUtildeta->show();

                    $objUtildeta= new UtildetaModel("","","","","","","");
                    $numPay=$objUtildeta->showUltimate();    

                    $objBank= new BankModel("","","","");
                    $bank=$objBank->show();
                    
                }
                else{
                    $objBank= new BankModel("","","","");
                    $bank=$objBank->show();

                    //print_r($payment);
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }       
            include_once('Views/utility/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveUtildeta'])){

                $objUtildeta= new UtildetaModel("","","","","","","");
                
                $objUtildeta->setCodeUtility($_POST['txbCode']);
                $objUtildeta->setValLiqu($_POST['txbValLiquidac']);
                $objUtildeta->setValTicket($_POST['txbValTicket']);
                $objUtildeta->setValHotel($_POST['txbValHotel']);
                $objUtildeta->setValAsisMed($_POST['txbValAsisMedica']);
                $objUtildeta->setValReceptivo($_POST['txbValReceptivo']);
                $objUtildeta->setValUtility($_POST['txbValUtility']);
                //print_r($objUtildeta);
               $resInsert=$objUtildeta->insert();
               

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objUtildeta= new UtildetaModel("","","","","","","");
                    $objUtildeta->setCodeUtility($_GET['code']);
                    $utildeta=$objUtildeta->show();
                    //print_r($res);
                    include_once('Views/utility/edit.php');
                }
    
                if(isset($_POST['updateUtildeta'])){
                    $objUtildeta= new UtildetaModel("","","","","","","");
                
                $objUtildeta->setCodeUtility($_POST['txbCode']);
                $objUtildeta->setValLiqu($_POST['txbValLiquidac']);
                $objUtildeta->setValTicket($_POST['txbValTicket']);
                $objUtildeta->setValHotel($_POST['txbValHotel']);
                $objUtildeta->setValAsisMed($_POST['txbValAsisMedica']);
                $objUtildeta->setValReceptivo($_POST['txbValReceptivo']);
                $objUtildeta->setValUtility($_POST['txbValUtility']);
                
               $resUpdate=$objUtildeta->update();
               return $resUpdate;
                }
                
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code1'])){
                    $objUtildeta= new UtildetaModel("","","","","","","");
                    $objUtildeta->setCodeUtility($_GET['code1']);
                    $resDelete=$objUtildeta->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>