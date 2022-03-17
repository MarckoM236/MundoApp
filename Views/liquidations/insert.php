<?php 
if(isset($agency)){
                 foreach($agency as $data) {
                    $codeAgency=$data->getCode();
                    $nameAgency=$data->getName();
                    $statusAgency=$data->getStatus();

                    $arr_agency[] = array("codeAgency" => $codeAgency,
                    "nameAgency" => $nameAgency,
                    "statusAgency" => $statusAgency);    
                }
                }
 
                if(isset($seller)){
                    foreach($seller as $dataSell) {
                       $codeSeller=$dataSell->getId();
                       $nameSeller=$dataSell->getName();
                       $statusSeller=$dataSell->getStatus();
   
                       $arr_seller[] = array("codeSeller" => $codeSeller,
                       "nameSeller" => $nameSeller,
                       "statusSeller" => $statusSeller);    
                   }
                   }      

                if(isset($destination)){
                    foreach($destination as $dataDes) {
                       $codeDestination=$dataDes->getCode();
                       $nameDestination=$dataDes->getName();
   
                       $arr_destination[] = array("codeDestination" => $codeDestination,
                       "nameDestination" => $nameDestination);    
                   }
                   }
                   
                if(isset($hotel)){
                foreach($hotel as $dataHot) {
                    $codeHotel=$dataHot->getCode();
                    $nameHotel=$dataHot->getName();
                    $statusHotel=$dataHot->getStatus();

                    $arr_hotel[] = array("codeHotel" => $codeHotel,
                    "nameHotel" => $nameHotel,
                    "statusHotel" => $statusHotel);    
                }
                }

                if(isset($alim)){
                    foreach($alim as $dataAlim) {
                        $codeAlim=$dataAlim->getCode();
                        $nameAlim=$dataAlim->getName();
    
                        $arr_alim[] = array("codeAlim" => $codeAlim,
                        "nameAlim" => $nameAlim);    
                    }
                    }

                if(isset($acomodac)){
                    foreach($acomodac as $dataAcom) {
                        $codeAcomodac=$dataAcom->getCode();
                        $nameAcomodac=$dataAcom->getName();
    
                        $arr_acomodac[] = array("codeAcomodac" => $codeAcomodac,
                        "nameAcomodac" => $nameAcomodac);    
                    }
                    }

                if(isset($plan)){
                    foreach($plan as $dataPlan) {
                        $codePlan=$dataPlan->getCode();
                        $namePlan=$dataPlan->getName();
    
                        $arr_plan[] = array("codePlan" => $codePlan,
                        "namePlan" => $namePlan);    
                    }
                }
               
                if(isset($flight)){
                    foreach($flight as $dataFli) {
                       $codeFlight=$dataFli->getNum();
                       $routeFlight=$dataFli->getRoute();
                       $statusFlight=$dataFli->getStatus();
   
                       $arr_flight[] = array("codeFlight" => $codeFlight,
                       "routeFlight" => $routeFlight,
                       "statusFlight" => $statusFlight);    
                   }
                   }               

                   if(isset($concepto)){
                    foreach($concepto as $dataCon) {
                       $codeConc=$dataCon->getCode();
                       $nameConc=$dataCon->getName();
   
                       $arr_concepto[] = array("codeConc" => $codeConc,
                       "nameConc" => $nameConc);    
                   }
                   }      
                   
                   if(isset($inclusio)){
                    foreach($inclusio as $dataInc) {
                       $codeInclusio=$dataInc->getCode();
                       $nameInclusio=$dataInc->getName();
   
                       $arr_inclusio[] = array("codeInclusio" => $codeInclusio,
                       "nameInclusio" => $nameInclusio);    
                   }
                   }   
                   
                   if(isset($adviser)){
                    foreach($adviser as $dataAdv) {
                       $idAdviser=$dataAdv->getId();
                       $nameAdviser=$dataAdv->getName()." ".$dataAdv->getLastName();
                       $statusAdviser=$dataAdv->getStatus();
   
                       $arr_adviser[] = array("idAdviser" => $idAdviser,
                       "nameAdviser" => $nameAdviser,
                       "statusAdviser" => $statusAdviser);    
                   }
                   }  
                   
                   if(isset($estarese)){
                    foreach($estarese as $dataEst) {
                        $codeEstarese=$dataEst->getCode();
                        $nameEstarese=$dataEst->getName();
   
                       $arr_estarese[] = array("codeEstarese" => $codeEstarese,
                       "nameEstarese" => $nameEstarese);    
                   }
                   }        

                   if(isset($system)){
                    foreach($system as $data) {
                        $code=$data->getCode();
                       $value=$data->getValue();
   
                       $return_arr[] = array("codeV" => $code, 
                       "value" => $value);    
                   }  
                
                   if(isset($numLiqu)){
                       if($numLiqu==-1){
                        $numberLiquidac=1;
                       }
                       else{$numberLiquidac=$numLiqu+1;}
                   }   
                }    
                               
