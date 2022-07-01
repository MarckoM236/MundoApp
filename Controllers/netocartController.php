<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/netocartModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/tipoAlimModel.php');


    class NetocartController{

        public function home(){

            try {
                if (isset($_POST['showNetoCart'])){
                    $objNetoCart= new NetocartModel("","","","","","","","","");
                    $objNetoCart->setCodHotel($_GET['codeH']);
                    $objNetoCart->setCodTipAlim($_GET['codeA']);
                    $netoCart=$objNetoCart->show();

                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //consultar registros
                    foreach($netoCart as $dataNeto) {

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
                    
                        $arr_netocart[] =array("codeHotel" => $codeHotel,
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

                     $objNetoCart= new NetocartModel("","","","","","","","","");
                    $netoCart=$objNetoCart->show();

                    foreach($netoCart as $dataNeto) {
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

                        
                            $arr_netocart[] =array("codeHotel" => $codeHotel,
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
            include_once('Views/netocart/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveNetocart'])){
                //obj class
                $objNetoCart= new NetocartModel("","","","","","","","","");
                //array
                $arrNetocart=json_decode($_POST["arrNetocart"], true);
                //print_r($arrNetocart);
                
                foreach ($arrNetocart as $val) {
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

                    $objNetoCart->setCodHotel($val['codeHotel']);
                    $objNetoCart->setCodTipAlim($val['alim']);
                    $objNetoCart->setCodAcom($acomodac);
                    $objNetoCart->setFeinVig($div);
                    $objNetoCart->setFefiVig($dfv);
                    $objNetoCart->setFeinExe($die);
                    $objNetoCart->setFefiExe($dfe);
                    $objNetoCart->setValue($valor);
                    $objNetoCart->setUser($_POST['txbUser']);

                    $resInsert=$objNetoCart->insert();
                    $con=$con+1;
                    }
               //print_r($objNetoCart);
                }
            return $resInsert;
            }
        }

        public function update(){

            try {
                
                if(isset($_GET['codeH']) && isset($_GET['codeA'])){
                    $objNetoCart= new NetocartModel("","","","","","","","","");
                    $objNetoCart->setCodHotel($_GET['codeH']);
                   $objNetoCart->setCodTipAlim($_GET['codeA']);
                    $res=$objNetoCart->show();
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
                    
                        $arr_netocart[] =array("codeHotel" => $codeHotel,
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

                    include_once('Views/netocart/edit.php');
                }
    
                if(isset($_POST['updateNetocart'])){
                   //obj class
                $objNetoCart= new NetocartModel("","","","","","","","","");
                //array
                $arrNetocart=json_decode($_POST["arrNetocart"], true);
                //print_r($arrNetocart);
                
                foreach ($arrNetocart as $val) {
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

                    $objNetoCart->setCodHotel($val['codeHotel']);
                    $objNetoCart->setCodTipAlim($val['alim']);
                    $objNetoCart->setCodAcom($acomodac);
                    $objNetoCart->setFeinVig($div);
                    $objNetoCart->setFefiVig($dfv);
                    $objNetoCart->setFeinExe($die);
                    $objNetoCart->setFefiExe($dfe);
                    $objNetoCart->setValue($valor);

                    $resUpdate=$objNetoCart->update();
                    $con=$con+1;
                    }
               //print_r($objNetoCart);
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
                    $objNetoCart= new NetocartModel("","","","","","","","","");
                    $objNetoCart->setCodHotel($_GET['code1']);
                    $objNetoCart->setCodTipAlim($_GET['code2']);
                    //print_r($_GET);
                    $resDelete=$objNetoCart->delete();
                    
                }
               return $resDelete;
                
            } 
            catch (Exception $e) {
                
            }
        }

    }

?>