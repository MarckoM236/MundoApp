<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/receandrModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/operatorModel.php');


    class ReceandrController{

        public function home(){

            try {
                if (isset($_POST['showReceAndr'])){
                    $objReceAndr= new NetoandrModel("","","","","","","","","");
                    $objReceAndr->setCodHotel($_GET['codeH']);
                    $objReceAndr->setCodTipAlim($_GET['codeA']);
                    $netoAndr=$objReceAndr->show();

                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //consultar registros
                    foreach($receAndr as $dataRece) {

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
                    
                        $arr_receandr[] =array("codeHotel" => $codeHotel,
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
                     $objReceAndr= new ReceandrModel("","","","","","","","","","","","");
                     $receAndr=$objReceAndr->show();

                     //consultar registros
                    foreach($receAndr as $dataRece) {

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
                    
                        $arr_receandr[] =array("codeHotel" => $codeHotel,
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
            include_once('Views/receandr/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveReceandr'])){
                //obj class
                $objReceAndr= new ReceandrModel("","","","","","","","","","","","");
                //array
                $arrReceandr=json_decode($_POST["arrReceandr"], true);
                //print_r($arrReceandr);
                
                foreach ($arrReceandr as $val) {
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

                    $objReceAndr->setCodOperator($val['codeOperator']);
                    $objReceAndr->setReceptivo($val['receptivo']);
                    $objReceAndr->setCodHotel($val['codeHotel']);
                    $objReceAndr->setZona($val['zona']);
                    $objReceAndr->setInicioDiurno($inDiu);
                    $objReceAndr->setFinDiurno($fiDiu);
                    $objReceAndr->setInicioNocturno($inNoc);
                    $objReceAndr->setFinNocturno($fiNoc);
                    $objReceAndr->setDiurno($dia);
                    $objReceAndr->setNocturno($noche);
                    $objReceAndr->setValue($valor);
                    $objReceAndr->setUser($_POST['txbUser']);

                    $resInsert=$objReceAndr->insert();
                    $con=$con+1;
                    }
               //print_r($objReceAndr);
                }
            return $resInsert;
            }
        }

        public function update(){

            try {
                //print_r($_GET);
                if(isset($_GET['codeO']) && isset($_GET['receptivo'])){
                    $objReceAndr= new ReceandrModel("","","","","","","","","","","","");
                    $objReceAndr->setCodOperator($_GET['codeO']);
                   $objReceAndr->setReceptivo($_GET['receptivo']);
                    $receAndr=$objReceAndr->show();
                    //print_r($res);
                    
                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult operator to complete field.
                    $objOperator= new OperatorModel("","","","","","","");
                    $operator=$objOperator->show();

                    //consultar registros
                    foreach($receAndr as $dataRece) {

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
                    
                        $arr_receandr[] =array("codeHotel" => $codeHotel,
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


                    include_once('Views/receandr/edit.php');
                }
    
                if(isset($_POST['updateReceandr'])){
                   //obj class
                $objReceAndr= new ReceandrModel("","","","","","","","","","","","");
                //array
                $arrReceandr=json_decode($_POST["arrReceandr"], true);
                //print_r($arrReceandr);
                
                foreach ($arrReceandr as $val) {
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

                    $objReceAndr->setCodOperator($val['codeOperator']);
                    $objReceAndr->setReceptivo($val['receptivo']);
                    $objReceAndr->setCodHotel($val['codeHotel']);
                    $objReceAndr->setZona($val['zona']);
                    $objReceAndr->setInicioDiurno($inDiu);
                    $objReceAndr->setFinDiurno($fiDiu);
                    $objReceAndr->setInicioNocturno($inNoc);
                    $objReceAndr->setFinNocturno($fiNoc);
                    $objReceAndr->setDiurno($dia);
                    $objReceAndr->setNocturno($noche);
                    $objReceAndr->setValue($valor);
                    $objReceAndr->setUser($_POST['txbUser']);

                    $resUpdate=$objReceAndr->update();
                    $con=$con+1;
                    }
               //print_r($objReceAndr);
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
                    $objReceAndr= new ReceandrModel("","","","","","","","","","","","");
                    $objReceAndr->setCodOperator($_GET['code1']);
                    $objReceAndr->setReceptivo(strval($_GET['code2']));
                    $resDelete=$objReceAndr->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>