?>
<style>
    .ocultar{
  display:none;
}
.valores{
    border-style: double;
    /*height: 300px;*/
    float: right !important;
    line-height:110% !important;
}
.pad{
    padding-top: 0px !important;
    padding-bottom: 0px !important;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}
</style>

<div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >LIQUIDACION</label>
                </div>

              </div>

<hr>
<div class="container">
    <div class="form-check form-check-inline">
        <input class="form-check-input ch1" type="checkbox" id="liquN" value="LN" name="chTipoLiqu" onclick="uncheck()">
        <label class="form-check-label" for="inlineCheckbox1">Liquidacion Nacional</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input ch2" type="checkbox" id="liquI" value="LI" name="chTipoLiqu" onclick="uncheck()">
        <label class="form-check-label" for="inlineCheckbox2">Liquidacion Internacional</label>
    </div>
</div>

 <hr>

<div class="container">
    <div class="row justify-content-center py-2 pad">

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Fecha</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="fecha" id="fechaSis" name="txbFecSys" value="<?php echo date('d/m/Y'); ?>" readonly>
                    <label class="error" for="fechaSis" id="fechaSis_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Numero</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="numero" id="codLiqu" name="txbCodeLiqu" value="<?php echo $numberLiquidac; ?>" readonly>
                    <label class="error" for="codLiqu" id="codLiqu_error">Campo requerido.</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center py-2 pad">

        <div  class="col-sm-6 col-6 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2 pad">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Agencia</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeAgency" id="codAgency" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_agency)){
                            foreach($arr_agency as $rowAg ){
                                if($rowAg['statusAgency']=="A"){?>
                                <option select value="<?php echo $rowAg['codeAgency'];?>"><?php echo $rowAg['nameAgency'];?></option>
                        <?php }
                            }
                        }?>         
                </select>
                    <label class="error" for="codAgency" id="codAgency_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-6 col-6 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Vendedor</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeSeller" id="codSeller" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_seller)){
                            foreach($arr_seller as $rowSell ){
                                if($rowSell['statusSeller']=="A"){?>
                                <option select value="<?php echo $rowSell['codeSeller'];?>"><?php echo $rowSell['nameSeller'];?></option>
                        <?php }
                            }
                        }?>         
                </select>
                    <label class="error" for="codSeller" id="codSeller_error">Campo requerido.</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center py-2 pad">
        <div  class="col-sm-6 col-6 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Asesor</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeAdviser" id="codAviser" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_adviser)){
                            foreach($arr_adviser as $rowAdv ){
                                if($rowAdv['statusAdviser']=="A"){?>
                                <option select value="<?php echo $rowAdv['idAdviser'];?>"><?php echo $rowAdv['nameAdviser'];?></option>
                        <?php }
                            }
                        }?>         
                </select>
                    <label class="error" for="codAdviser" id="codAdviser_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-6 col-6 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Estado Reserva</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeEstarese" id="codEstarse" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_estarese)){
                            foreach($arr_estarese as $rowEst ){?>
                                <option select value="<?php echo $rowEst['codeEstarese'];?>"><?php echo $rowEst['nameEstarese'];?></option>
                        <?php }
                        }?>         
                </select>
                    <label class="error" for="codEstarese" id="codEstarese_error">Campo requerido.</label>
                </div>
            </div>
        </div>
    </div>

</div>

<hr>

