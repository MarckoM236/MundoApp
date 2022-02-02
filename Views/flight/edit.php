<?php
if(isset($resFlight)){
        foreach($resFlight as $data) {
        $num=$data->getNum();
        $route=$data->getRoute();
        $statusFl=$data->getStatus();
        $codAeroline=$data->getCodAeroline();
        $nameAeroline=$data->getAeroline();
        
       }   
        if($statusFl=="A"){
            $valStatus="ACTIVO";
        }
        else{
        $valStatus="INACTIVO";
        }
}
if(isset($resAeroline)){
    foreach($resAeroline as $data) {
        $code=$data->getCode();
        $name=$data->getName();
        $statusAr=$data->getStatus();

        $arr_aeroline[] = array("code" => $code,
        "name" => $name,
        "status" => $statusAr);    
    }
}            
?>
<!-- Formulario -->
<form method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >Operador</label>
                </div>

              </div>

  <hr/>
<div class="row justify-content-left py-2">

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Aerolinea</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeAeroline" id="codAeroline" class="form-select inputFomulario" placeholder="Opciones"> 
                              <option select value="<?php echo $codAeroline;?>"><?php echo $nameAeroline; ?></option>
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
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Numero Vuelo</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="# Vuelo" id="num" name="txbNum" value="<?php echo $num;?>">
                           <label class="error" for="num" id="num_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Ruta</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Ruta" id="route" name="txbRoute" value="<?php echo $route;?>">
                           <label class="error" for="route" id="route_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Estado</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbStatus" id="status" class="form-select inputFomulario" placeholder="Opciones"> 
                              <option select value="<?php echo $statusFl; ?>"><?php echo $valStatus;?></option>
                              <option value="A">ACTIVO</option>
                              <option value="I">INACTIVO</option>
                            </select>
                           <label class="error" for="status" id="status_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>


                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnUpdateFlight'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" name="updateFlight"/>
                    </div>
                </div>
                
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                    <input id='cancelUp'class= "form-control botonesIS" style="width:130px"; type="button" value="Cancelar" name="cancelFlight" onclick="cancel('flight','home')"/>
                    </div>
                </div>
                

</div>

  <hr/>
  
<hr/>
            </div>
          </div>
        </div>

   </form>
                
                <!-- Formulario -->