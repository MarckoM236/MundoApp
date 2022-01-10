<?php 
    include_once('Core/baseModel.php');
    include_once('Core/db.php');
    include_once('Models/companyModel.php');

    class CompanyController{

        public function home(){

            include_once('Views/company/home.php');

        }
        public function insert(){
            
            if (isset($_POST)){

              
                $objCompany= new CompanyModel();
                
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

               

        }

        public function update(){}

    }

?>