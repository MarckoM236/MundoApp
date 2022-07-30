<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/utilityModel.php');
    @include_once('Models/bankModel.php');

    class UtilityController{

        public function home(){

            try {
                if (isset($_POST['showUtility'])){
                    $objUtility= new UtilityModel("","","","");
                    $objUtility->setCode($_POST['txbCode']);
                    $utility=$objUtility->show();

                    $objUtility= new UtilityModel("","","","");
                    $numUtil=$objUtility->showUltimate(); 
                    
                }
                else{
                    $objUtility= new UtilityModel("","","","");
                    $utility=$objUtility->show();

                    $objUtility= new UtilityModel("","","","");
                    $numUtil=$objUtility->showUltimate(); 

                    //print_r($payment);
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }       
            include_once('Views/utility/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveUtility'])){

                $objUtility= new UtilityModel("","","","");

                //Format date
                $dateLiqu = date_create($_POST['txbDateUtil']);
                $date=date_format($dateLiqu,"d/m/Y");
                
                $objUtility->setCode($_POST['txbCode']);
                $objUtility->setCodeLiqu(intval($_POST['txbCodeLiqu']));
                $objUtility->setDateUtil($date);
                $objUtility->setUserUtil($_POST['txbIdUser']);
                
               $resInsert=$objUtility->insert();
               //print_r($objUtility);

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
                if(isset($_GET['code1'])){
                    $objUtility= new UtilityModel("","","","");
                    $objUtility->setCode($_GET['code1']);
                    $resDelete=$objUtility->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>