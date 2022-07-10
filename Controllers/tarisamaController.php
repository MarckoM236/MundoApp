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
                if (isset($_POST['showTariSama'])){
                    $objTariSama= new TarisamaModel("","","","","","","","","");
                    $objTariSama->setCodHotel(72);
                    $objTariSama->setCodTipAlim(5);
                    $tariSama=$objTariSama->show();

                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //consultar registros
                    foreach($tariSama as $dataTari) {

                        $codeHotel=$dataTari->getCodHotel();
                        $objHotel->setCode($codeHotel);
                        $hote=$objHotel->show();
                        foreach($hote as $dataHot) {
                            $nameHotel=$dataHot->getName();
                        }

                        $codeAlim=$dataTari->getCodTipAlim();
                        $ali=$objAlim->setCode($codeAlim);
                        $ali=$objAlim->show();
                        foreach($ali as $dataAli) {
                            $nameAli=$dataAli->getName();
                        }
                        $codeAcomodac=$dataTari->getCodAcom();
                        $dateVigIni=$dataTari->getFeinVig();
                        $dateVigFin=$dataTari->getFefiVig();
                        $dateExeIni=$dataTari->getFeinExe();
                        $dateExeFin=$dataTari->getFefiExe();
                        $valor=$dataTari->getValue();
                        $user=$dataTari->getUser();
                    
                        $arr_tarisama[] =array("codeHotel" => $codeHotel,
                        "nameHotel" => $nameHotel,
                        "codeAlim" => $codeAlim,
                        "nameAlim" => $nameAli,
                        "acomodac" => $codeAcomodac,
                        "dateVigIni" => $dateVigIni,
                        "dateVigFin" => $dateVigFin,
                        "dateExeIni" => $dateExeIni,
                        "dateExe" => $dateExeFin,
                        "value" => $valor);    
                    }

                    
                }
                else{
                     //Consult hotel to complete field.
                     $objHotel= new HotelModel("","","","","","","","");
                     $hotel=$objHotel->show();
 
                     //Consult tipoAlim to complete field.
                     $objAlim= new TipoAlimModel("","");
                     $alim=$objAlim->show();

                     $objTariSama= new TarisamaModel("","","","","","","","","");
                    $tariSama=$objTariSama->show();

                    foreach($tariSama as $dataTari) {
                         $con=1;
                        $codeHotel=$dataTari->getCodHotel();
                        $objHotel->setCode($codeHotel);
                        $hote=$objHotel->show();
                        foreach($hote as $dataHot) {
                            $nameHotel=$dataHot->getName();
                        }

                        $codeAlim=$dataTari->getCodTipAlim();
                        $ali=$objAlim->setCode($codeAlim);
                        $ali=$objAlim->show();
                        foreach($ali as $dataAli) {
                            $nameAli=$dataAli->getName();
                        }
                        $codeAcomodac=$dataTari->getCodAcom();
                        $dateVigIni=$dataTari->getFeinVig();
                        $dateVigFin=$dataTari->getFefiVig();
                        $dateExeIni=$dataTari->getFeinExe();
                        $dateExeFin=$dataTari->getFefiExe();
                        $valor=$dataTari->getValue();
                        $user=$dataTari->getUser();

                        
                            $arr_tarisama[] =array("codeHotel" => $codeHotel,
                        "nameHotel" => $nameHotel,
                        "codeAlim" => $codeAlim,
                        "nameAlim" => $nameAli,
                        "acomodac" => $codeAcomodac,
                        "dateVigIni" => $dateVigIni,
                        "dateVigFin" => $dateVigFin,
                        "dateExeIni" => $dateExeIni,
                        "dateExe" => $dateExeFin,
                        "value" => $valor); 

                        
                    
                    
                           
                    }

                    
                }
            } 
            catch (Exception $e) {
                //throw $th;
            }       
            include_once('Views/tarisama/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveTarisama'])){
                //obj class
                $objTariSama= new TarisamaModel("","","","","","","","","");
                //array
                $arrTarisama=json_decode($_POST["arrTarisama"], true);
                //print_r($arrTarisama);
                
                foreach ($arrTarisama as $val) {
                    $con=1;
                    while($con<=5){
                        switch ($con) {   
                            case 1:
                                $acomodac=1;
                                $valor=$val['sencilla'];
                                break;   
                            case 2:
                                $acomodac=2;
                                $valor=$val['doble'];
                                break;  
                            case 3:
                                $acomodac=3;
                                $valor=$val['triple'];
                                break; 
                            case 4:
                                $acomodac=4;
                                $valor=$val['cuadruple'];
                                break;
                            case 5:
                                $acomodac=5;
                                $valor=$val['nino'];
                                break;   
                         }
                    //Format date
                    $dateInVi = date_create($val['dateInVi']);
                    $div=date_format($dateInVi,"d/m/Y");

                    $dateFiVi = date_create($val['dateFiVi']);
                    $dfv=date_format($dateFiVi,"d/m/Y");

                    $dateInEx = date_create($val['dateInEx']);
                    $die=date_format($dateInEx,"d/m/Y");

                    $dateFiEx = date_create($val['dateFiEx']);
                    $dfe=date_format($dateFiEx,"d/m/Y");    

                    $objTariSama->setCodHotel($val['codeHotel']);
                    $objTariSama->setCodTipAlim($val['alim']);
                    $objTariSama->setCodAcom($acomodac);
                    $objTariSama->setFeinVig($div);
                    $objTariSama->setFefiVig($dfv);
                    $objTariSama->setFeinExe($die);
                    $objTariSama->setFefiExe($dfe);
                    $objTariSama->setValue($valor);
                    $objTariSama->setUser($_POST['txbUser']);

                    $resInsert=$objTariSama->insert();
                    $con=$con+1;
                    }
               //print_r($objTariSama);
                }
            return $resInsert;
            }
        }

        public function update(){

            try {
                
                if(isset($_GET['codeH']) && isset($_GET['codeA'])){
                    $objTariSama= new TarisamaModel("","","","","","","","","");
                    $objTariSama->setCodHotel($_GET['codeH']);
                   $objTariSama->setCodTipAlim($_GET['codeA']);
                    $res=$objTariSama->show();
                    //print_r($res);
                    
                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //consultar registros
                    foreach($res as $dataTari) {

                        $codeHotel=$dataTari->getCodHotel();
                        $objHotel->setCode($codeHotel);
                        $hote=$objHotel->show();
                        foreach($hote as $dataHot) {
                            $nameHotel=$dataHot->getName();
                        }

                        $codeAlim=$dataTari->getCodTipAlim();
                        $ali=$objAlim->setCode($codeAlim);
                        $ali=$objAlim->show();
                        foreach($ali as $dataAli) {
                            $nameAli=$dataAli->getName();
                        }
                        $codeAcomodac=$dataTari->getCodAcom();
                        $dateVigIni=$dataTari->getFeinVig();
                        $dateVigFin=$dataTari->getFefiVig();
                        $dateExeIni=$dataTari->getFeinExe();
                        $dateExeFin=$dataTari->getFefiExe();
                        $valor=$dataTari->getValue();
                        $user=$dataTari->getUser();
                    
                        $arr_tarisama[] =array("codeHotel" => $codeHotel,
                        "nameHotel" => $nameHotel,
                        "codeAlim" => $codeAlim,
                        "nameAlim" => $nameAli,
                        "acomodac" => $codeAcomodac,
                        "dateVigIni" => $dateVigIni,
                        "dateVigFin" => $dateVigFin,
                        "dateExeIni" => $dateExeIni,
                        "dateExeFin" => $dateExeFin,
                        "value" => $valor);    
                    }

                    include_once('Views/tarisama/edit.php');
                }
    
                if(isset($_POST['updateTarisama'])){
                   //obj class
                $objTariSama= new TarisamaModel("","","","","","","","","");
                //array
                $arrTarisama=json_decode($_POST["arrTarisama"], true);
                //print_r($arrTarisama);
                
                foreach ($arrTarisama as $val) {
                    $con=1;
                    while($con<=5){
                        switch ($con) {   
                            case 1:
                                $acomodac=1;
                                $valor=$val['sencilla'];
                                break;   
                            case 2:
                                $acomodac=2;
                                $valor=$val['doble'];
                                break;  
                            case 3:
                                $acomodac=3;
                                $valor=$val['triple'];
                                break; 
                            case 4:
                                $acomodac=4;
                                $valor=$val['cuadruple'];
                                break;
                            case 5:
                                $acomodac=5;
                                $valor=$val['nino'];
                                break;   
                         }
                    //Format date
                    $dateInVi = date_create($val['dateInVi']);
                    $div=date_format($dateInVi,"d/m/Y");

                    $dateFiVi = date_create($val['dateFiVi']);
                    $dfv=date_format($dateFiVi,"d/m/Y");

                    $dateInEx = date_create($val['dateInEx']);
                    $die=date_format($dateInEx,"d/m/Y");

                    $dateFiEx = date_create($val['dateFiEx']);
                    $dfe=date_format($dateFiEx,"d/m/Y");    

                    $objTariSama->setCodHotel($val['codeHotel']);
                    $objTariSama->setCodTipAlim($val['alim']);
                    $objTariSama->setCodAcom($acomodac);
                    $objTariSama->setFeinVig($div);
                    $objTariSama->setFefiVig($dfv);
                    $objTariSama->setFeinExe($die);
                    $objTariSama->setFefiExe($dfe);
                    $objTariSama->setValue($valor);

                    $resUpdate=$objTariSama->update();
                    $con=$con+1;
                    }
               //print_r($objTariSama);
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
                    $objNetoAndr= new TarisamaModel("","","","","","","","","");
                    $objNetoAndr->setCodHotel($_GET['code1']);
                    $objNetoAndr->setCodTipAlim($_GET['code2']);
                    //print_r($_GET);
                    $resDelete=$objNetoAndr->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>