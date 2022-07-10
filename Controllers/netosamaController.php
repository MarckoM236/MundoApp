<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/netosamaModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/tipoAlimModel.php');


    class NetosamaController{

        public function home(){

            try {
                if (isset($_POST['showNetoSama'])){
                    $objNetoSama= new NetosamaModel("","","","","","","","","");
                    $objNetoSama->setCodHotel($_GET['codeH']);
                    $objNetoSama->setCodTipAlim($_GET['codeA']);
                    $netoSama=$objNetoSama->show();

                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //consultar registros
                    foreach($netoSama as $dataNeto) {

                        $codeHotel=$dataNeto->getCodHotel();
                        $objHotel->setCode($codeHotel);
                        $hote=$objHotel->show();
                        foreach($hote as $dataHot) {
                            $nameHotel=$dataHot->getName();
                        }

                        $codeAlim=$dataNeto->getCodTipAlim();
                        $ali=$objAlim->setCode($codeAlim);
                        $ali=$objAlim->show();
                        foreach($ali as $dataAli) {
                            $nameAli=$dataAli->getName();
                        }
                        $codeAcomodac=$dataNeto->getCodAcom();
                        $dateVigIni=$dataNeto->getFeinVig();
                        $dateVigFin=$dataNeto->getFefiVig();
                        $dateExeIni=$dataNeto->getFeinExe();
                        $dateExeFin=$dataNeto->getFefiExe();
                        $valor=$dataNeto->getValue();
                        $user=$dataNeto->getUser();
                    
                        $arr_netosama[] =array("codeHotel" => $codeHotel,
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

                     $objNetoSama= new NetosamaModel("","","","","","","","","");
                    $netoSama=$objNetoSama->show();

                    foreach($netoSama as $dataNeto) {
                         $con=1;
                        $codeHotel=$dataNeto->getCodHotel();
                        $objHotel->setCode($codeHotel);
                        $hote=$objHotel->show();
                        foreach($hote as $dataHot) {
                            $nameHotel=$dataHot->getName();
                        }

                        $codeAlim=$dataNeto->getCodTipAlim();
                        $ali=$objAlim->setCode($codeAlim);
                        $ali=$objAlim->show();
                        foreach($ali as $dataAli) {
                            $nameAli=$dataAli->getName();
                        }
                        $codeAcomodac=$dataNeto->getCodAcom();
                        $dateVigIni=$dataNeto->getFeinVig();
                        $dateVigFin=$dataNeto->getFefiVig();
                        $dateExeIni=$dataNeto->getFeinExe();
                        $dateExeFin=$dataNeto->getFefiExe();
                        $valor=$dataNeto->getValue();
                        $user=$dataNeto->getUser();

                        
                            $arr_netosama[] =array("codeHotel" => $codeHotel,
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
            include_once('Views/netosama/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveNetosama'])){
                //obj class
                $objNetoSama= new NetosamaModel("","","","","","","","","");
                //array
                $arrNetosama=json_decode($_POST["arrNetosama"], true);
                //print_r($arrNetosama);
                
                foreach ($arrNetosama as $val) {
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

                    $objNetoSama->setCodHotel($val['codeHotel']);
                    $objNetoSama->setCodTipAlim($val['alim']);
                    $objNetoSama->setCodAcom($acomodac);
                    $objNetoSama->setFeinVig($div);
                    $objNetoSama->setFefiVig($dfv);
                    $objNetoSama->setFeinExe($die);
                    $objNetoSama->setFefiExe($dfe);
                    $objNetoSama->setValue($valor);
                    $objNetoSama->setUser($_POST['txbUser']);

                    $resInsert=$objNetoSama->insert();
                    $con=$con+1;
                    }
               //print_r($objNetoSama);
                }
            return $resInsert;
            }
        }

        public function update(){

            try {
                
                if(isset($_GET['codeH']) && isset($_GET['codeA'])){
                    $objNetoSama= new NetosamaModel("","","","","","","","","");
                    $objNetoSama->setCodHotel($_GET['codeH']);
                   $objNetoSama->setCodTipAlim($_GET['codeA']);
                    $res=$objNetoSama->show();
                    //print_r($res);
                    
                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //consultar registros
                    foreach($res as $dataNeto) {

                        $codeHotel=$dataNeto->getCodHotel();
                        $objHotel->setCode($codeHotel);
                        $hote=$objHotel->show();
                        foreach($hote as $dataHot) {
                            $nameHotel=$dataHot->getName();
                        }

                        $codeAlim=$dataNeto->getCodTipAlim();
                        $ali=$objAlim->setCode($codeAlim);
                        $ali=$objAlim->show();
                        foreach($ali as $dataAli) {
                            $nameAli=$dataAli->getName();
                        }
                        $codeAcomodac=$dataNeto->getCodAcom();
                        $dateVigIni=$dataNeto->getFeinVig();
                        $dateVigFin=$dataNeto->getFefiVig();
                        $dateExeIni=$dataNeto->getFeinExe();
                        $dateExeFin=$dataNeto->getFefiExe();
                        $valor=$dataNeto->getValue();
                        $user=$dataNeto->getUser();
                    
                        $arr_netosama[] =array("codeHotel" => $codeHotel,
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

                    include_once('Views/netosama/edit.php');
                }
    
                if(isset($_POST['updateNetosama'])){
                   //obj class
                $objNetoSama= new NetosamaModel("","","","","","","","","");
                //array
                $arrNetosama=json_decode($_POST["arrNetosama"], true);
                //print_r($arrNetosama);
                $con=1;
                foreach ($arrNetosama as $val) {
                   
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

                    $objNetoSama->setCodHotel($val['codeHotel']);
                    $objNetoSama->setCodTipAlim($val['alim']);
                    $objNetoSama->setCodAcom($acomodac);
                    $objNetoSama->setFeinVig($div);
                    $objNetoSama->setFefiVig($dfv);
                    $objNetoSama->setFeinExe($die);
                    $objNetoSama->setFefiExe($dfe);
                    $objNetoSama->setValue($valor);
                    //print_r($objNetoSama);
                    $resUpdate=$objNetoSama->update();
                    $con=$con+1;
                    }
               //print_r($objNetoSama);
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
                    $objNetoSama= new NetosamaModel("","","","","","","","","");
                    $objNetoSama->setCodHotel($_GET['code1']);
                    $objNetoSama->setCodTipAlim($_GET['code2']);
                    //print_r($_GET);
                    $resDelete=$objNetoSama->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>