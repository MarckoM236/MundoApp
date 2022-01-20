<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/planModel.php');

    class PlanController{

        public function home(){
            
            try {
                if (isset($_POST['showPlan'])){
                    $objPlan= new PlanModel("","");
                    $objPlan->setCode($_POST['txbCode']);
                    $objPlan->setName($_POST['txbName']);
                    $plan=$objPlan->show();
                    
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/plan/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['savePlan'])){

                $objPlan= new PlanModel("","");
                
                $objPlan->setCode($_POST['txbCode']);
                $objPlan->setName($_POST['txbName']);
                
                $resInsert=$objPlan->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objPlan= new PlanModel("","","","","","","");
                    
                    $objPlan->setCode($_GET['code']);
                    $res=$objPlan->show();
                    //print_r($res);
                    include_once('Views/plan/edit.php');
                }
    
                if(isset($_POST['updatePlan'])){
                    //print_r($_POST);
                    $objPlan= new PlanModel("","");
                    
                    $objPlan->setCode($_POST['txbCode']);
                    $objPlan->setName($_POST['txbName']);
                    
                    $resUpdate=$objPlan->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objPlan= new PlanModel("","");
                    
                    $objPlan->setCode($_GET['code']);
                    $resDelete=$objPlan->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>