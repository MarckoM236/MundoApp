<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/taricartModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/tipoAlimModel.php');


    class TaricartController{

        public function home(){

            try {
                if (isset($_POST['showTariCart'])){
                    $objTariCart= new TaricartModel("","","","","","","","","");
                    $objTariCart->setCodHotel(72);
                    $objTariCart->setCodTipAlim(5);
                    $tariCart=$objTariCart->show();

                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //consultar registros
                    foreach($tariCart as $dataTari) {

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
                    
                        $arr_taricart[] =array("codeHotel" => $codeHotel,
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

                     $objTariCart= new TaricartModel("","","","","","","","","");
                    $tariCart=$objTariCart->show();

                    foreach($tariCart as $dataTari) {
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

                        
                            $arr_taricart[] =array("codeHotel" => $codeHotel,
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
            include_once('Views/taricart/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveTaricart'])){
                //obj class
                $objTariCart= new TaricartModel("","","","","","","","","");
                //array
                $arrTaricart=json_decode($_POST["arrTaricart"], true);
                //print_r($arrTaricart);
                
                foreach ($arrTaricart as $val) {
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

                    $objTariCart->setCodHotel($val['codeHotel']);
                    $objTariCart->setCodTipAlim($val['alim']);
                    $objTariCart->setCodAcom($acomodac);
                    $objTariCart->setFeinVig($div);
                    $objTariCart->setFefiVig($dfv);
                    $objTariCart->setFeinExe($die);
                    $objTariCart->setFefiExe($dfe);
                    $objTariCart->setValue($valor);
                    $objTariCart->setUser($_POST['txbUser']);

                    $resInsert=$objTariCart->insert();
                    $con=$con+1;
                    }
               //print_r($objTariCart);
                }
            return $resInsert;
            }
        }

        public function update(){

            try {
                
                if(isset($_GET['codeH']) && isset($_GET['codeA'])){
                    $objTariCart= new TaricartModel("","","","","","","","","");
                    $objTariCart->setCodHotel($_GET['codeH']);
                   $objTariCart->setCodTipAlim($_GET['codeA']);
                    $res=$objTariCart->show();
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
                    
                        $arr_taricart[] =array("codeHotel" => $codeHotel,
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

                    include_once('Views/taricart/edit.php');
                }
    
                if(isset($_POST['updateTaricart'])){
                   //obj class
                $objTariCart= new TaricartModel("","","","","","","","","");
                //array
                $arrTaricart=json_decode($_POST["arrTaricart"], true);
                //print_r($arrTaricart);
                
                foreach ($arrTaricart as $val) {
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

                    $objTariCart->setCodHotel($val['codeHotel']);
                    $objTariCart->setCodTipAlim($val['alim']);
                    $objTariCart->setCodAcom($acomodac);
                    $objTariCart->setFeinVig($div);
                    $objTariCart->setFefiVig($dfv);
                    $objTariCart->setFeinExe($die);
                    $objTariCart->setFefiExe($dfe);
                    $objTariCart->setValue($valor);

                    $resUpdate=$objTariCart->update();
                    $con=$con+1;
                    }
               //print_r($objTariCart);
                }
            return $resUpdate; 
            }
                
            

            } catch (Exception $e) {
                //throw $th;
            }
            

        }

        public function delete(){

            try {
                if(isset($_GET['code'])){
                    $objTariCart= new TaricartModel("","","","","","","","","");
                    $objTariCart->setCode($_GET['code']);
                    $resDelete=$objTariCart->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>