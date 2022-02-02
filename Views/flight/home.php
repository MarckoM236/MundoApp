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
                //print_r($arr_aeroline);       
?>
<!-- Formulario -->
<form action="?controller=flight&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >Vuelo</label>
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
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Numero Vuelo</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="# Vuelo" id="num" name="txbNum">
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
                           <input class="form-control inputFomulario" type="text" placeholder="Ruta" id="route" name="txbRoute">
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
                              <option select value="">SELECCIONE</option>
                              <option value="A">ACTIVO</option>
                              <option value="I">INACTIVO</option>
                            </select>
                           <label class="error" for="status" id="status_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>


              <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnSaveFlight'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>
                
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='search'class= "form-control botonesIS" style="width:130px"; type="submit" name="showFlight" value="Buscar" />
                    </div>
                </div>             

</div>

  <hr/>
  <?php      

                 if(isset($flight)){
                 foreach($flight as $data) {
                    $num=$data->getNum();
                    $route=$data->getRoute();
                    $status=$data->getStatus();
                    $codAeroline=$data->getCodAeroline();
                    $nameAeroline=$data->getAeroline();

                    $return_arr[] = array("num" => $num,
                    "route" => $route,
                    "status" => $status,
                    "codAeroline" => $codAeroline,
                    "nameAeroline" => $nameAeroline);    
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
                            <th style="width:30px;background-color: #9FD5D1;">Aerolinea</th>
                            <th style="width:30px;background-color: #9FD5D1">Numero Vuelo</th>
                            <th style="width:30px;background-color: #9FD5D1">Ruta</th>
                            <th style="width:30px;background-color: #9FD5D1">Estado</th>
                            <th style="width:30px;background-color: #9FD5D1">Editar</th>
                            <th style="width:30px;background-color: #9FD5D1">Eliminar</th>
                          </tr>
                        </thead>
						<br />
                        <tbody>
                            
                        <?php 
                        if (isset($return_arr)){
                        foreach($return_arr as $row ){
                            if($row['status']=="A"){
                                $valStatus="ACTIVO";
                            }
                            else{
                                $valStatus="INACTIVO";
                            }    
                            ?>
                        <tr>
                            <td><?php echo $row['nameAeroline'];?></td>
                            <td><?php echo $row['num'];?></td>
                            <td><?php echo $row['route'];?></td>
                            <td><?php echo $valStatus;?></td>
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
