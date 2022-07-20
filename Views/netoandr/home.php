<?php
if(isset($hotel)){
    foreach($hotel as $dataHot) {
    $codeHot=$dataHot->getCode();
    $nameHot=$dataHot->getName();

    $arr_hotel[] =array("codeHot" => $codeHot,
    "nameHot" => $nameHot);    
}
}  
                
if(isset($alim)){
    foreach($alim as $dataAlim) {
        $codeAlim=$dataAlim->getCode();
        $nameAlim=$dataAlim->getName();

        $arr_alim[] =array("codeAlim" => $codeAlim,
        "nameAlim" => $nameAlim);    
    }
    }  

     
                
?>
<style>
    .ocultar{
  display:none;
}
</style>
<!-- Formulario -->
<form action="?controller=netoandr&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >San Andres - Netos</label>
                </div>

              </div>

  <hr/>
          <div class="row justify-content-center py-2">     
                <div  class=" col-sm-5 col-5 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Hostal</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeHotel" id="codeHotel" class="form-select inputFomulario" placeholder="Opciones"> 
                              <option select value="">SELECCIONE</option>
                             <?php if (isset($arr_hotel)){
                                        foreach($arr_hotel as $rowHot ){
                                            ?>
                                            <option select value="<?php echo $rowHot['codeHot'];?>"><?php echo $rowHot['nameHot'];?></option>
                                    <?php 
                                        }
                                    }?>         
                            </select>
                           <label class="error" for="codeHotel" id="codeHotel_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-5 col-5 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Plan</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeAlim" id="codeAlim" class="form-select inputFomulario" placeholder="Opciones"> 
                              <option select value="">SELECCIONE</option>
                             <?php if (isset($arr_alim)){
                                        foreach($arr_alim as $rowAlim ){
                                            ?>
                                            <option select value="<?php echo $rowAlim['codeAlim'];?>"><?php echo $rowAlim['nameAlim'];?></option>
                                    <?php 
                                        }
                                    }?>         
                            </select>
                           <label class="error" for="codeAlim" id="codeAlim_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
          </div>  
          
          <div class="row justify-content-center py-2"> 
                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>1x1</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueSencilla" name="txbValueSencilla">
                           <label class="error" for="valueSencilla" id="valueSencilla_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>1x2</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="vallor" id="valueDoble" name="txbValueDoble" >
                           <label class="error" for="valueDoble" id="valueDoble_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>1x3</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueTriple" name="txbValuetriple">
                           <label class="error" for="valueTriple" id="valueTriple_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>1x4</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueCuadruple" name="txbValueCuadruple">
                           <label class="error" for="valueCuadruple" id="valueCuadruple_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Niños</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueNino" name="txbValueNino">
                           <label class="error" for="valueNino" id="ValueNino_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Vigencia Inicial</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="date" placeholder="fecha" id="dateInVi" name="txbDateInVi" value="<?php echo date('Y-m-d');?>">
                           <label class="error" for="dateInVi" id="dateInVi_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Vigencia Final</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="date" placeholder="" id="dateFiVi" name="txbDateFiVi" value="<?php echo date('Y-m-d');?>">
                           <label class="error" for="dateFiVi" id="dateFiVi_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Excepcion Inicial</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="date" placeholder="fecha" id="dateInEx" name="txbDateInEx" value="<?php echo date('Y-m-d');?>">
                           <label class="error" for="dateInEx" id="dateInEx_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Excepcion final</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="date" placeholder="fecha" id="dateFiEx" name="txbDateFiEx" value="<?php echo date('Y-m-d');?>">
                           <label class="error" for="dateFiEx" id="dateFiEx_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnSaveNetoandr'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
                    <div class="row justify-content-left py-2">
                        <input id='btnAddNetoAndr'class= "form-control botonesIS" style="width:130px"; type="button" value="+" onclick="addSelectNetoandr()"/>
                    </div>
                </div>
                <hr/>
                <!-- <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='search'class= "form-control botonesIS" style="width:130px"; type="submit" name="showNetoAndr" value="Buscar" />
                    </div>
                </div>      -->  
                
                
                
</div>
</form>
<hr/>
<!-- results-->
<table id="table" class="table-netoAndr ocultar">
  <thead>
    <th class="ocultar">codHotel</th>
    <th>Hotel</th>
    <th class="ocultar">codTipAlim</th>
    <th>Plan</th>
    <th>1x1</th>
    <th>1x2</th>
    <th>1x3</th>
    <th>1x4</th>
    <th>Niño</th>
    <th>Vigencia Inicial</th>
    <th>Vigencia Final</th>
    <th>Excepcion Inicial</th>
    <th>Excepcion Final</th>
    <th></th>
  </thead>
  <tbody id="lista-netoAndr">
  </tbody>
</table>
<!-- fin results-->
  <?php      

                //print_r($arr_netoandr);
                ?>
                <br>
                <div class="row justify-content-cennter py-0 listado ">

                   <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
                    <div class="table-responsive" >

                      <table class="table table-bordered " >
                        <thead>
                          <tr>
                            <th style="width:30px;background-color: #9FD5D1;">Hotel</th>
                            <th style="width:30px;background-color: #9FD5D1">Plan</th>
                            <th style="width:30px;background-color: #9FD5D1">Vigencia Inicial</th>
                            <th style="width:30px;background-color: #9FD5D1">Vigencia Final</th>
                            <th style="width:30px;background-color: #9FD5D1">Excepcion Inicial</th>
                            <th style="width:30px;background-color: #9FD5D1">Excepcion Final</th>
                            <th style="width:30px;background-color: #9FD5D1">Editar</th>
                            <th style="width:30px;background-color: #9FD5D1">Borrar</th>
                          </tr>
                        </thead>
						<br />
                        <tbody>
                            
                        <?php 
                        if (isset($arr_netoandr)){
                          
                        //print_r($arr_netoandr[1]);
                          
                          for($i=0;$i<count($arr_netoandr);$i+=5){?>
                              <tr>
                                <td><?php echo $arr_netoandr[$i]['nameHotel']?></td>
                                <td><?php echo $arr_netoandr[$i]['nameAlim']?></td>
                                <td><?php echo $arr_netoandr[$i]['dateVigIni']?></td>
                                <td><?php echo $arr_netoandr[$i]['dateVigFin']?></td>
                                <td><?php echo $arr_netoandr[$i]['dateExeIni']?></td>
                                <td><?php echo $arr_netoandr[$i]['dateExeIni']?></td>
                                <td><a href="?controller=netoandr&action=update&codeH=<?php echo $arr_netoandr[$i]['codeHotel'];?>&codeA=<?php echo $arr_netoandr[$i]['codeAlim'];?>"class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a onclick="deleteNetoandr(<?php echo $arr_netoandr[$i]['codeHotel'].','.$arr_netoandr[$i]['codeAlim'];?>)" class="btn btn-danger" ><i class="fa fa-trash-alt" aria-hidden="true"></i></a></td>
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
                <?php ?>
                <!--  -->
<hr/>
            </div>
          </div>
        </div>

   
                 <!-- Formulario -->
                <script src="JS/jquery-3.6.0.js"></script>
                <script type="text/javascript">
                    //******** remove rows from pivot table containing items (Tariandr) */
                    $(document).on('click', '.deleteNetoandr', function (event) {
                    event.preventDefault();
                    $(this).closest('tr').remove();
                    //alert('Hola');
                    });
                    
                    //tabla
                    $(document).on('click', '#btnAddNetoAndr', function (event) {
                    event.preventDefault();
                    $('#table').removeClass("ocultar")
                    });
                    
                    //****************************************************************************** */
                </script>
