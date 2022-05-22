<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/agencyModel.php');

    class AgencyController{

        public function home(){
            
            try {
                if (isset($_POST['showAgency'])){
                    $objAgency= new AgencyModel("","","","","","","");
                    $objAgency->setCode($_POST['txbCode']);
                    $objAgency->setName(strtoupper($_POST['txbName']));
                    $agency=$objAgency->show();
                    
                }
                else {
                    $objAgency= new AgencyModel("","","","","","","");
                    $agency=$objAgency->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/agency/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveAgency'])){

                $objAgency= new AgencyModel("","","","","","","");
                
                $objAgency->setCode($_POST['txbCode']);
                $objAgency->setName(strtoupper($_POST['txbName']));
                $objAgency->setAddress(strtoupper($_POST['txbAddress']));
                $objAgency->setPhone(strtoupper($_POST['txbPhone']));
                $objAgency->setMobile(strtoupper($_POST['txbMobile']));
                $objAgency->setEmail(strtolower($_POST['txbEmail']));
                $objAgency->setStatus($_POST['txbStatus']);
                
                $resInsert=$objAgency->insert();
                

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objAgency= new AgencyModel("","","","","","","");
                    
                    $objAgency->setCode($_GET['code']);
                    $res=$objAgency->show();
                    //print_r($res);
                    include_once('Views/agency/edit.php');
                }
    
                if(isset($_POST['updateAgency'])){
                    //print_r($_POST);
                    $objAgency= new AgencyModel("","","","","","","");
                    
                    $objAgency->setCode($_POST['txbCode']);
                    $objAgency->setName(strtoupper($_POST['txbName']));
                    $objAgency->setAddress(strtoupper($_POST['txbAddress']));
                    $objAgency->setPhone(strtoupper($_POST['txbPhone']));
                    $objAgency->setMobile(strtoupper($_POST['txbMobile']));
                    $objAgency->setEmail(strtolower($_POST['txbEmail']));
                    $objAgency->setStatus($_POST['txbStatus']);
                    
                    $resUpdate=$objAgency->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objAgency= new AgencyModel("","","","","","","");
                    
                    $objAgency->setCode($_GET['code']);
                    $resDelete=$objAgency->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>