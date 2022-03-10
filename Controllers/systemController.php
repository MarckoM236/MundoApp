<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/systemModel.php');

    class SystemController{

        public function home(){
            
            try {
                if (isset($_POST['showSystem'])){                   
                    $objSystem= new SystemModel("","","","","");
                    
                    $objSystem->setCode($_POST['txbCode']);
                    $objSystem->setName(strtoupper($_POST['txbName']));
                    $objSystem->setValue($_POST['txbValue']);
                    $objSystem->setFeIn($_POST['txbFeIn']);
                    $objSystem->setFeFi($_POST['txbFeFi']);
                    $system=$objSystem->show();
                    
                }
                else{
                    $objSystem= new SystemModel("","","","","");
                    $system=$objSystem->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/system/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveSystem'])){
                //Format date
                $datein = date_create($_POST['txbFeIn']);
                $feIn=date_format($datein,"d/m/Y");
                $datefi = date_create($_POST['txbFeFi']);
                $feFi=date_format($datefi,"d/m/Y");

                $objSystem= new SystemModel("","","","","");

                $objSystem->setCode($_POST['txbCode']);
                $objSystem->setName(strtoupper($_POST['txbName']));
                $objSystem->setValue($_POST['txbValue']);
                $objSystem->setFeIn($feIn);
                $objSystem->setFeFi($feFi);
                
                $resInsert=$objSystem->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objSystem= new SystemModel("","","","","");
                    
                    $objSystem->setCode($_GET['code']);
                    $res=$objSystem->show();
                    //print_r($res);
                    include_once('Views/system/edit.php');
                }
    
                if(isset($_POST['updateSystem'])){
                    //FormatDate
                    $datein = date_create($_POST['txbFeIn']);
                    $feIn=date_format($datein,"d/m/Y");
                    $datefi = date_create($_POST['txbFeFi']);
                    $feFi=date_format($datefi,"d/m/Y");
                    
                    $objSystem= new SystemModel("","","","","");
                    
                    $objSystem->setCode($_POST['txbCode']);
                    $objSystem->setName(strtoupper($_POST['txbName']));
                    $objSystem->setValue($_POST['txbValue']);
                    $objSystem->setFeIn($feIn);
                    $objSystem->setFeFi($feFi);
                    
                    $resUpdate=$objSystem->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objSystem= new SystemModel("","","","","");
                    
                    $objSystem->setCode($_GET['code']);
                    $resDelete=$objSystem->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>