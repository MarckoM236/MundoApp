<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/bloqdetaModel.php');
    @include_once('Models/travelerModel.php');

    class BloqdetaController{

        public function home(){
            
            try {
                if (isset($_POST['showBloqdeta'])){
                    $objBloqDeta= new BloqdetaModel("","","","","","");
                    $objBloqDeta->setCode($_POST['txbCode']);
                    $bloqDeta=$objBloqDeta->show();   
                }
                else{
                    $objBloqDeta= new BloqdetaModel("","","","","","");
                    $bloqDeta=$objBloqDeta->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/bloquedeta/home.php');

        }

        public function showTraveler(){
            if (isset($_POST['ShowTraveler']) & !empty($_POST['txbCodTraveler'])){
                $objTraveler= new TravelerModel("","","","");
                $objTraveler->setId($_POST['txbCodTraveler']);
                $traveler=$objTraveler->show();

                foreach($traveler as $data) {
                    $nameTraveler=$data->getName();    
                    $lastName=$data->getLastName();
                    $bDate=$data->getBirthDate();

                    //format date
                    $dataBD=str_replace("/","-",$bDate);
                    $birthDate = date("Y-m-d", strtotime($dataBD));
                    
                } 
            }
            else{
                $nameTraveler="";    
                $lastName="";
                $birthDate="";
            }

            return $arrTraveler[]= array("name"=>$nameTraveler,"lastName"=>$lastName,"birthDate"=>$birthDate);
        }
        

        public function insert(){
            
            if (isset($_POST['saveBloqdeta'])){

                $arrBTJson=json_decode($_POST["arrBTJson"], true);
                //print_r($arrBTJson);
                foreach ($arrBTJson as $val) {

                    //Format date
                    $dateN = date_create($val['dateN']);
                    $fn=date_format($dateN,"d/m/Y");

                    $objBloqDeta= new BloqdetaModel("","","","","","");
                    $objBloqDeta->setCode($val['code']);
                    $objBloqDeta->setCodeLiqu($val['liquidac']);
                    $objBloqDeta->setIdTraveler($val['id']);
                    $objBloqDeta->setNomTraveler(strtoupper($val['name']));
                    $objBloqDeta->setApeTraveler(strtoupper($val['lastName']));
                    $objBloqDeta->setDateFenaTraveler(strtoupper($fn));
                    
                    $resInsert=$objBloqDeta->insert();
                      
                }
            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objBloqDeta= new ConceptoModel("","");
                    
                    $objBloqDeta->setCode($_GET['code']);
                    $res=$objBloqDeta->show();
                    //print_r($res);
                    include_once('Views/bloqDeta/edit.php');
                }
    
                if(isset($_POST['updateConcepto'])){
                    //print_r($_POST);
                    $objBloqDeta= new ConceptoModel("","");
                    
                    $objBloqDeta->setCode($_POST['txbCode']);
                    $objBloqDeta->setName(strtoupper($_POST['txbName']));
                    
                    $resUpdate=$objBloqDeta->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objBloqDeta= new ConceptoModel("","");
                    
                    $objBloqDeta->setCode($_GET['code']);
                    $resDelete=$objBloqDeta->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>