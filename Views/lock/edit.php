<?php
    if(isset($aeroline)){
        foreach($aeroline as $data) {
            $code=$data->getCode();
            $name=$data->getName();
            $status=$data->getStatus();

            $arr_aeroline[] = array("code" => $code,
            "name" => $name,
            "status" => $status);    
        }
    }    
    if(isset($destination)){
        foreach($destination as $dataDest) {
            $code=$dataDest->getCode();
            $name=$dataDest->getName();
            
            $arr_destination[] = array("code" => $code,
            "name" => $name);    
        }
    } 
    if(isset($flight)){
        foreach($flight as $dataFli) {
            $code=$dataFli->getNum();
            $name=$dataFli->getRoute();
            $status=$dataFli->getStatus();

            $arr_flight[] = array("code" => $code,
            "name" => $name,
            "status" => $status);    
        }
    }    

?>
<style>
    .ocultar{
      display:none;
    }
    .cont{
        display: flex;
}
</style>
<!-- Formulario -->
<form action="?controller=lock&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >Bloqueos</label>
                </div>

              </div>

  <hr/>
<div class="row justify-content-left py-2">

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left ocultar">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>codigo</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="# codigo" id="codeLock" name="txbCode" disabled value="<?php echo $arr_lock[0]['code']; ?>">
                           <label class="error" for="codeLock" id="codeLock_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Aerolinea</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeAeroline" id="codeAeroline" class="form-select inputFomulario" placeholder="Opciones"> 
                                <option select value="<?php echo $arr_lock[0]['codeAeroline']; ?>"><?php echo $arr_lock[0]['nameAeroline']; ?></option>
                                <option  value="">---------</option>
                             <?php if (isset($arr_aeroline)){
                                        foreach($arr_aeroline as $row ){
                                            if($row['status']=="A"){?>
                                            <option select value="<?php echo $row['code'];?>"><?php echo $row['name'];?></option>
                                    <?php }
                                        }
                                    }?>         
                            </select>
                           <label class="error" for="codAeroline" id="codAeroline_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Origen</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeOr" id="codeOr" class="form-select inputFomulario" placeholder="Opciones"> 
                               <option select value="<?php echo $arr_lock[0]['codeOrigen']; ?>"><?php echo $arr_lock[0]['nameOrigen']; ?></option>
                               <option value="">-----</option>
                             <?php if (isset($arr_destination)){
                                        foreach($arr_destination as $row ){?>
                                            <option select value="<?php echo $row['code'];?>"><?php echo $row['name'];?></option>
                                    <?php }
                                        }
                                    ?>         
                            </select>
                           <label class="error" for="codeOr" id="codeOr_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Destino</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeDest" id="codeDest" class="form-select inputFomulario" placeholder="Opciones"> 
                                <option select value="<?php echo $arr_lock[0]['codeDestination']; ?>"><?php echo $arr_lock[0]['nameDestination']; ?></option>
                                <option value="">-------</option>
                             <?php if (isset($arr_destination)){
                                        foreach($arr_destination as $row ){?>
                                            <option select value="<?php echo $row['code'];?>"><?php echo $row['name'];?></option>
                                    <?php }
                                        }
                                    ?>         
                            </select>
                           <label class="error" for="codeDest" id="codeDest_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-sm-2 col-2 py-1 align-self-center text-left pad">
                    <div class="row justify-content-left py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                                <label>Fecha Ida</label>
                        </div>
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <input class="form-control inputFomulario" type="date" placeholder="fecha ida" id="fecIdaLock" name="txbFecIdaLock" value="<?php echo $arr_lock[0]['dateIn'];?>">
                            <label class="error" for="fecIdaLock" id="fecIdaLock_error">Campo requerido.</label>
                            <label class="error" for="fecIdaLock" id="fecIdaLock_error">La fecha no puede ser anterior a la actual</label>
                        </div>
                    </div>
                </div>

                <div  class="col-sm-2 col-2 py-1 align-self-center text-left pad">
                    <div class="row justify-content-left py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                                <label>Fecha Regreso</label>
                        </div>
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <input class="form-control inputFomulario" type="date" placeholder="fecha viaje" id="fecRegLock" name="txbFecIdaLock" value="<?php echo $arr_lock[0]['dateFi'];?>">
                            <label class="error" for="fecIdaLock" id="fecIdaLock_error">Campo requerido.</label>
                            <label class="error" for="fecIdaLockMen" id="fecIdaLockMen_error">La fecha no puede ser anterior a la actual</label>
                        </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>vuelo Ida</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeFlightIda" id="codeFlightIda" class="form-select inputFomulario" placeholder="Opciones"> 
                                <option select value="<?php echo $arr_lock[0]['codeFlightI']; ?>"><?php echo $arr_lock[0]['nameFlightI']; ?></option>
                                <option value="">-------</option>
                             <?php if (isset($arr_flight)){
                                        foreach($arr_flight as $row ){
                                            if($row['status']=="A"){?>
                                            <option select value="<?php echo $row['code'];?>"><?php echo $row['name'];?></option>
                                    <?php }
                                        }
                                    }?>         
                            </select>
                           <label class="error" for="codeFlightIda" id="codeFlightIda_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>vuelo Regreso</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeFlightReg" id="codeFlightReg" class="form-select inputFomulario" placeholder="Opciones"> 
                                <option select value="<?php echo $arr_lock[0]['codeFlightR']; ?>"><?php echo $arr_lock[0]['nameFlightR']; ?></option>
                                <option value="">-------</option>
                             <?php if (isset($arr_flight)){
                                        foreach($arr_flight as $row ){
                                            if($row['status']=="A"){?>
                                            <option select value="<?php echo $row['code'];?>"><?php echo $row['name'];?></option>
                                    <?php }
                                        }
                                    }?>         
                            </select>
                           <label class="error" for="codeFlightReg" id="codeFlightReg_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Cantidad</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="sillas" id="cantLock" name="txbCantLock" value="<?php echo $arr_lock[0]['amount']; ?>">
                           <label class="error" for="cantLock" id="cantLok_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Tarifa</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="tarifa" id="tariLock" name="txbtariLock" value="<?php echo $arr_lock[0]['tariff']; ?>">
                           <label class="error" for="tariLock" id="tariLock_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>


              <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnUpdateLock'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>
                
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                    <input id='cancelUp'class= "form-control botonesIS" style="width:130px"; type="button" value="Cancelar" name="cancelLock" onclick="cancel('lock','home')"/>
                </div>     

</div>

            </div>
          </div>
        </div>

   </form>
                
                <!-- Formulario -->
