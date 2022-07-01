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
<!-- Formulario -->
<form action="?controller=lock&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >Bloqueo</label>
                </div>

              </div>

  <hr/>
<div class="row justify-content-left py-2">

<div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>codigo</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="# codigo" id="codeLock" name="txbCode">
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
                              <option select value="">SELECCIONE</option>
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
                              <option select value="">SELECCIONE</option>
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
                              <option select value="">SELECCIONE</option>
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

                <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
                    <div class="row justify-content-left py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                                <label>Fecha Ida</label>
                        </div>
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <input class="form-control inputFomulario" type="date" placeholder="fecha ida" id="fecIdaLock" name="txbFecIdaLock" value="<?php echo date('Y-m-d');?>">
                            <label class="error" for="fecIdaLock" id="fecIdaLock_error">Campo requerido.</label>
                            <label class="error" for="fecIdaLock" id="fecIdaLock_error">La fecha no puede ser anterior a la actual</label>
                        </div>
                    </div>
                </div>

                <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
                    <div class="row justify-content-left py-2">
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                                <label>Fecha Regreso</label>
                        </div>
                        <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <input class="form-control inputFomulario" type="date" placeholder="fecha viaje" id="fecRegLock" name="txbFecIdaLock" value="<?php echo date('Y-m-d');?>">
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
                              <option select value="">SELECCIONE</option>
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
                              <option select value="">SELECCIONE</option>
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
                           <input class="form-control inputFomulario" type="text" placeholder="sillas" id="cantLock" name="txbCantLock">
                           <label class="error" for="cantLock" id="cantLok_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Tarifa</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="tarifa" id="tariLock" name="txbtariLock">
                           <label class="error" for="tariLock" id="tariLock_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>


              <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnSaveLock'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>
                
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='search'class= "form-control botonesIS" style="width:130px"; type="submit" name="showLock" value="Buscar" />
                    </div>
                </div>             

</div>

  <hr/>
  <?php      

                 if(isset($lock)){
                 foreach($lock as $dataLock) {
                    $code=$dataLock->getCode();
                    $aero=$dataLock->getAeroline();
                    $dest=$dataLock->getDestination();
                    $ori=$dataLock->getOrigen();
                    $dateI=$dataLock->getDateIn();
                    $dateR=$dataLock->getDateFi();
                    $flightI=$dataLock->getFlightI();
                    $flightR=$dataLock->getFlightR();
                    $cantS=$dataLock->getAmount();
                    $sald=$dataLock->getBalance();


                    $return_arr[] = array("code" => $code,
                    "aero" => $aero,
                    "destination" => $dest,
                    "origin" => $ori,
                    "fecIda" => $dateI,
                    "fecReg" =>$dateR,
                    "flightI" =>$flightI,
                    "flightR" =>$flightR,
                    "cantS" => $cantS,
                    "sald" => $sald);    
                }
                //print_r($return_arr);
                ?>
                <br>
                <div class="row justify-content-cennter py-0 listado ">

                   <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
                    <div class="table-responsive" >

                      <table class="table table-bordered " >
                        <thead>
                          <tr>
                           <th style="width:30px;background-color: #9FD5D1;">Codigo</th>
                            <th style="width:30px;background-color: #9FD5D1;">Aerolinea</th>
                            <th style="width:30px;background-color: #9FD5D1">Origen</th>
                            <th style="width:30px;background-color: #9FD5D1">Destino</th>
                            <th style="width:30px;background-color: #9FD5D1">Fecha Ida</th>
                            <th style="width:30px;background-color: #9FD5D1">Fecha Regreso</th>
                            <th style="width:30px;background-color: #9FD5D1">Vuelo Ida</th>
                            <th style="width:30px;background-color: #9FD5D1">Vuelo Regreso</th>
                            <th style="width:30px;background-color: #9FD5D1">Solicitadas</th>
                            <th style="width:30px;background-color: #9FD5D1">Saldo</th>
                            <th style="width:30px;background-color: #9FD5D1">Editar</th>
                            <th style="width:30px;background-color: #9FD5D1">Eliminar</th>
                          </tr>
                        </thead>
						<br />
                        <tbody>
                            
                        <?php 
                        if (isset($return_arr)){
                          foreach($return_arr as $row ){
                         
                            ?>
                        <tr>
                            <td><?php echo $row['code'];?></td>
                            <td><?php echo $row['aero'];?></td>
                            <td><?php echo $row['destination'];?></td>
                            <td><?php echo $row['origin'];?></td>
                            <td><?php echo $row['fecIda'];?></td>}
                            <td><?php echo $row['fecReg'];?></td>
                            <td><?php echo $row['flightI'];?></td>
                            <td><?php echo $row['flightR'];?></td>
                            <td><?php echo $row['cantS'];?></td>
                            <td><?php echo $row['sald'];?></td>
                            <td><a href="?controller=flight&action=update&code=<?php echo $row['num'];?>"class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a onclick="deleteFlight(<?php echo $row['num'];?>)" class="btn btn-danger" ><i class="fa fa-trash-alt" aria-hidden="true"></i></a></td>
                        </tr>
                        <?php }}
                        else{?>
                        <tr>
                            No hay elementos para mostrar
                        </tr>
                       <?php }
                        ?>
                    </tbody>

                      </table>

                    </div>
                  </div>
                </div>
                <?php }?>
                <!--  -->
<hr/>
            </div>
          </div>
        </div>

   </form>
                
                <!-- Formulario -->
