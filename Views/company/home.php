<!-- Formulario -->
<form action="?controller=company&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >Empresa</label>
                </div>

              </div>

  <hr/>
<div class="row justify-content-left py-2">

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Codigo</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Codigo" id="code" name="txbCode">
                           <label class="error" for="code" id="code_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

              <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Nombre</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Nombre" id="name" name="txbName">
                           <label class="error" for="name" id="name_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Nit</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Nit" id="nit" name="txbNit">
                           <label class="error" for="nit" id="nit_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
				 <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Rent</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" maxlength = "10" placeholder="Rent" id="rent" name="txbRent">
                           <label class="error" for="rent" id="rent_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
                <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Direccion</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" maxlength = "10" placeholder="Direccion" id="address" name="txbAddress">
                           <label class="error" for="address" id="address_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>PBX</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" maxlength = "10" placeholder="PBX" id="pbx" name="txbPBX">
                           <label class="error" for="pbx" id="pbx_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Celular</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" maxlength = "10" placeholder="Celular" id="mobile" name="txbMobile">
                           <label class="error" for="mobile" id="mobile_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnSaveCompany'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>
                
              <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                  <div class="row justify-content-left py-2">
                    <input id='search'class= "form-control botonesIS" style="width:130px"; type="submit" name="showCompany" value="Buscar" />
                  </div>
              </div>

</div>

  <hr/>
  <?php      
                /*  $return_arr[] = array("code" => "--",
                 "name" => "----",
                 "nit" => "----",
                 "rent" => "----",
                 "address" => "----",
                 "pbx" => "----",
                 "mobile" => "----");   */

                 if(isset($company)){
                 foreach($company as $data) {
                    $code=$data->getCode();
                    $name=$data->getName();
                    $nit=$data->getNit();
                    $rent=$data->getRent();
                    $address=$data->getAddress();
                    $pbx=$data->getPbx();
                    $mobile=$data->getMobile();

                   
                    $return_arr[] = array("code" => $code,
                    "name" => $name,
                    "nit" => $nit,
                    "rent" => $rent,
                    "address" => $address,
                    "pbx" => $pbx,
                    "mobile" => $mobile);
                    
                    
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
                            <th style="width:30px;background-color: #9FD5D1">Nombre</th>
                            <th style="width:60px;background-color: #9FD5D1">Nit</th>
                            <th style="width:30px;background-color: #9FD5D1">Rent</th>
                            <th style="width:20px;background-color: #9FD5D1">Direccion</th>
                            <th style="width:20px;background-color: #9FD5D1">PBX</th>
                            <th style="width:20px;background-color: #9FD5D1">Celular</th>
                            <th style="width:20px;background-color: #9FD5D1">Editar</th>
                            <th style="width:20px;background-color: #9FD5D1">Borrar</th>
                          </tr>
                        </thead>
						<br />
                        <tbody>
                            
                        <?php 
                        if (isset($return_arr)){
                        foreach($return_arr as $row ){?>
                        <tr>
                            <td><?php echo $row['code'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['nit'];?></td>
                            <td><?php echo $row['rent'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['pbx'];?></td>
                            <td><?php echo $row['mobile'];?></td>
                            <td><a href="?controller=company&action=update&code=<?php echo $row['code'];?>"class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a onclick="deleteCompany(<?php echo $row['code'];?>)" class="btn btn-danger" ><i class="fa fa-trash-alt" aria-hidden="true"></i></a></td>
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

               

                