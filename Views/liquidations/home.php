<!-- Formulario -->
<form action="?controller=liquidac&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >Liquidacion</label>
                </div>

              </div>

  <hr/>
<div class="row justify-content-left py-2">

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Codigo de la liquidacion</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Codigo" id="code" name="txbCode">
                           <label class="error" for="code" id="code_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                
              <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                  <div class="row justify-content-left py-2">
                    <input id='search'class= "form-control botonesIS" style="width:130px;" type="submit" name="showLiQu" value="Buscar" />
                  </div>
              </div>

              <div  class="col-lg-4 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnNewLiQu'class= "form-control botonesIS" style="width:130px;" type="button" value="Nueva liquidacion" onclick="cancel('liquidac','insert')" />
                    </div>
                </div>


</div>

  <hr/>
  <?php      

                 if(isset($liquidac)){
                 foreach($liquidac as $data) {
                    $code=$data->getCodeLiqu();
                    $type=$data->getTipoLiqu();
                    $date=$data->getFecSis();
                    $agency=$data->getCodeAgency();
                    $seller=$data->getCodeSeller();
                    $destination=$data->getCodeDestination();


                   
                    $return_arr[] = array("code" => $code,
                    "type" => $type,
                    "date" => $date,
                    "agency" => $agency,
                    "seller" => $seller,
                    "destination" => $destination);    
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
                            <th style="width:30px;background-color: #9FD5D1">Tipo de Liquidacion</th>
                            <th style="width:30px;background-color: #9FD5D1">Fecha de Generacion</th>
                            <th style="width:30px;background-color: #9FD5D1">Agencia</th>
                            <th style="width:30px;background-color: #9FD5D1">Vendedor</th>
                            <th style="width:30px;background-color: #9FD5D1">Destino</th>
                            
                            <th style="width:30px;background-color: #9FD5D1">Eliminar</th>
                          </tr>
                        </thead>
						<br />
                        <tbody>
                            
                        <?php 
                        if (isset($return_arr)){
                        foreach($return_arr as $row ){?>
                        <tr>
                            <td><?php echo $row['code'];?></td>
                            <td><?php echo $row['type'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['agency'];?></td>
                            <td><?php echo $row['seller'];?></td>
                            <td><?php echo $row['destination'];?></td>
                            
                            <td><a onclick="deleteTipoLiQu(<?php echo $row['code'];?>)" class="btn btn-danger" ><i class="fa fa-trash-alt" aria-hidden="true"></i></a></td>
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
