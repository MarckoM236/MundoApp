<?php
if(isset($hotel)){
    foreach($hotel as $dataHot) {
    $codeHot=$dataHot->getCode();
    $nameHot=$dataHot->getName();

    $arr_hotel[] =array("codeHot" => $codeHot,
    "nameHot" => $nameHot);    
}
}  
                
if(isset($alim)){
    foreach($alim as $dataAlim) {
        $codeAlim=$dataAlim->getCode();
        $nameAlim=$dataAlim->getName();

        $arr_alim[] =array("codeAlim" => $codeAlim,
        "nameAlim" => $nameAlim);    
    }
    }  

if(isset($arr_tarisama)){
    $dateInVi = date_create($arr_tarisama[0]['dateVigIni']);
    $div=date_format($dateInVi,"Y-m-d");

    $dateFiVi = date_create($arr_tarisama[0]['dateVigFin']);
     $dfv=date_format($dateFiVi,"Y-m-d");

    $dateInEx = date_create($arr_tarisama[0]['dateExeIni']);
    $die=date_format($dateInEx,"Y-m-d");

    $dateFiEx = date_create($arr_tarisama[0]['dateExeIni']);
    $dfe=date_format($dateFiEx,"Y-m-d");
}   

     
                
?>
<style>
    .ocultar{
  display:none;
}
</style>
<!-- Formulario -->
<form action="?controller=tarisama&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >SAN ANDRES - TARIFAS</label>
                </div>

              </div>

  <hr/>
<div class="row justify-content-left py-2">
                
                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Hostal</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeHotel" id="codeHotel" class="form-select inputFomulario" placeholder="Opciones"> 
                              <option select value="<?php echo $arr_tarisama[0]['codeHotel']?>"><?php echo $arr_tarisama[0]['nameHotel']?></option>
                              <option value="">-------</option>
                             <?php if (isset($arr_hotel)){
                                        foreach($arr_hotel as $rowHot ){
                                            ?>
                                            <option select value="<?php echo $rowHot['codeHot'];?>"><?php echo $rowHot['nameHot'];?></option>
                                    <?php 
                                        }
                                    }?>         
                            </select>
                           <label class="error" for="codeHotel" id="codeHotel_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Plan</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeAlim" id="codeAlim" class="form-select inputFomulario" placeholder="Opciones"> 
                              <option select value="<?php echo $arr_tarisama[0]['codeAlim']?>"><?php echo $arr_tarisama[0]['nameAlim']?></option>
                              <option value="">-------</option>
                             <?php if (isset($arr_alim)){
                                        foreach($arr_alim as $rowAlim ){
                                            ?>
                                            <option select value="<?php echo $rowAlim['codeAlim'];?>"><?php echo $rowAlim['nameAlim'];?></option>
                                    <?php 
                                        }
                                    }?>         
                            </select>
                           <label class="error" for="codeAlim" id="codeAlim_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Sencilla</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueSencilla" name="txbValueSencilla" value="<?php echo $arr_tarisama[0]['value']?>">
                           <label class="error" for="valueSencilla" id="valueSencilla_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Doble</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="vallor" id="valueDoble" name="txbValueDoble" value="<?php echo $arr_tarisama[1]['value']?>" >
                           <label class="error" for="valueDoble" id="valueDoble_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Triple</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueTriple" name="txbValuetriple" value="<?php echo $arr_tarisama[2]['value']?>">
                           <label class="error" for="valueTriple" id="valueTriple_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Cuadruple</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueCuadruple" name="txbValueCuadruple" value="<?php echo $arr_tarisama[3]['value']?>">
                           <label class="error" for="valueCuadruple" id="valueCuadruple_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Niños</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueNino" name="txbValueNino" value="<?php echo $arr_tarisama[4]['value']?>">
                           <label class="error" for="valueNino" id="ValueNino_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Vigencia Inicial</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="date" placeholder="fecha" id="dateInVi" name="txbDateInVi" value="<?php echo $div;?>">
                           <label class="error" for="dateInVi" id="dateInVi_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Vigencia Final</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="date" placeholder="" id="dateFiVi" name="txbDateFiVi" value="<?php echo $dfv;?>">
                           <label class="error" for="dateFiVi" id="dateFiVi_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Excepcion Inicial</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="date" placeholder="fecha" id="dateInEx" name="txbDateInEx" value="<?php echo $die;?>">
                           <label class="error" for="dateInEx" id="dateInEx_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Excepcion final</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="date" placeholder="fecha" id="dateFiEx" name="txbDateFiEx" value="<?php echo $dfe;?>">
                           <label class="error" for="dateFiEx" id="dateFiEx_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnUpdateTarisama'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
                    <div class="row justify-content-left py-2">
                        <input id='btnAddTariSama'class= "form-control botonesIS" style="width:130px"; type="button" value="+" onclick="addSelectTarisama()"/>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                    <input id='cancelUp'class= "form-control botonesIS" style="width:130px"; type="button" value="Cancelar" name="canceltarisama
                    " onclick="cancel('tarisama','home')"/>
                </div>
                <hr/>
                
                
                
</div>
</form>
<hr/>
<!-- results-->
<table class="table-tariSama">
  <thead>
    <th class="ocultar">codHotel</th>
    <th>Hotel</th>
    <th class="ocultar">codTipAlim</th>
    <th>Plan</th>
    <th>Sencilla</th>
    <th>Doble</th>
    <th>Triple</th>
    <th>Cuadruple</th>
    <th>Niño</th>
    <th>Vigencia Inicial</th>
    <th>Vigencia Final</th>
    <th>Excepcion Inicial</th>
    <th>Excepcion Final</th>
    <th></th>
  </thead>
  <tbody id="lista-tariSama">
  </tbody>
</table>
<!-- fin results-->
  <?php      

                //print_r($arr_tarisama);
                ?>
                <br>
                <div class="row justify-content-cennter py-0 listado ">

                   
                </div>
                
<hr/>
            </div>
          </div>
        </div>

   
                 <!-- Formulario -->
                <script src="JS/jquery-3.6.0.js"></script>
                <script type="text/javascript">
                    //******** remove rows from pivot table containing items (Tarisama) */
                    $(document).on('click', '.deleteTarisama', function (event) {
                    event.preventDefault();
                    $(this).closest('tr').remove();
                    //alert('Hola');
                    });
                    //****************************************************************************** */
                </script>
