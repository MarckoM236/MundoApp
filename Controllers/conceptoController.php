<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/conceptoModel.php');

    class ConceptoController{

        public function home(){
            
            try {
                if (isset($_POST['showConcepto'])){
                    $objConcepto= new ConceptoModel("","");
                    $objConcepto->setCode($_POST['txbCode']);
                    $objConcepto->setName($_POST['txbName']);
                    $concepto=$objConcepto->show();   
                }
                else{
                    $objConcepto= new ConceptoModel("","");
                    $concepto=$objConcepto->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/concepto/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveConcepto'])){

                $objConcepto= new ConceptoModel("","");
                
                $objConcepto->setCode($_POST['txbCode']);
                $objConcepto->setName($_POST['txbName']);
                
                $resInsert=$objConcepto->insert();

            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objConcepto= new ConceptoModel("","");
                    
                    $objConcepto->setCode($_GET['code']);
                    $res=$objConcepto->show();
                    //print_r($res);
                    include_once('Views/concepto/edit.php');
                }
    
                if(isset($_POST['updateConcepto'])){
                    //print_r($_POST);
                    $objConcepto= new ConceptoModel("","");
                    
                    $objConcepto->setCode($_POST['txbCode']);
                    $objConcepto->setName($_POST['txbName']);
                    
                    $resUpdate=$objConcepto->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objConcepto= new ConceptoModel("","");
                    
                    $objConcepto->setCode($_GET['code']);
                    $resDelete=$objConcepto->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>