<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/companyModel.php');

    class CompanyController{

        public function home(){
            
            try {
                if (isset($_POST['showCompany'])){
                    $objCompany= new CompanyModel("","","","","","","");
                    $objCompany->setCode($_POST['txbCode']);
                    $objCompany->setName(strtoupper($_POST['txbName']));
                    $objCompany->setNit($_POST['txbNit']);
                    $company=$objCompany->show();  
                }
                else{
                    $objCompany= new CompanyModel("","","","","","","");
                    $company=$objCompany->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/company/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveCompany'])){

                $objCompany= new CompanyModel("","","","","","","");
                
                $objCompany->setCode($_POST['txbCode']);
                $objCompany->setName(strtoupper($_POST['txbName']));
                $objCompany->setNit($_POST['txbNit']);
                $objCompany->setRent($_POST['txbRent']);
                $objCompany->setAddress(strtoupper($_POST['txbAddress']));
                $objCompany->setPbx($_POST['txbPBX']);
                $objCompany->setMobile($_POST['txbMobile']);
                
                $resInsert=$objCompany->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objCompany= new CompanyModel("","","","","","","");
                    
                    $objCompany->setCode($_GET['code']);
                    $res=$objCompany->show();
                    //print_r($res);
                    include_once('Views/company/edit.php');
                }
    
                if(isset($_POST['updateCompany'])){
                    //print_r($_POST);
                    $objCompany= new CompanyModel("","","","","","","");
                    
                    $objCompany->setCode($_POST['txbCode']);
                    $objCompany->setName(strtoupper($_POST['txbName']));
                    $objCompany->setNit($_POST['txbNit']);
                    $objCompany->setRent($_POST['txbRent']);
                    $objCompany->setAddress(strtoupper($_POST['txbAddress']));
                    $objCompany->setPbx($_POST['txbPBX']);
                    $objCompany->setMobile($_POST['txbMobile']);
                    
                    $resUpdate=$objCompany->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objCompany= new CompanyModel("","","","","","","");
                    
                    $objCompany->setCode($_GET['code']);
                    $resDelete=$objCompany->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>