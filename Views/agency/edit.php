<?php
if(isset($res)){
                 foreach($res as $data) {
                    $code=$data->getCode();
                    $name=$data->getName();
                    $status=$data->getStatus();
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
                      <label class="titulosPrincipalesPagina" >Agencia</label>
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
                           <input class="form-control inputFomulario" type="text" placeholder="Codigo" id="code" name="txbCode" value="<?php echo $code; ?>" readonly>
                           <label class="error" for="code" id="code_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

              <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
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

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Estado</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus" value="<?php echo $status; ?>">
                           <label class="error" for="name" id="name_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
                


               <div  class="col-lg-2 col-md-3 col-sm-12 col-12 py-1 align-self-center text-left">
			    <div class="row justify-content-left py-2">
				   <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <input id='btnUpdateAgency'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" name="updateAgency"/>
				 </div>
				   
				 </div>
			  </div>

              <div  class="col-lg-2 col-md-3 col-sm-12 col-12 py-1 align-self-center text-left">
			    <div class="row justify-content-left py-2">
				   <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <input id='update'class= "form-control botonesIS" style="width:130px"; type="button" value="Cancelar" name="cancelUpdate" onclick="cancel('agency','home')"/>
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