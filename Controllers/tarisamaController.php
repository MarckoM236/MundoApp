<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/tarisamaModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/tipoAlimModel.php');


    class TarisamaController{

        public function home(){

            try {
                if (isset($_POST['showTariCart'])){
                    $objTariSama= new TarisamaModel("","","","","","","","","");
                    $objTariSama->setCodHotel($_POST['txbcodHotel']);
                    $tariSama=$objTariSama->show();

                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    
                }
                else{
                    $objTariSama= new TarisamaModel("","","","","","","","","");
                    $tariSama=$objTariSama->show();

                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //print_r($payment);
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }       
            include_once('Views/tarisama/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveTarisama'])){

                //Format date
                $dateInVi = date_create($_POST['txbDateInVi']);
                $div=date_format($dateInVi,"d/m/Y");

                $dateFiVi = date_create($_POST['txbDateFiVi']);
                $dfv=date_format($dateFiVi,"d/m/Y");

                $dateInEx = date_create($_POST['txbDateInEx']);
                $die=date_format($dateInEx,"d/m/Y");

                $dateFiEx = date_create($_POST['txbDateFiEx']);
                $dfe=date_format($dateFiEx,"d/m/Y");

                $objTariSama= new TarisamaModel("","","","","","","","","");
                
                $objTariSama->setCodHotel($_POST['txbCodeHotel']);
                $objTariSama->setCodTipAlim($_POST['txbCodeAlim']);
                $objTariSama->setCodAcom(1);
                $objTariSama->setFeinVig($div);
                $objTariSama->setFefiVig($dfv);
                $objTariSama->setFeinExe($die);
                $objTariSama->setFefiExe($dfe);
                $objTariSama->setValue($_POST['txbValueSencilla']);
                $objTariSama->setUser($_POST['txbUser']);
                
               $resInsert=$objTariSama->insert();
               //print_r($objTariSama);
            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objAcomodac= new AcomodacModel("","");
                    
                    $objAcomodac->setCode($_GET['code']);
                    $res=$objAcomodac->show();
                    //print_r($res);
                    include_once('Views/acomodac/edit.php');
                }
    
                if(isset($_POST['updateAcomodac'])){
                    //print_r($_POST);
                    $objAcomodac= new AcomodacModel("","");
                    
                    $objAcomodac->setCode($_POST['txbCode']);
                    $objAcomodac->setName(strtoupper($_POST['txbName']));
                    
                    $resUpdate=$objAcomodac->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objTariSama= new PaymentsModel("","","","","","","");
                    $objTariSama->setCode($_GET['code']);
                    $resDelete=$objTariSama->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>