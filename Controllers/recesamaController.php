<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/recesamaModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/operatorModel.php');


    class RecesamaController{

        public function home(){

            try {
                if (isset($_POST['showReceSama'])){
                    $objReceSama= new NetoandrModel("","","","","","","","","");
                    $objReceSama->setCodHotel($_GET['codeH']);
                    $objReceSama->setCodTipAlim($_GET['codeA']);
                    $netoAndr=$objReceSama->show();

                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //consultar registros
                    foreach($receSama as $dataRece) {

                        $codeHotel=$dataRece->getCodHotel();
                        $objHotel->setCode($codeHotel);
                        $hote=$objHotel->show();
                        foreach($hote as $dataHot) {
                            $nameHotel=$dataHot->getName();
                        }

                        $codeOper=$dataRece->getCodOperator();
                        $objOperator>setCode($codeOper);
                        $oper=$objOperator->show();
                        foreach($oper as $dataOper) {
                            $nameOper=$dataOper->getName();
                        }
                        $receptivo=$dataRece->getReceptivo();
                        $zona=$dataRece->getZona();
                        $inicioDiurno=$dataRece->getInicioDiurno();
                        $finDiurno=$dataRece->getFinDiurno();
                        $inicioNocturno=$dataRece->getInicioNocturno();
                        $finNocturno=$dataRece->getFinNocturno();
                        $diurno=$dataRece->getDiurno();
                        $nocturno=$dataRece->getNocturno();
                        $value=$dataRece->getValue();
                        $user=$dataRece->getUser();
                    
                        $arr_recesama[] =array("codeHotel" => $codeHotel,
                        "nameHotel" => $nameHotel,
                        "codeOper" => $codeOper,
                        "nameOper" => $nameOper,
                        "receptivo" => $receptivo,
                        "zona" => $zona,
                        "inicioDiurno" => $inicioDiurno,
                        "finDiurno" => $finDiurno,
                        "inicioNocturno" => $inicioNocturno,
                        "finNocturno" => $finNocturno,
                        "diurno" => $diurno,
                        "nocturno" => $nocturno,
                        "value" => $value);    
                    }


                    
                }
                else{
                     //Consult hotel to complete field.
                     $objHotel= new HotelModel("","","","","","","","");
                     $hotel=$objHotel->show();
 
                     //Consult operator to complete field.
                     $objOperator= new OperatorModel("","","","","","","");
                     $operator=$objOperator->show();

                     //obj class
                     $objReceSama= new RecesamaModel("","","","","","","","","","","","");
                     $receSama=$objReceSama->show();

                     //consultar registros
                    foreach($receSama as $dataRece) {

                        $codeHotel=$dataRece->getCodHotel();
                        $objHotel->setCode($codeHotel);
                        $hote=$objHotel->show();
                        foreach($hote as $dataHot) {
                            $nameHotel=$dataHot->getName();
                        }

                        $codeOper=$dataRece->getCodOperator();
                        $objOperator->setCode($codeOper);
                        $oper=$objOperator->show();
                        foreach($oper as $dataOper) {
                            $nameOper=$dataOper->getName();
                        }
                        $receptivo=$dataRece->getReceptivo();
                        $zona=$dataRece->getZona();
                        $inicioDiurno=$dataRece->getInicioDiurno();
                        $finDiurno=$dataRece->getFinDiurno();
                        $inicioNocturno=$dataRece->getInicioNocturno();
                        $finNocturno=$dataRece->getFinNocturno();
                        $diurno=$dataRece->getDiurno();
                        $nocturno=$dataRece->getNocturno();
                        $value=$dataRece->getValue();
                        $user=$dataRece->getUser();
                    
                        $arr_recesama[] =array("codeHotel" => $codeHotel,
                        "nameHotel" => $nameHotel,
                        "codeOper" => $codeOper,
                        "nameOper" => $nameOper,
                        "receptivo" => $receptivo,
                        "zona" => $zona,
                        "inicioDiurno" => $inicioDiurno,
                        "finDiurno" => $finDiurno,
                        "inicioNocturno" => $inicioNocturno,
                        "finNocturno" => $finNocturno,
                        "diurno" => $diurno,
                        "nocturno" => $nocturno,
                        "value" => $value);    
                    }

                     
                    
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }       
            include_once('Views/recesama/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveRecesama'])){
                //obj class
                $objReceSama= new RecesamaModel("","","","","","","","","","","","");
                //array
                $arrRecesama=json_decode($_POST["arrRecesama"], true);
                //print_r($arrRecesama);
                
                foreach ($arrRecesama as $val) {
                    $con=1;
                    while($con<=2){
                        switch ($con) {   
                            case 1:
                                $dia="D";
                                $noche="";
                                $valor=$val['valueDiurno'];
                                break;   
                            case 2:
                                $dia="";
                                $noche="N";
                                $valor=$val['valueNocturno'];
                                break;  
                         }
                    //Format date
                    $hoinDiu = date_create($val['hoinDiu'].":00");
                    $inDiu=date_format($hoinDiu,"H:i:s");

                    $hofiDiu = date_create($val['hofiDiu'].":00");
                    $fiDiu=date_format($hofiDiu,"H:i:s");

                    $hoinNoc = date_create($val['hoinNoc'].":00");
                    $inNoc=date_format($hoinNoc,"H:i:s");

                    $hofiNoc = date_create($val['hofiNoc'].":00");
                    $fiNoc=date_format($hofiNoc,"H:i:s");  

                    $objReceSama->setCodOperator($val['codeOperator']);
                    $objReceSama->setReceptivo($val['receptivo']);
                    $objReceSama->setCodHotel($val['codeHotel']);
                    $objReceSama->setZona($val['zona']);
                    $objReceSama->setInicioDiurno($inDiu);
                    $objReceSama->setFinDiurno($fiDiu);
                    $objReceSama->setInicioNocturno($inNoc);
                    $objReceSama->setFinNocturno($fiNoc);
                    $objReceSama->setDiurno($dia);
                    $objReceSama->setNocturno($noche);
                    $objReceSama->setValue($valor);
                    $objReceSama->setUser($_POST['txbUser']);

                    $resInsert=$objReceSama->insert();
                    $con=$con+1;
                    }
               //print_r($objReceSama);
                }
            return $resInsert;
            }
        }

        public function update(){

            try {
                //print_r($_GET);
                if(isset($_GET['codeO']) && isset($_GET['receptivo'])){
                    $objReceSama= new RecesamaModel("","","","","","","","","","","","");
                    $objReceSama->setCodOperator($_GET['codeO']);
                   $objReceSama->setReceptivo($_GET['receptivo']);
                    $receSama=$objReceSama->show();
                    //print_r($res);
                    
                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult operator to complete field.
                    $objOperator= new OperatorModel("","","","","","","");
                    $operator=$objOperator->show();

                    //consultar registros
                    foreach($receSama as $dataRece) {

                        $codeHotel=$dataRece->getCodHotel();
                        $objHotel->setCode($codeHotel);
                        $hote=$objHotel->show();
                        foreach($hote as $dataHot) {
                            $nameHotel=$dataHot->getName();
                        }

                        $codeOper=$dataRece->getCodOperator();
                        $objOperator->setCode($codeOper);
                        $oper=$objOperator->show();
                        foreach($oper as $dataOper) {
                            $nameOper=$dataOper->getName();
                        }
                        $receptivo=$dataRece->getReceptivo();
                        $zona=$dataRece->getZona();
                        $inicioDiurno=$dataRece->getInicioDiurno();
                        $finDiurno=$dataRece->getFinDiurno();
                        $inicioNocturno=$dataRece->getInicioNocturno();
                        $finNocturno=$dataRece->getFinNocturno();
                        $diurno=$dataRece->getDiurno();
                        $nocturno=$dataRece->getNocturno();
                        $value=$dataRece->getValue();
                        $user=$dataRece->getUser();
                    
                        $arr_recesama[] =array("codeHotel" => $codeHotel,
                        "nameHotel" => $nameHotel,
                        "codeOper" => $codeOper,
                        "nameOper" => $nameOper,
                        "receptivo" => $receptivo,
                        "zona" => $zona,
                        "inicioDiurno" => $inicioDiurno,
                        "finDiurno" => $finDiurno,
                        "inicioNocturno" => $inicioNocturno,
                        "finNocturno" => $finNocturno,
                        "diurno" => $diurno,
                        "nocturno" => $nocturno,
                        "value" => $value);    
                    }


                    include_once('Views/recesama/edit.php');
                }
    
                if(isset($_POST['updateRecesama'])){
                   //obj class
                $objReceSama= new RecesamaModel("","","","","","","","","","","","");
                //array
                $arrRecesama=json_decode($_POST["arrRecesama"], true);
                //print_r($arrRecesama);
                
                foreach ($arrRecesama as $val) {
                    $con=1;
                    while($con<=2){
                        switch ($con) {   
                            case 1:
                                $dia="D";
                                $noche="";
                                $valor=$val['valueDiurno'];
                                break;   
                            case 2:
                                $dia="";
                                $noche="N";
                                $valor=$val['valueNocturno'];
                                break;  
                         }
                    //Format date
                    $hoinDiu = date_create($val['hoinDiu'].":00");
                    $inDiu=date_format($hoinDiu,"H:i:s");

                    $hofiDiu = date_create($val['hofiDiu'].":00");
                    $fiDiu=date_format($hofiDiu,"H:i:s");

                    $hoinNoc = date_create($val['hoinNoc'].":00");
                    $inNoc=date_format($hoinNoc,"H:i:s");

                    $hofiNoc = date_create($val['hofiNoc'].":00");
                    $fiNoc=date_format($hofiNoc,"H:i:s");  

                    $objReceSama->setCodOperator($val['codeOperator']);
                    $objReceSama->setReceptivo($val['receptivo']);
                    $objReceSama->setCodHotel($val['codeHotel']);
                    $objReceSama->setZona($val['zona']);
                    $objReceSama->setInicioDiurno($inDiu);
                    $objReceSama->setFinDiurno($fiDiu);
                    $objReceSama->setInicioNocturno($inNoc);
                    $objReceSama->setFinNocturno($fiNoc);
                    $objReceSama->setDiurno($dia);
                    $objReceSama->setNocturno($noche);
                    $objReceSama->setValue($valor);
                    $objReceSama->setUser($_POST['txbUser']);

                    $resUpdate=$objReceSama->update();
                    $con=$con+1;
                    }
               //print_r($objReceSama);
                }
            return $resUpdate; 
            }
                
            

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code1']) && isset($_GET['code2'])){
                    $objReceSama= new RecesamaModel("","","","","","","","","","","","");
                    $objReceSama->setCodOperator($_GET['code1']);
                    $objReceSama->setReceptivo(strval($_GET['code2']));
                    $resDelete=$objReceSama->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>