<?php 
    include_once('Core/baseModel.php');
    include_once('Core/db.php');
    include_once('Models/companyModel.php');

    class CompanyController{

        public function home(){
            
            if (isset($_POST['showCompany'])){
                $objCompany= new CompanyModel("","","","","","","");
                $objCompany->setCode($_POST['txbCode']);
                $objCompany->setName($_POST['txbName']);
                $objCompany->setNit($_POST['txbNit']);
                $company=$objCompany->show();
                
            }
            include_once('Views/company/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST)){

                $objCompany= new CompanyModel("","","","","","","");
                
                $objCompany->setCode($_POST['txbCode']);
                $objCompany->setName($_POST['txbName']);
                $objCompany->setNit($_POST['txbNit']);
                $objCompany->setRent($_POST['txbRent']);
                $objCompany->setAddress($_POST['txbAddress']);
                $objCompany->setPbx($_POST['txbPBX']);
                $objCompany->setMobile($_POST['txbMobile']);
                
                $res=$objCompany->insert();
                echo"<script language='javascript'>alert('Insercion correcta');</script>;";

            }
            include_once('Views/company/home.php');
               

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
                    $objCompany->setName($_POST['txbName']);
                    $objCompany->setNit($_POST['txbNit']);
                    $objCompany->setRent($_POST['txbRent']);
                    $objCompany->setAddress($_POST['txbAddress']);
                    $objCompany->setPbx($_POST['txbPBX']);
                    $objCompany->setMobile($_POST['txbMobile']);
                    
                    $upd=$objCompany->update();

                    echo"<script language='javascript'>window.location='?controller=company&action=home'</script>;";
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
                    $res=$objCompany->delete();
                    
                }
                
            } 
            catch (Exception $e) {
                $res="fail";
            }
            echo"<script language='javascript'>window.location='?controller=company&action=home'</script>;";
        }

    }

?>