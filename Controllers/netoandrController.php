<?php 
/* Get the data from the form, send it to the model and return results to the view. */
    @include_once('Core/baseModel.php');
    @include_once('Core/db.php');
    @include_once('Models/netoandrModel.php');
    @include_once('Models/hotelModel.php');
    @include_once('Models/tipoAlimModel.php');


    class NetoandrController{

        public function home(){

            try {
                if (isset($_POST['showNetoAndr'])){
                    $objNetoAndr= new NetoandrModel("","","","","","","","","");
                    $objNetoAndr->setCodHotel($_GET['codeH']);
                    $objNetoAndr->setCodTipAlim($_GET['codeA']);
                    $netoAndr=$objNetoAndr->show();

                    //Consult hotel to complete field.
                    $objHotel= new HotelModel("","","","","","","","");
                    $hotel=$objHotel->show();

                    //Consult tipoAlim to complete field.
                    $objAlim= new TipoAlimModel("","");
                    $alim=$objAlim->show();

                    //consultar registros
                    foreach($netoAndr as $dataNeto) {

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
                    
                        $arr_netoandr[] =array("codeHotel" => $codeHotel,
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

                     $objNetoAndr= new NetoandrModel("","","","","","","","","");
                    $netoAndr=$objNetoAndr->show();

                    foreach($netoAndr as $dataNeto) {
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

                        
                            $arr_netoandr[] =array("codeHotel" => $codeHotel,
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
            include_once('Views/netoandr/home.php');

        }
        

        public function insert(){
            if (isset($_POST['saveNetoandr'])){
                //obj class
                $objNetoAndr= new NetoandrModel("","","","","","","","","");
                //array
                $arrNetoandr=json_decode($_POST["arrNetoandr"], true);
                //print_r($arrNetoandr);
                
                foreach ($arrNetoandr as $val) {
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

                    $objNetoAndr->setCodHotel($val['codeHotel']);
                    $objNetoAndr->setCodTipAlim($val['alim']);
                    $objNetoAndr->setCodAcom($acomodac);
                    $objNetoAndr->setFeinVig($div);
                    $objNetoAndr->setFefiVig($dfv);
                    $objNetoAndr->setFeinExe($die);
                    $objNetoAndr->setFefiExe($dfe);
                    $objNetoAndr->setValue($valor);
                    $objNetoAndr->setUser($_POST['txbUser']);

                    $resInsert=$objNetoAndr->insert();
                    $con=$con+1;
                    }
               //print_r($objNetoAndr);
                }
            return $resInsert;
            }
        }

        public function update(){

            try {
                
                if(isset($_GET['codeH']) && isset($_GET['codeA'])){
                    $objNetoAndr= new NetoandrModel("","","","","","","","","");
                    $objNetoAndr->setCodHotel($_GET['codeH']);
                   $objNetoAndr->setCodTipAlim($_GET['codeA']);
                    $res=$objNetoAndr->show();
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
                    
                        $arr_netoandr[] =array("codeHotel" => $codeHotel,
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

                    include_once('Views/netoandr/edit.php');
                }
    
                if(isset($_POST['updateNetoandr'])){
                   //obj class
                $objNetoAndr= new NetoandrModel("","","","","","","","","");
                //array
                $arrNetoandr=json_decode($_POST["arrNetoandr"], true);
                //print_r($arrNetoandr);
                $con=1;
                foreach ($arrNetoandr as $val) {
                   
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

                    $objNetoAndr->setCodHotel($val['codeHotel']);
                    $objNetoAndr->setCodTipAlim($val['alim']);
                    $objNetoAndr->setCodAcom($acomodac);
                    $objNetoAndr->setFeinVig($div);
                    $objNetoAndr->setFefiVig($dfv);
                    $objNetoAndr->setFeinExe($die);
                    $objNetoAndr->setFefiExe($dfe);
                    $objNetoAndr->setValue($valor);
                    //print_r($objNetoAndr);
                    $resUpdate=$objNetoAndr->update();
                    $con=$con+1;
                    }
               //print_r($objNetoAndr);
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
                    $objNetoAndr= new NetoandrModel("","","","","","","","","");
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