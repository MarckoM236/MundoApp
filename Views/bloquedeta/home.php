<!-- Formulario -->
<form action="?controller=bloquedeta&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >DETALLE - BLOQUEO</label>
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
                            <label>Liquidacion</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Nombre" id="liquidac" name="txbLiquidac">
                           <label class="error" for="liquidac" id="liquidac_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-sm-4 col-4 py-1 align-self-center text-left pad">
            <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                        <label>Identificacion</label>
                </div>
                <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <input class="form-control inputFomulario" type="text" placeholder="identificacion" id="idTravelerlock" name="txbCodTraveler">
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
                

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnSaveBloqdeta'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
                    <div class="row justify-content-left py-2">
                        <input id='btnAddBloqdeta'class= "form-control botonesIS" style="width:130px"; type="button" value="+" onclick="addSelectBloqdeta()"/>
                    </div>
                </div>
                
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='search'class= "form-control botonesIS" style="width:130px"; type="submit" name="showBloqdeta" value="Buscar" />
                    </div>
                </div>

</div>

  <hr/>
<!-- results-->
<table class="table-bloqdeta">
  <thead>
    <th>Codigo</th>
    <th>Liquidacion</th>
    <th>Identificacion</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Fecha Nacimiento</th>
    <th></th>
  </thead>
  <tbody id="lista-bloqdeta">
  </tbody>
</table>
<!-- fin results-->
<hr>
  <?php      

                 if(isset($concepto)){
                 foreach($concepto as $data) {
                    $code=$data->getCode();
                    $name=$data->getName();

                   
                    $return_arr[] = array("code" => $code,
                    "name" => $name);    
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
                            <td><?php echo $row['code'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><a href="?controller=concepto&action=update&code=<?php echo $row['code'];?>"class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a onclick="deleteConcepto(<?php echo $row['code'];?>)" class="btn btn-danger" ><i class="fa fa-trash-alt" aria-hidden="true"></i></a></td>
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
                <script src="JS/jquery-3.6.0.js"></script>
                <script type="text/javascript">
                  $(document).ready(function () {
                  $("#idTravelerlock").keyup(function () {
                      var value = $(this).val();
                      var numCharacter= value.length;

                      if(numCharacter>1){
                        showTraveler(value,"bloqdeta");
                        //alert(value);
                      }
                      
                  });
                });

                //******** remove rows from pivot table containing items (bloqdeta) */
                $(document).on('click', '.deleteBloqdeta', function (event) {
                    event.preventDefault();
                    $(this).closest('tr').remove();
                    //alert('Hola');
                    });
                    //****************************************************************************** */
              </script>