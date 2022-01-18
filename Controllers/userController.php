<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/userModel.php');

    class UserController{

        public function home(){
            
            try {
                if (isset($_POST['showUser'])){
                    $objUser= new UserModel("","","","");
                    $objUser->setCode($_POST['txbCode']);
                    $objUser->setName($_POST['txbName']);
                    $user=$objUser->show();
                    
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/user/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveUser'])){

                $objUser= new UserModel("","","","");

                $objUser->setCode($_POST['txbCode']);
                $objUser->setName($_POST['txbName']);
                $objUser->setPass($_POST['txbPass']);
                $objUser->setStatus($_POST['txbStatus']);
                
                $resInsert=$objUser->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objUser= new UserModel("","","","");
                    
                    $objUser->setCode($_GET['code']);
                    $res=$objUser->show();
                    //print_r($res);
                    include_once('Views/user/edit.php');
                }
    
                if(isset($_POST['updateUser'])){
                    //print_r($_POST);
                    $objUser= new UserModel("","","","");
                    
                    $objUser->setCode($_POST['txbCode']);
                    $objUser->setName($_POST['txbName']);
                    $objUser->setPass($_POST['txbPass']);
                    $objUser->setStatus($_POST['txbStatus']);
                    
                    $resUpdate=$objUser->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objUser= new UserModel("","","","");
                    
                    $objUser->setCode($_GET['code']);
                    $resDelete=$objUser->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>