<div class="container">
    <div class="row justify-content-center py-2 pad">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Fecha Viaje</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="date" placeholder="fecha viaje" id="fecViDeLiqu" name="txbFecViDeLiqu" value="<?php echo date('Y-m-d');?>">
                    <label class="error" for="fecViDeLiqu" id="fecViDeLiqu_error">Campo requerido.</label>
                    <label class="error" for="fecViDeLiquMen" id="fecViDeLiquMen_error">La fecha no pude ser anterior a la actual</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-6 col-6 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Destino</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeDestination" id="codDestination" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_destination)){
                            foreach($arr_destination as $rowDes ){?>
                    <option select value="<?php echo $rowDes['codeDestination'];?>"><?php echo $rowDes['nameDestination'];?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="codDestination" id="codDestination_error">Campo requerido.</label>
                </div>
            </div>
        </div>
    </div>   
    
    <div class="row justify-content-center py-2 pad">

        <div  class="col-sm-6 col-6 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Hotel</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeHotel" id="codHotel" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_hotel)){
                            foreach($arr_hotel as $rowHot ){
                                if($rowHot['statusHotel']=="A"){?>
                                <option select value="<?php echo $rowHot['codeHotel'];?>"><?php echo $rowHot['nameHotel'];?></option>
                        <?php }
                            }
                        }?>         
                </select>
                    <label class="error" for="codHotel" id="codHotel_error">Campo requerido.</label>
                </div>
            </div>
        </div>
        
        <div  class="col-sm-6 col-6 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Hostal</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeHostal" id="codHostal" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_hotel)){
                            foreach($arr_hotel as $rowHot ){
                                if($rowHot['statusHotel']=="A"){?>
                                <option select value="<?php echo $rowHot['codeHotel'];?>"><?php echo $rowHot['nameHotel'];?></option>
                        <?php }
                            }
                        }?>         
                </select>
                    <label class="error" for="codHostal" id="codHostal_error">Campo requerido.</label>
                </div>
            </div>
        </div>

    </div>

    <div class="row justify-content-center py-2 pad">
        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Alimentacion</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeAlim" id="codAlim" class="form-select inputFomulario" placeholder="Opciones">    
                    <option select value="">SELECCIONE</option>
                        <?php if (isset($arr_alim)){
                                foreach($arr_alim as $rowAlim ){?>
                    <option select value="<?php echo $rowAlim['codeAlim'];?>"><?php echo $rowAlim['nameAlim'];?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="codAlim" id="codAlim_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-center py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Plan</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodePlan" id="codPlan" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_plan)){
                            foreach($arr_plan as $rowPlan ){?>
                    <option select value="<?php echo $rowPlan['codePlan'];?>"><?php echo $rowPlan['namePlan'];?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="codPlan" id="codPlan_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Acomodacion</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeAcomodac" id="codAcomodac" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_acomodac)){
                            foreach($arr_acomodac as $rowAcom ){?>
                    <option select value="<?php echo $rowAcom['codeAcomodac'];?>"><?php echo $rowAcom['nameAcomodac'];?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="codAcomodac" id="codAcomodac_error">Campo requerido.</label>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
    <p><b>ITINERARIO</b></p>
<hr>

<div class="container">
    <div class="row justify-content-left py-2 pad">
        
    <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Vuelo</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeFlight" id="codFlight" class="form-select inputFomulario" placeholder="Opciones" onchange="ShowSelectedFlight();"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_flight)){
                            foreach($arr_flight as $rowFli ){
                                if($rowFli['statusFlight']=="A"){?>
                                <option select value="<?php echo $rowFli['codeFlight'];?>"><?php echo $rowFli['codeFlight'];?></option>
                        <?php }
                            }
                        }?>         
                </select>
                    <label class="error" for="codFlight" id="codFlight_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Aerolinea</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="fecha viaje" id="aeroFli" name="txbAeroFli" readonly>  
                    <input type="hidden" id="codAer">
                    <label class="error" for="aeroFli" id="aeroFli_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Ruta</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="ruta" id="routeFli" name="txbRouteFli" readonly>
                    <label class="error" for="routeFli" id="routeFli_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Fecha</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="date" placeholder="fecha" id="dateFli" name="txbDateFli" value="<?php echo date('Y-m-d');?>">
                    <label class="error" for="dateFli" id="dateFli_error">Campo requerido.</label>
                    <label class="error" for="dateFliMen" id="dateFliMen_error">La fecha no pude ser anterior a la actual</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Salida</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="time" placeholder="salida" id="exitFli" name="txbExitFli">
                    <label class="error" for="exitFli" id="exitFli_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Llegada</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="time" placeholder="llegada" id="arrivalFli" name="txbArrivalFli">
                    <label class="error" for="arrivalFli" id="arrivalFli_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-6 col-6 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Observaciones</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <textarea class="form-control inputFomulario" type="text" placeholder="obs" id="commentFli" name="txbCommentFli"></textarea>
                    <label class="error" for="commentFli" id="commentFli_error">Campo requerido.</label>
                </div>
            </div>
        </div>
        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <input id='btnAddFli'class= "form-control botonesIS" style="width:130px"; type="button" value="+" onclick="addSelectFlight()"/>
            </div>
        </div>
        <label class="error" for="flights" id="flights_error">Debe seleccionar un vuelo</label>
    </div>
</div>
<!-- results-->
<table class="table-Flight">
  <thead>
    <th>vuelo</th>
    <th>Ruta</th>
    <th class="ocultar">codAer</th>
    <th>Aerolinea</th>
    <th>Fecha</th>
    <th>Salida</th>
    <th>Llegada</th>
    <th>Comentarios</th>
    <th></th>
  </thead>
  <tbody id="listaFlight">
  </tbody>
</table>
<!-- fin results-->
<hr>

<div class="container">
    <div class="row justify-content-left py-2 pad">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Identificacion</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="identificacion" id="idTraveler" name="txbIdTraveler">
                    <label class="error" for="idTraveler" id="idTraveler_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Nombre </label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="nombre" id="nameTraveler" name="txbNameTraveler" readonly>
                    <label class="error" for="nameTraveler" id="nameTraveler_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Apellido</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="apellido" id="lastNameTraveler" name="txbLastNameTraveler" readonly>
                    <label class="error" for="lastNameTraveler" id="lastNameTraveler_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Fecha Nacimiento</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="date" placeholder="llegada" id="fecNacTraveler" name="txbFecNacTraveler" readonly>
                    <label class="error" for="fecNacTraveler" id="fecNacTraveler_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <input id='btnAddTrav'class= "form-control botonesIS" style="width:130px"; type="button" value="+" onclick="addSelectTrav()"/>
            </div>
        </div>
        <label class="error" for="travelers" id="travelers_error">No hay viajeros seleccionados.</label>
    </div>
</div>
<!-- results-->
<table class="table-Traveler">
  <thead>
    <th>Identificacion</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>fecha Nacimiento</th>
    <th></th>
  </thead>
  <tbody id="listaTrav">
  </tbody>
</table>
<!-- fin results-->
<hr>

<div class="container">
    <div class="row justify-content-center py-2 pad">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-center py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Inclusion</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeConcepto" id="codConcepto" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_inclusio)){
                            foreach($arr_inclusio as $rowInc ){
                                $codInc=$rowInc['codeInclusio'];
                                $nameInc=$rowInc['nameInclusio'];?>
                    <option select value="<?php echo $codInc;?>"><?php echo $nameInc;?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="codConcepto" id="codConcepto_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <input id='btnAddInc'class= "form-control botonesIS" style="width:130px"; type="button" value="+" onclick="addSelectedInc()"/>
            </div>
        </div>
        <label class="error" for="includes" id="includes_error">No hay inclusiones seleccionadas.</label>
    </div>
</div>
<!-- results-->
<table class="table-include">
  <thead>
    <th class="ocultar">Codigo</th>
    <th>Nombre</th>
  </thead>
  <tbody id="lista1"> 
  </tbody>
</table>
<!-- fin results-->
<hr>

<div class="container">
    <div class="row justify-content-center py-2 pad">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-center py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label> No Inclusion</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeConceptoN" id="codConceptoN" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_inclusio)){
                            foreach($arr_inclusio as $rowInc ){
                                $codInc=$rowInc['codeInclusio'];
                                $nameInc=$rowInc['nameInclusio'];?>
                    <option select value="<?php echo $codInc;?>"><?php echo $nameInc;?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="codConceptoN" id="codConceptoN_error">Seleccione un valor.</label>
                </div>
            </div>
        </div>
        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <input id='btnAddNotInc'class= "form-control botonesIS" style="width:130px"; type="button" value="+" onclick="addSelectedNotInc()"/>
            </div>
        </div>
        <label class="error" for="noIncludes" id="noIncludes_error">No hay inclusiones seleccionadas.</label>
    </div>
</div>
<!-- results-->
<table class="table-NoInclude"> 
  <thead>
    <th class="ocultar">Codigo</th>
    <th>Nombre</th>
  </thead>
  <tbody id="lista2">
  </tbody>
</table>
<!-- fin results-->
<hr>
    <p><b>LIQUIDACION</b></p>
<hr>

<div class="container">
    <div class="row justify-content-center py-2 pad">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Servicio</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeConc" id="codConc" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_concepto)){
                            foreach($arr_concepto as $rowConc ){
                                $codConc=$rowConc['codeConc'];
                                $nameConc=$rowConc['nameConc'];?>
                    <option select value="<?php echo $codConc;?>"><?php echo $nameConc;?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="codConc" id="codConc_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Cantidad</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="cantidad" id="cantConc" name="txbCantConc">
                    <label class="error" for="cantConc" id="cantConc_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Precio</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
                    <input class="form-control inputFomulario number" type="number" placeholder="precio" id="preConc" name="txbPreConc">
                    <label class="error" for="preConc" id="preConc_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Total</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario number" type="number" placeholder="total" id="totConc" name="txbTotConc" readonly>
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <input id='btnAddConcept'class= "form-control botonesIS" style="width:130px"; type="button" value="+" onclick="addSelectConcept()"/>
            </div>
        </div>
        <label class="error" for="services" id="services_error">No hay servicios seleccionados.</label>
    </div>
</div>
<!-- results-->
<table class="table-Concept">
  <thead>
    <th class="ocultar">Codigo</th>
    <th>Servicio</th>
    <th>Cantidad</th>
    <th>Precio</th>
    <th>Total</th>
    <th></th>
  </thead>
  <tbody id="listaConc">
  </tbody>
</table>
<!-- fin results-->
<hr>

<?php if (isset($return_arr)){
                        foreach($return_arr as $row ){
                            if($row['codeV']==1){
                                $iva=$row['value'];
                            }
                            if($row['codeV']==2){
                                $reteIva=$row['value'];
                            }
                            if($row['codeV']==3){
                                $reteIca=$row['value'];
                            }
                            if($row['codeV']==4){
                                $reteFu=$row['value'];
                            }
                            if($row['codeV']==5){
                                $comision=$row['value'];
                            }
                
            } }?>

<div class="container">
    <div class="valores">
        <div class="row justify-content-center py-2 pad" >
                <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                                <label>TOTAL A PAGAR PASAJEROS</label>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                            <input class="form-control inputFomulario number" type="number" placeholder="$$" id="valTotTraveler" name="txbValTotTraveler">
                            <label class="error" for="valTotTraveler" id="valTotTraveler_error">Campo requerido.</label>
                        </div>
                    </div>
                </div>      
            </div>

            <div class="row justify-content-center py-2 pad">
                <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                                <label>TOTAL IMPUESTOS</label>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                            <input class="form-control inputFomulario number" type="text" placeholder="$$" id="valTotImp" name="txbValTotImp">
                            <label class="error" for="valTotImp" id="valTotImp_error">Campo requerido.</label>
                        </div>
                    </div>
                </div>      
            </div>

            <div class="row justify-content-center py-2 pad">
                <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                                <label>SUBTOTAL</label>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-selft-right text-right">
                            <input class="form-control inputFomulario number" type="text" placeholder="$$" id="subTotLiqu" name="txbSubTotLiqu" readonly>
                            <label class="error" for="code" id="code_error">Campo requerido.</label>
                        </div>
                    </div>
                </div>      
            </div>

            <div class="row justify-content-center py-2 pad">
                <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                                <label>COMISION</label>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                            <input class="form-control inputFomulario number" type="text" placeholder="$$" id="valComiLiqu" name="txbValComiLiqu" readonly>
                            <input id="comision" name="comision" type="hidden" value="<?php echo $comision;?>">
                            <label class="error" for="code" id="code_error">Campo requerido.</label>
                        </div>
                    </div>
                </div>      
            </div>
            
            
            <div class="row justify-content-center py-2 pad">
                <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                                <label>IVA</label>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                            <input class="form-control inputFomulario number" type="text" placeholder="$$" id="valIvaLiqu" name="txbValIvaLiqu" readonly>
                            <input id="iva" name="iva" type="hidden" value="<?php echo $iva;?>">
                            <label class="error" for="valIvaLiqu" id="valIvaLiqu_error">Campo requerido.</label>
                        </div>
                    </div>
                </div>      
            </div>
            
            <div class="row justify-content-center py-2 pad">
                <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                                <label>RETE FUENTE</label>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                            <input class="form-control inputFomulario number" type="text" placeholder="$$" id="valRtfLiqu" name="txbValRtfLiqu" readonly>
                            <input id="rtf" name="rtf" type="hidden" value="<?php echo $reteFu;?>">
                            <label class="error" for="valRtfLiqu" id="valRtfLiqu_error">Campo requerido.</label>
                        </div>
                    </div>
                </div>      
            </div>

            <div class="row justify-content-center py-2 pad">
                <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2 number">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                                <label>RETE ICA</label>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                            <input class="form-control inputFomulario number" type="text" placeholder="$$" id="valIcaLiqu" name="txbValIcaLiqu" readonly>
                            <input id="rtica" name="rtica" type="hidden" value="<?php echo $reteIca;?>">
                            <label class="error" for="valIcaLiqu" id="valIcaLiqu_error">Campo requerido.</label>
                        </div>
                    </div>
                </div>      
            </div>

            <div class="row justify-content-center py-2 pad">
                <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                                <label>TOTAL COMISION</label>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                            <input class="form-control inputFomulario number" type="text" placeholder="$$" id="valTotLiqu" name="txbValTotLiqu" readonly>
                            <label class="error" for="code" id="code_error">Campo requerido.</label>
                        </div>
                    </div>
                </div>      
            </div>

            <div class="row justify-content-center py-2 pad">
                <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                                <label>TOTAL A PAGAR AL MUNDO VIAJES</label>
                        </div>
                    </div>
                </div>
                <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                    <div class="row justify-content-right py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                            <input class="form-control inputFomulario" type="text" placeholder="$$" id="valTotEmp" name="txbValTotEmp">
                            <label class="error" for="valTotEmp" id="valTotEmp_error">Campo requerido.</label>
                        </div>
                    </div>
                </div>      
        </div>
    </div>                    
</div>

<hr>

<div class="container">
    <div class="row justify-content-center py-2 pad">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Plazo para pago 50%</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="date" placeholder="plazo 50%" id="pl50Liqu" name="txbPl50Liqu" value="<?php echo date('Y-m-d');?>">
                    <label class="error" for="pl50Liqu" id="pl50Liqu_error">Campo requerido.</label>
                    <label class="error" for="pl50LiquMen" id="pl50LiquMen_error">La fecha no pude ser anterior a la actual</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Plazo para pago total</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="date" placeholder="plazo total" id="pl100Liqu" name="txbPl100Liqu" value="<?php echo date('Y-m-d');?>">
                    <label class="error" for="pl100Liqu" id="pl100Liqu_error">Campo requerido.</label>
                    <label class="error" for="pl100LiquMen" id="pl100LiquMen_error">La fecha no pude ser anterior a la actual</label>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="container">
    <div class="row justify-content-center py-2 pad">

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Numero Reserva</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="Reserva" id="numRes" name="txbNumRes">
                    <label class="error" for="numRes" id="numRes_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <input id='btnSaveLiquidation'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
            </div>
        </div>
        <!-- <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <input id='savePrueba'class= "form-control botonesIS" style="width:130px"; type="button" value="GuardarPrueba" />
            </div>
        </div> -->

    </div>
</div>

</div>
</div>
</div>
 
