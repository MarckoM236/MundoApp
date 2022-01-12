<?php
$co="";
if(isset($res)){
                 foreach($res as $data) {
                    $code=$data->getCode();
                    $name=$data->getName();
                    $nit=$data->getNit();
                    $rent=$data->getRent();
                    $address=$data->getAddress();
                    $pbx=$data->getPbx();
                    $mobile=$data->getMobile();

        
                }

            }
?>

<!-- Formulario -->

<form action="?controller=company&action=update" method="post">
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
                           <input class="form-control inputFomulario" type="text" placeholder="Codigo" id="code" name="txbCode" value="<?php echo $code; ?>" readonly>

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
                      </div>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Nit</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="Nit" id="nit" name="txbNit" value="<?php echo $nit; ?>">
                      </div>
                    </div>
                </div>
				 <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Rent</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" maxlength = "10" placeholder="Rent" id="rent" name="txbRent" value="<?php echo $rent; ?>">
                      </div>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Direccion</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" maxlength = "10" placeholder="Direccion" id="address" name="txbAddress" value="<?php echo $address; ?>">
                      </div>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>PBX</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" maxlength = "10" placeholder="PBX" id="pbx" name="txbPBX" value="<?php echo $pbx; ?>">
                      </div>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Celular</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" maxlength = "10" placeholder="Celular" id="mobile" name="txbMobile" value="<?php echo $mobile; ?>">
                      </div>
                    </div>
                </div>


               <div  class="col-lg-2 col-md-3 col-sm-12 col-12 py-1 align-self-center text-left">
			    <div class="row justify-content-left py-2">
				   <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <input id='insert'class= "form-control botonesIS" style="width:130px"; type="submit" value="Guardar" />
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