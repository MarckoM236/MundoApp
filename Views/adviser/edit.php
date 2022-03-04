<?php
if(isset($res)){
                 foreach($res as $data) {
                    $id=$data->getId();
                    $name=$data->getName();
                    $lastName=$data->getLastName();
                    $status=$data->getStatus();
                }
                if($status=="A"){
                  $valStatus="ACTIVO";
                }
                else{
                  $valStatus="INACTIVO";
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
                      <label class="titulosPrincipalesPagina" >Asesor</label>
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
                           <input class="form-control inputFomulario" type="text" placeholder="Id" id="id" name="txbId" value="<?php echo $id; ?>" readonly>
                           <label class="error" for="id" id="id_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

              <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Nombre</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Nombre" id="name" name="txbName" value="<?php echo $name; ?>">
                           <label class="error" for="name" id="name_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Apellido</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Apellido" id="lastName" name="txbLastName" value="<?php echo $lastName; ?>">
                           <label class="error" for="lastName" id="lastName_error">Campo requerido.</label>
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
                              <option select value="<?php echo $status; ?>"><?php echo $valStatus;?></option>
                              <option value="A">ACTIVO</option>
                              <option value="I">INACTIVO</option>
                            </select>
                           <label class="error" for="status" id="status_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
                


               <div  class="col-lg-2 col-md-3 col-sm-12 col-12 py-1 align-self-center text-left">
			    <div class="row justify-content-left py-2">
				   <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <input id='btnUpdateAdviser'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" name="updateAdviser"/>
				 </div>
				   
				 </div>
			  </div>

              <div  class="col-lg-2 col-md-3 col-sm-12 col-12 py-1 align-self-center text-left">
			    <div class="row justify-content-left py-2">
				   <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <input id='cancelUp'class= "form-control botonesIS" style="width:130px"; type="button" value="Cancelar" name="cancelUpdate" onclick="cancel('adviser','home')"/>
				 </div>
				   
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