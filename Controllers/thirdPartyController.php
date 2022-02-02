<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/thirdPartyModel.php');

    class ThirdPartyController{

        public function home(){
            
            try {
                if (isset($_POST['showThirdParty'])){
                    $objThirdParty= new ThirdPartyModel("","","","","");
                    $objThirdParty->setId($_POST['txbId']);
                    $objThirdParty->setName($_POST['txbName']);

                    $thirdParty=$objThirdParty->show();
                    
                }
                else{
                    $objThirdParty= new ThirdPartyModel("","","","",""); 
                    $thirdParty=$objThirdParty->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/thirdParty/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveThirdParty'])){

                $objThirdParty= new ThirdPartyModel("","","","","");
                
                $objThirdParty->setId($_POST['txbId']);
                $objThirdParty->setName($_POST['txbName']);
                $objThirdParty->setAddress($_POST['txbAddress']);
                $objThirdParty->setPhone($_POST['txbPhone']);
                $objThirdParty->setEmail($_POST['txbEmail']);
                //print_r($_POST);
                $resInsert=$objThirdParty->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objThirdParty= new ThirdPartyModel("","","","","");
                    
                    $objThirdParty->setId($_GET['code']);
                    $res=$objThirdParty->show();
                    //print_r($res);
                    include_once('Views/thirdParty/edit.php');
                }
    
                if(isset($_POST['updateThirdParty'])){
                    //print_r($_POST);

                    $objThirdParty= new ThirdPartyModel("","","","","");
                
                    $objThirdParty->setId($_POST['txbId']);
                    $objThirdParty->setName($_POST['txbName']);
                    $objThirdParty->setAddress($_POST['txbAddress']);
                    $objThirdParty->setPhone($_POST['txbPhone']);
                    $objThirdParty->setEmail($_POST['txbEmail']);

                    $resUpdate=$objThirdParty->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['id'])){
                    $objThirdParty= new ThirdPartyModel("","","","","");
                    
                    $objThirdParty->setId($_GET['id']);
                    $resDelete=$objThirdParty->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>