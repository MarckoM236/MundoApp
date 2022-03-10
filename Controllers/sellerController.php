<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/sellerModel.php');

    class SellerController{

        public function home(){
            
            try {
                if (isset($_POST['showSeller'])){
                    $objSeller= new SellerModel("","","","");
                    $objSeller->setId($_POST['txbId']);
                    $objSeller->setName(strtoupper($_POST['txbName']));
                    $objSeller->setLastName(strtoupper($_POST['txbLastName']));
                    $seller=$objSeller->show();
                }
                else{
                    $objSeller= new SellerModel("","","","");
                    $seller=$objSeller->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/seller/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveSeller'])){

                $objSeller= new SellerModel("","","","");
                
                $objSeller->setId($_POST['txbId']);
                $objSeller->setName(strtoupper($_POST['txbName']));
                $objSeller->setLastName(strtoupper($_POST['txbLastName']));
                $objSeller->setStatus($_POST['txbStatus']);
                //$resInsert=$_POST;
                $resInsert=$objSeller->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['id'])){
                    $objSeller= new SellerModel("","","","");
                    
                    $objSeller->setId($_GET['id']);
                    $res=$objSeller->show();
                    //print_r($_GET);
                    include_once('Views/seller/edit.php');
                }
    
                if(isset($_POST['updateSeller'])){
                    //print_r($_POST);
                    $objSeller= new SellerModel("","","","");
                    
                    $objSeller->setId($_POST['txbId']);
                    $objSeller->setName(strtoupper($_POST['txbName']));
                    $objSeller->setLastName(strtoupper($_POST['txbLastName']));
                    $objSeller->setStatus($_POST['txbStatus']);

                    $resUpdate=$objSeller->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['id'])){
                    $objSeller= new SellerModel("","","","");
                    
                    $objSeller->setId($_GET['id']);
                    //$resDelete=$_GET;
                    $resDelete=$objSeller->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>