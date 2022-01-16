<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/agencyModel.php');

    class AgencyController{

        public function home(){
            
            try {
                if (isset($_POST['showAgency'])){
                    $objAgency= new AgencyModel("","","");
                    $objAgency->setCode($_POST['txbCode']);
                    $objAgency->setName($_POST['txbName']);
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

                $objAgency= new AgencyModel("","","");
                
                $objAgency->setCode($_POST['txbCode']);
                $objAgency->setName($_POST['txbName']);
                $objAgency->setStatus($_POST['txbStatus']);
                
                $resInsert=$objAgency->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objAgency= new AgencyModel("","","");
                    
                    $objAgency->setCode($_GET['code']);
                    $res=$objAgency->show();
                    //print_r($res);
                    include_once('Views/agency/edit.php');
                }
    
                if(isset($_POST['updateAgency'])){
                    //print_r($_POST);
                    $objAgency= new AgencyModel("","","");
                    
                    $objAgency->setCode($_POST['txbCode']);
                    $objAgency->setName($_POST['txbName']);
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
                    $objAgency= new AgencyModel("","","");
                    
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