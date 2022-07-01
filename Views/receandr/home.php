<?php
if(isset($hotel)){
    foreach($hotel as $dataHot) {
    $codeHot=$dataHot->getCode();
    $nameHot=$dataHot->getName();

    $arr_hotel[] =array("codeHot" => $codeHot,
    "nameHot" => $nameHot);    
}
}  
                
if(isset($operator)){
    foreach($operator as $dataOper) {
        $codeOper=$dataOper->getCode();
        $nameOper=$dataOper->getName();

        $arr_oper[] =array("codeOper" => $codeOper,
        "nameOper" => $nameOper);    
    }
    }  

if(isset($receptivo)){
  foreach($receptivo as $dataRec) {
      $codeRec=$dataRec->getCode();

      $arr_rec[] =array("codeRec" => $codeRec);    
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
                      <label class="titulosPrincipalesPagina" >SAN ANDRES - RECEPTIVOS</label>
                </div>

              </div>

  <hr/>
<div class="row justify-content-left py-2">

                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Operador</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeHotel" id="codeHotel" class="form-select inputFomulario" placeholder="Opciones"> 
                              <option select value="">SELECCIONE</option>
                             <?php if (isset($arr_oper)){
                                        foreach($arr_oper as $rowOper ){
                                            ?>
                                            <option select value="<?php echo $rowOper['codeOper'];?>"><?php echo $rowOper['nameOper'];?></option>
                                    <?php 
                                        }
                                    }?>         
                            </select>
                           <label class="error" for="codeHotel" id="codeHotel_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Receptivo</label>
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
                
                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
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


                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Zona</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueSencilla" name="txbValueSencilla">
                           <label class="error" for="valueSencilla" id="valueSencilla_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>


                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Diurno Inicial</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="time" placeholder="fecha" id="dateInVi" name="txbDateInVi">
                           <label class="error" for="dateInVi" id="dateInVi_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Diurno Final</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="time" placeholder="" id="dateFiVi" name="txbDateFiVi">
                           <label class="error" for="dateFiVi" id="dateFiVi_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Valor</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueSencilla" name="txbValueSencilla">
                           <label class="error" for="valueSencilla" id="valueSencilla_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Nocturno Inicial</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="time" placeholder="fecha" id="dateInEx" name="txbDateInEx" value="<?php echo date('Y-m-d');?>">
                           <label class="error" for="dateInEx" id="dateInEx_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Nocturno final</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="time" placeholder="fecha" id="dateFiEx" name="txbDateFiEx" value="<?php echo date('Y-m-d');?>">
                           <label class="error" for="dateFiEx" id="dateFiEx_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Valor</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueSencilla" name="txbValueSencilla">
                           <label class="error" for="valueSencilla" id="valueSencilla_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnSaveReceandr'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
                    <div class="row justify-content-left py-2">
                        <input id='btnAddReceAndr'class= "form-control botonesIS" style="width:130px"; type="button" value="+" onclick="addSelectNetoandr()"/>
                    </div>
                </div>
                <hr/>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='search'class= "form-control botonesIS" style="width:130px"; type="submit" name="showNetoAndr" value="Buscar" />
                    </div>
                </div>       
                
                
                
</div>
</form>
<hr/>
<!-- results-->
<table class="table-receAndr">
  <thead>
    <th class="ocultar">codOperador</th>
    <th>Operador</th>
    <th class="ocultar">codReceptivo</th>
    <th>Receptivo</th>
    <th class="ocultar">codHotel</th>
    <th>Hostal</th>
    <th>Zona</th>
    <th>Inicio Diurno</th>
    <th>Final Diurno</th>
    <th>Valor</th>
    <th>Inicio Nocturno</th>
    <th>Final Nocturno</th>
    <th>Valor</th>
    <th></th>
  </thead>
  <tbody id="lista-receAndr">
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
                            <td><a onclick="deletePay(<?php echo $row['pay'];?>)" class="btn btn-danger" ><i class="fa fa-trash-alt" aria-hidden="true"></i></a></td>
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
                    //****************************************************************************** */
                </script>
