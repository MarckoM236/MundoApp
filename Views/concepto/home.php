<!-- Formulario -->
<form action="?controller=concepto&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >Concepto</label>
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

              <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
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
                


               <div  class="col-lg-2 col-md-3 col-sm-12 col-12 py-1 align-self-center text-left">
			    <div class="row justify-content-left py-2">
				   <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <input id='btnSaveConcepto'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
				 </div>
				   <div  class="col-lg-12 col-md-3 col-sm-12 col-12 py-1 align-self-center text-left">
                       <input id='search'class= "form-control botonesIS" style="width:130px"; type="submit" name="showConcepto" value="Buscar" />
				 </div>
			  </div>

              </div>

  <hr/>
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
