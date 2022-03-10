<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/travelerModel.php');

    class TravelerController{

        public function home(){
            
            try {
                if (isset($_POST['showTraveler'])){
                    $objTraveler= new TravelerModel("","","","");
                    $objTraveler->setId($_POST['txbId']);
                    $objTraveler->setName(strtoupper($_POST['txbName']));
                    $traveler=$objTraveler->show();  
                }
                else{
                    $objTraveler= new TravelerModel("","","","");
                    $traveler=$objTraveler->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/traveler/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveTraveler'])){
                
                $bDate = date_create($_POST['txbBirthDate']);
                $birthDate=date_format($bDate,"d/m/Y");

                $objTraveler= new TravelerModel("","","","");

                $objTraveler->setId($_POST['txbId']);
                $objTraveler->setName(strtoupper($_POST['txbName']));
                $objTraveler->setLastName(strtoupper($_POST['txbLastName']));
                $objTraveler->setBirthDate($birthDate);
                
                $resInsert=$objTraveler->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['id'])){
                    $objTraveler= new TravelerModel("","","","");
                    
                    $objTraveler->setId($_GET['id']);
                    $res=$objTraveler->show();
                    //print_r($res);
                    include_once('Views/traveler/edit.php');
                }
    
                if(isset($_POST['updateTraveler'])){
                    //print_r($_POST);
                    $bDate = date_create($_POST['txbBirthDate']);
                    $birthDate=date_format($bDate,"d/m/Y");

                    $objTraveler= new TravelerModel("","","","");

                    $objTraveler->setId($_POST['txbId']);
                    $objTraveler->setName(strtoupper($_POST['txbName']));
                    $objTraveler->setLastName(strtoupper($_POST['txbLastName']));
                    $objTraveler->setBirthDate($birthDate);
                        
                    $resUpdate=$objTraveler->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['id'])){
                    $objTraveler= new TravelerModel("","","","");
                    
                    $objTraveler->setId($_GET['id']);
                    $resDelete=$objTraveler->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>