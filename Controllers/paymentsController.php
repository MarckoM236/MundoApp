<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/paymentsModel.php');
    @include_once('Models/bankModel.php');

    class PaymentsController{

        public function home(){

            try {
                if (isset($_POST['showPay'])){
                    $objPayments= new PaymentsModel("","","","","","","","");
                    $objPayments->setCodeLiqu($_POST['txbIL']);
                    $payment=$objPayments->show();

                    $objPayments= new PaymentsModel("","","","","","","","");
                    $numPay=$objPayments->showUltimate();    

                    $objBank= new BankModel("","","","");
                    $bank=$objBank->show();
                    
                }
                /* else{
                    $objBank= new BankModel("","","","");
                    $bank=$objBank->show();

                    $objPayments= new PaymentsModel("","","","","","","","");
                    $payment=$objPayments->show();

                    $objPayments= new PaymentsModel("","","","","","","","");
                    $numPay=$objPayments->showUltimate();

                    //print_r($payment);
                } */
            } 
            catch (Exception $e) {
                //throw $th;
            }       
            include_once('Views/payments/home.php');

        }

        public function showPayTotal(){
            try {
                if (isset($_POST['showPay'])){
                    //print_r($_POST);
                    $objPayments= new PaymentsModel("","","","","","","","");
                    $objPayments->setCodeLiqu($_POST['txbCodeLiquidac']);
                    $paymentTot=$objPayments->showPayTotal();

                    $objLiquidac= new LiquidacModel("","","","","","","","","","","","","","","","","","","","");
                    $objLiquidac->setCodeLiqu($_POST['txbCodeLiquidac']);
                    $liqu=$objLiquidac->show();

                    foreach($liqu as $dataLiqu) {
                        $valLiqu=$dataLiqu->getValTotEmp();
                    }
                    $total=$valLiqu-$paymentTot;
                    return $total;
                }
                //print_r('sin datos');
            } 
            catch (Exception $e) {
                //throw $th;
            }       
            include_once('Views/payments/home.php');

        }
        

        public function insert(){
            if (isset($_POST['savePayments'])){

                $objPayments= new PaymentsModel("","","","","","","","");
                
                $objPayments->setCode($_POST['txbCode']);
                $objPayments->setCodeLiqu($_POST['txbIL']);
                $objPayments->setValuePay($_POST['txbValuePay']);
                $objPayments->setDatePay($_POST['txbDatePay']);
                $objPayments->setTypePay($_POST['txbTypePay']);
                $objPayments->setUserPay($_POST['txbIdUser']);
                $objPayments->setBankPay($_POST['txbCodeBank']);
                
               $resInsert=$objPayments->insert();
               //print_r($objPayments);

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
                    $objAcomodac->setName(strtoupper($_POST['txbName']));
                    
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
                    $objPayments= new PaymentsModel("","","","","","","","","");
                    $objPayments->setCode($_GET['code']);
                    $resDelete=$objPayments->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>