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
                return json_encode($res);

            }
            include_once('Views/company/home.php');
               

        }

        public function update(){

            if(isset($_GET['code'])){
                $objCompany= new CompanyModel("","","","","","","");
                
                $objCompany->setCode($_GET['code']);
                $res=$objCompany->show();
                //print_r($res);
            }
            include_once('Views/company/edit.php');

        }

        public function delete(){

            if(isset($_GET['code'])){
                $objCompany= new CompanyModel("","","","","","","");
                
                $objCompany->setCode($_GET['code']);
                $objCompany->delete();
            }
            
            @header("Location:./?controller=company&action=home");
        }

    }

?>