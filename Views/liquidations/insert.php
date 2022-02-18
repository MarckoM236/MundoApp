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
                               
?>
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
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
    <label class="form-check-label" for="inlineCheckbox1">Liquidacion Nacional</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
    <label class="form-check-label" for="inlineCheckbox2">Liquidacion Internacional</label>
    </div>
</div>

 <hr>

<div class="container">
    <div class="row justify-content-left py-2">

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Fecha</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="fecha" id="fechaSis" name="txbCode" value="<?php echo date('d/m/Y'); ?>" readonly>
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Numero</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="numero" id="code" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-left py-2">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Agencia</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeAgency" id="codAeroline" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_agency)){
                            foreach($arr_agency as $rowAg ){
                                if($rowAg['statusAgency']=="A"){?>
                                <option select value="<?php echo $rowAg['codeAgency'];?>"><?php echo $rowAg['nameAgency'];?></option>
                        <?php }
                            }
                        }?>         
                </select>
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
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
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>

    </div>

</div>

<hr>

<div class="container">
    <div class="row justify-content-left py-2">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Fecha Viaje</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="date" placeholder="fecha viaje" id="code" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
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
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>
    </div>   
    
    <div class="row justify-content-left py-2">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
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
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>
        
        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Hostal</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                    <select name="txbStatus" id="status" class="form-select inputFomulario" placeholder="Opciones"> 
                        <option select value="">SELECCIONE</option>
                        <option value="A">ACTIVO</option>
                        <option value="I">INACTIVO</option>
                        </select>
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
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
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
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
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Acomodacion</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeDestination" id="codDestination" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_acomodac)){
                            foreach($arr_acomodac as $rowAcom ){?>
                    <option select value="<?php echo $rowAcom['codeAcomodac'];?>"><?php echo $rowAcom['nameAcomodac'];?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>

    </div>
</div>

<hr>
    <p>ITINERARIO</p>
<hr>

<div class="container">
    <div class="row justify-content-left py-2">

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Aerolinea</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="fecha viaje" id="aeroFli" name="txbCode" readonly>  
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
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
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Ruta</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="ruta" id="routeFl" name="txbCode" readonly>
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Fecha</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="date" placeholder="fecha" id="code" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Salida</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="time" placeholder="salida" id="code" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Llegada</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="time" placeholder="llegada" id="code" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Observaciones</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <textarea class="form-control inputFomulario" type="text" placeholder="obs" id="code" name="txbCode"></textarea>
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

    </div>
</div>

<hr>

<div class="container">
    <div class="row justify-content-left py-2">

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Identificacion</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="identificacion" id="idUser" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Nombre </label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="nombre" id="code" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Apellido</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="apellido" id="code" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Fecha Nacimiento</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="llegada" id="fecNa" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

    </div>
</div>

<hr>

<div class="container">
    <div class="row justify-content-left py-2">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Inclusion</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeConcepto" id="codConcepto" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_inclusio)){
                            foreach($arr_inclusio as $rowInc ){?>
                    <option select value="<?php echo $rowInc['codeInclusio'];?>"><?php echo $rowInc['nameInclusio'];?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>

    </div>
</div>

<hr>

<div class="container">
    <div class="row justify-content-left py-2">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label> No Inclusion</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeConcepto" id="codConcepto" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_inclusio)){
                            foreach($arr_inclusio as $rowInc ){?>
                    <option select value="<?php echo $rowInc['codeInclusio'];?>"><?php echo $rowInc['nameInclusio'];?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>

    </div>
</div>

<hr>
    <p>LIQUIDACION</p>
<hr>

<div class="container">
    <div class="row justify-content-left py-2">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Servicio</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                <select name="txbCodeConcepto" id="codConcepto" class="form-select inputFomulario" placeholder="Opciones"> 
                    <option select value="">SELECCIONE</option>
                    <?php if (isset($arr_concepto)){
                            foreach($arr_concepto as $rowCon ){?>
                    <option select value="<?php echo $rowCon['codeConc'];?>"><?php echo $rowCon['nameConc'];?></option>
                        <?php 
                            }
                        }?>         
                </select>
                    <label class="error" for="status" id="status_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Cantidad</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="cantidad" id="cantidad" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Precio</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="number" placeholder="precio" id="precio" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Total</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="number" placeholder="total" id="total" name="txbCode" readonly>
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

    </div>
</div>

<hr>

<div class="container">
    <div class="row justify-content-right py-2">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-left py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                            <label>Total a pagar pasajeros</label>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                        <input class="form-control inputFomulario" type="number" placeholder="$$" id="$$" name="txbCode">
                        <label class="error" for="code" id="code_error">Campo requerido.</label>
                    </div>
                </div>
            </div>      
        </div>

        <div class="row justify-content-right py-2">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                            <label>Total Impuestos</label>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                        <input class="form-control inputFomulario" type="text" placeholder="$$" id="$$" name="txbCode">
                        <label class="error" for="code" id="code_error">Campo requerido.</label>
                    </div>
                </div>
            </div>      
        </div>

        <div class="row justify-content-right py-2">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                            <label>Subtotal</label>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                        <input class="form-control inputFomulario" type="text" placeholder="$$" id="$$" name="txbCode">
                        <label class="error" for="code" id="code_error">Campo requerido.</label>
                    </div>
                </div>
            </div>      
        </div>

        <div class="row justify-content-right py-2">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                            <label>Comision</label>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                        <input class="form-control inputFomulario" type="text" placeholder="$$" id="$$" name="txbCode">
                        <label class="error" for="code" id="code_error">Campo requerido.</label>
                    </div>
                </div>
            </div>      
        </div>

        <div class="row justify-content-right py-2">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                            <label>Iva</label>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                        <input class="form-control inputFomulario" type="text" placeholder="$$" id="$$" name="txbCode">
                        <label class="error" for="code" id="code_error">Campo requerido.</label>
                    </div>
                </div>
            </div>      
        </div>

        <div class="row justify-content-right py-2">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                            <label>Rete Fuente</label>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                        <input class="form-control inputFomulario" type="text" placeholder="$$" id="$$" name="txbCode">
                        <label class="error" for="code" id="code_error">Campo requerido.</label>
                    </div>
                </div>
            </div>      
        </div>

        <div class="row justify-content-right py-2">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                            <label>Rete Ica</label>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                        <input class="form-control inputFomulario" type="text" placeholder="$$" id="$$" name="txbCode">
                        <label class="error" for="code" id="code_error">Campo requerido.</label>
                    </div>
                </div>
            </div>      
        </div>

        <div class="row justify-content-right py-2">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                            <label>Total a pagar</label>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                        <input class="form-control inputFomulario" type="text" placeholder="$$" id="$$" name="txbCode">
                        <label class="error" for="code" id="code_error">Campo requerido.</label>
                    </div>
                </div>
            </div>      
        </div>

        <div class="row justify-content-right py-2">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                            <label>Total a pagar Al Mundo Viajes</label>
                    </div>
                </div>
            </div>
            <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                <div class="row justify-content-right py-2">
                    <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                        <input class="form-control inputFomulario" type="text" placeholder="$$" id="cantidad" name="txbCode">
                        <label class="error" for="code" id="code_error">Campo requerido.</label>
                    </div>
                </div>
            </div>      
    </div>

</div>

<hr>

<div class="container">
    <div class="row justify-content-left py-2">

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Plazo para pago 50%</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="date" placeholder="plazo 50%" id="code" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Plazo para pago total</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="date" placeholder="plazo total" id="code" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="container">
    <div class="row justify-content-left py-2">

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Numero Reserva</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="reserva" id="code" name="txbCode">
                    <label class="error" for="code" id="code_error">Campo requerido.</label>
                </div>
            </div>
        </div>

        <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
            <div class="row justify-content-left py-2">
                <input id='btnSaveOperator'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
            </div>
        </div>

    </div>
</div>

</div>
</div>
</div>
 
