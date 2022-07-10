<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/rececartModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/operatorModel.php');


    class RececartController{

        public function home(){

            try {
                if (isset($_POST['showReceCart'])){
                    $objReceCart= new NetoandrModel("","","","","","","","","");
                    $objReceCart->setCodHotel($_GET['codeH']);
                    $objReceCart->setCodTipAlim($_GET['codeA']);
                    $netoAndr=$objReceCart->show();

                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //consultar registros
                    foreach($receCart as $dataRece) {

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
                    
                        $arr_rececart[] =array("codeHotel" => $codeHotel,
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
                     $objReceCart= new RececartModel("","","","","","","","","","","","");
                     $receCart=$objReceCart->show();

                     //consultar registros
                    foreach($receCart as $dataRece) {

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
                    
                        $arr_rececart[] =array("codeHotel" => $codeHotel,
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
            include_once('Views/rececart/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveRececart'])){
                //obj class
                $objReceCart= new RececartModel("","","","","","","","","","","","");
                //array
                $arrRececart=json_decode($_POST["arrRececart"], true);
                //print_r($arrRececart);
                
                foreach ($arrRececart as $val) {
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

                    $objReceCart->setCodOperator($val['codeOperator']);
                    $objReceCart->setReceptivo($val['receptivo']);
                    $objReceCart->setCodHotel($val['codeHotel']);
                    $objReceCart->setZona($val['zona']);
                    $objReceCart->setInicioDiurno($inDiu);
                    $objReceCart->setFinDiurno($fiDiu);
                    $objReceCart->setInicioNocturno($inNoc);
                    $objReceCart->setFinNocturno($fiNoc);
                    $objReceCart->setDiurno($dia);
                    $objReceCart->setNocturno($noche);
                    $objReceCart->setValue($valor);
                    $objReceCart->setUser($_POST['txbUser']);

                    $resInsert=$objReceCart->insert();
                    $con=$con+1;
                    }
               //print_r($objReceCart);
                }
            return $resInsert;
            }
        }

        public function update(){

            try {
                //print_r($_GET);
                if(isset($_GET['codeO']) && isset($_GET['receptivo'])){
                    $objReceCart= new RececartModel("","","","","","","","","","","","");
                    $objReceCart->setCodOperator($_GET['codeO']);
                   $objReceCart->setReceptivo($_GET['receptivo']);
                    $receCart=$objReceCart->show();
                    //print_r($res);
                    
                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult operator to complete field.
                    $objOperator= new OperatorModel("","","","","","","");
                    $operator=$objOperator->show();

                    //consultar registros
                    foreach($receCart as $dataRece) {

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
                    
                        $arr_rececart[] =array("codeHotel" => $codeHotel,
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


                    include_once('Views/rececart/edit.php');
                }
    
                if(isset($_POST['updateRececart'])){
                   //obj class
                $objReceCart= new RececartModel("","","","","","","","","","","","");
                //array
                $arrRececart=json_decode($_POST["arrRececart"], true);
                //print_r($arrRececart);
                
                foreach ($arrRececart as $val) {
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

                    $objReceCart->setCodOperator($val['codeOperator']);
                    $objReceCart->setReceptivo($val['receptivo']);
                    $objReceCart->setCodHotel($val['codeHotel']);
                    $objReceCart->setZona($val['zona']);
                    $objReceCart->setInicioDiurno($inDiu);
                    $objReceCart->setFinDiurno($fiDiu);
                    $objReceCart->setInicioNocturno($inNoc);
                    $objReceCart->setFinNocturno($fiNoc);
                    $objReceCart->setDiurno($dia);
                    $objReceCart->setNocturno($noche);
                    $objReceCart->setValue($valor);
                    $objReceCart->setUser($_POST['txbUser']);

                    $resUpdate=$objReceCart->update();
                    $con=$con+1;
                    }
               //print_r($objReceCart);
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
                    $objReceCart= new RececartModel("","","","","","","","","","","","");
                    $objReceCart->setCodOperator($_GET['code1']);
                    $objReceCart->setReceptivo(strval($_GET['code2']));
                    $resDelete=$objReceCart->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>