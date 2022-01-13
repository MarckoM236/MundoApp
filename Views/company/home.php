<?php if(isset($res)){
    //    foreach($company as $data) {
    //        $status=$data['status'];
    //        $result=$data['result'];
    print_r($res);
       //}

       //echo $result;


  }?>  
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
                      </div>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Direccion</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" maxlength = "10" placeholder="Direccion" id="address" name="txbAddress">
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
                      </div>
                    </div>
                </div>


               <div  class="col-lg-2 col-md-3 col-sm-12 col-12 py-1 align-self-center text-left">
			    <div class="row justify-content-left py-2">
				   <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <input id='insert'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" onclick="insertCompany()" />
				 </div>
				   <div  class="col-lg-12 col-md-3 col-sm-12 col-12 py-1 align-self-center text-left">
                       <input id='excel'class= "form-control botonesIS" style="width:130px"; type="submit" name="showCompany" value="Buscar" />
				 </div>
			  </div>

              </div>

  <hr/>
  <?php 
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
                          </tr>
                        </thead>
						<br />
                        <tbody>
                        <?php foreach($return_arr as $row ){?>
                        <tr>
                            <td><?php echo $row['code'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['nit'];?></td>
                            <td><?php echo $row['rent'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['pbx'];?></td>
                            <td><?php echo $row['mobile'];?></td>
                            <td></td>
                            <td></td>
                            <td><a href="?controller=company&action=update&code=<?php echo $row['code'];?>"class="btn btn-warning" onclick=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            <td><a href="?controller=company&action=delete&code=<?php echo $row['code'];?>" class="btn btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                        </tr>
                        <?php }?>
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

               

                