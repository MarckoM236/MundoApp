<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/hotelModel.php');

    class HotelController{

        public function home(){
            
            try {
                if (isset($_POST['showHotel'])){
                    $objHotel= new HotelModel("","","","","","","","");
                    $objHotel->setCode($_POST['txbCode']);
                    $objHotel->setName($_POST['txbName']);
                    $objHotel->setNit($_POST['txbNit']);

                    $hotel=$objHotel->show();
                    
                }
                else{
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }
            include_once('Views/hotel/home.php');

        }
        

        public function insert(){
            
            if (isset($_POST['saveHotel'])){

                $objHotel= new HotelModel("","","","","","","","");
                
                $objHotel->setCode($_POST['txbCode']);
                $objHotel->setName($_POST['txbName']);
                $objHotel->setNit($_POST['txbNit']);
                $objHotel->setAddress($_POST['txbAddress']);
                $objHotel->setPhone($_POST['txbPhone']);
                $objHotel->setStatus($_POST['txbStatus']);
                $objHotel->setEmail($_POST['txbEmail']);
                $objHotel->setMobile($_POST['txbMobile']);
                
                $resInsert=$objHotel->insert();
            }
            return $resInsert;
        }

        public function update(){

            try {
                
                if(isset($_GET['code'])){
                    $objHotel= new HotelModel("","","","","","","","");
                    
                    $objHotel->setCode($_GET['code']);
                    $res=$objHotel->show();
                    //print_r($res);
                    include_once('Views/hotel/edit.php');
                }
    
                if(isset($_POST['updateHotel'])){
                    //print_r($_POST);

                    $objHotel= new HotelModel("","","","","","","","");
                
                    $objHotel->setCode($_POST['txbCode']);
                    $objHotel->setName($_POST['txbName']);
                    $objHotel->setNit($_POST['txbNit']);
                    $objHotel->setAddress($_POST['txbAddress']);
                    $objHotel->setPhone($_POST['txbPhone']);
                    $objHotel->setStatus($_POST['txbStatus']);
                    $objHotel->setEmail($_POST['txbEmail']);
                    $objHotel->setMobile($_POST['txbMobile']);
                

                    $resUpdate=$objHotel->update();
                    return $resUpdate;

                }
                

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objHotel= new HotelModel("","","","","","","","");
                    
                    $objHotel->setCode($_GET['code']);
                    $resDelete=$objHotel->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>