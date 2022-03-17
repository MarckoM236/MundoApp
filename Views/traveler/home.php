<!-- Formulario -->
<form action="?controller=traveler&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >Viajero</label>
                </div>

              </div>

  <hr/>
<div class="row justify-content-left py-2">

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Identificacion</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Id" id="id" name="txbId">
                           <label class="error" for="id" id="id_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-4 col-4py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Nombre</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Nombre" id="name" name="txbName">
                           <label class="error" for="name" id="name_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-sm-4 col-4py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Apellido</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Apellido" id="lastName" name="txbLastName">
                           <label class="error" for="lastName" id="lastName_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Fecha Nacimiento</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="date" placeholder="dd-mm-yyyy" id="birthDate" name="txbBirthDate">
                           <label class="error" for="birthDate" id="birthDate_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>


              <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnSaveTraveler'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>
                
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='search'class= "form-control botonesIS" style="width:130px"; type="submit" name="showTraveler" value="Buscar" />
                    </div>
                </div>             

</div>

  <hr/>
  <?php      

                 if(isset($traveler)){
                 foreach($traveler as $data) {
                    $id=$data->getId();
                    $name=$data->getName();
                    $lastName=$data->getLastName();
                    $birthDate=date_create($data->getBirthDate());
                    $birt=date_format($birthDate,"d/m/Y");

                    $return_arr[] = array("id" => $id,
                    "name" => $name,
                    "lastName" => $lastName,
                    "birthDate" => $birt);    
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
                            <th style="width:30px;background-color: #9FD5D1;">Identificacion</th>
                            <th style="width:30px;background-color: #9FD5D1">Nombre</th>
                            <th style="width:30px;background-color: #9FD5D1">Apellido</th>
                            <th style="width:30px;background-color: #9FD5D1">Fecha Nacimiento</th>
                            <th style="width:30px;background-color: #9FD5D1">Editar</th>
                            <th style="width:30px;background-color: #9FD5D1">Eliminar</th>
                          </tr>
                        </thead>
						<br />
                        <tbody>
                            
                        <?php 
                        if (isset($return_arr)){
                        foreach($return_arr as $row ){?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['lastName'];?></td>
                            <td><?php echo $row['birthDate'];?></td>
                            <td><a href="?controller=traveler&action=update&id=<?php echo $row['id'];?>"class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a onclick="deleteTraveler(<?php echo $row['id'];?>)" class="btn btn-danger" ><i class="fa fa-trash-alt" aria-hidden="true"></i></a></td>
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
