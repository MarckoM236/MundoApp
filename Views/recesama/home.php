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

     
                
?>
<style>
    .ocultar{
  display:none;
}
</style>
<!-- Formulario -->
<form action="?controller=recesama&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >SANTA MARTA - RECEPTIVOS</label>
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
                           <select name="txbCodeOperator" id="codeOperator" class="form-select inputFomulario" placeholder="Opciones"> 
                              <option select value="">SELECCIONE</option>
                             <?php if (isset($arr_oper)){
                                        foreach($arr_oper as $rowOper ){
                                            ?>
                                            <option select value="<?php echo $rowOper['codeOper'];?>"><?php echo $rowOper['nameOper'];?></option>
                                    <?php 
                                        }
                                    }?>         
                            </select>
                           <label class="error" for="codeOperator" id="codeOperator_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Receptivo</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="receptivo" id="receptivo" name="txbReceptivo">
                           <label class="error" for="receptivo" id="receptivo_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
                
                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Hotel</label>
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
                           <input class="form-control inputFomulario" type="text" placeholder="zona" id="zona" name="txbZona">
                           <label class="error" for="zona" id="zona_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>


                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Diurno Inicial</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="time" placeholder="hora" id="hoinDiu" name="txbHoinDiu">
                           <label class="error" for="hoinDiu" id="hoinDiu_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Diurno Final</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="time" placeholder="" id="hofiDiu" name="txbHofiDiu">
                           <label class="error" for="hofiDiu" id="hofiDiu_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Valor</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueDiurno" name="txbValueDiurno">
                           <label class="error" for="valueDiurno" id="valueDiurno_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Nocturno Inicial</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="time" placeholder="fecha" id="hoinNoc" name="txbHoinNoc" value="<?php echo date('HH-MI-SS');?>">
                           <label class="error" for="hoinNoc" id="hoinNoc_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Nocturno final</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="time" placeholder="fecha" id="hofiNoc" name="txbHofiNoc" value="<?php echo date('Y-m-d');?>">
                           <label class="error" for="hofiNoc" id="hofiNoc_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Valor</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valueNocturno" name="txbValueNocturno">
                           <label class="error" for="valueNocturno" id="valueNocturno_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnSaveRecesama'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left pad">
                    <div class="row justify-content-left py-2">
                        <input id='btnAddReceSama'class= "form-control botonesIS" style="width:130px"; type="button" value="+" onclick="addSelectRecesama()"/>
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
<table class="table-receSama">
  <thead>
    <th class="ocultar">codOperador</th>
    <th>Operador</th>
    <th>Receptivo</th>
    <th class="ocultar">codHotel</th>
    <th>Hotel</th>
    <th>Zona</th>
    <th>Inicio Diurno</th>
    <th>Final Diurno</th>
    <th>Valor</th>
    <th>Inicio Nocturno</th>
    <th>Final Nocturno</th>
    <th>Valor</th>
    <th></th>
  </thead>
  <tbody id="lista-receSama">
  </tbody>
</table>
<!-- fin results-->
  <?php      

                //print_r($arr_recesama);
                ?>
                <br>
                <div class="row justify-content-cennter py-0 listado ">

                   <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
                    <div class="table-responsive" >

                      <table class="table table-bordered " >
                        <thead>
                          <tr>
                            <th style="width:30px;background-color: #9FD5D1;">Operador</th>
                            <th style="width:30px;background-color: #9FD5D1">Receptivo</th>
                            <th style="width:30px;background-color: #9FD5D1">Hotel</th>
                            <th style="width:30px;background-color: #9FD5D1">Zona</th>
                            <th style="width:30px;background-color: #9FD5D1">Jornada</th>
                            <th style="width:30px;background-color: #9FD5D1">Inicio</th>
                            <th style="width:30px;background-color: #9FD5D1">Fin</th>
                            <th style="width:30px;background-color: #9FD5D1">Valor</th>
                            <th style="width:30px;background-color: #9FD5D1">Editar</th>
                            <th style="width:30px;background-color: #9FD5D1">Borrar</th>
                          </tr>
                        </thead>
						<br />
                        <tbody>
                            
                        <?php 
                        if (isset($arr_recesama)){
                          
                        //print_r($arr_recesama[1]);
                          
                          for($i=0;$i<count($arr_recesama);$i++){
                            if($arr_recesama[$i]['diurno']=="")
                            {
                              $jornal="Nocturno";
                              $inicio=$arr_recesama[$i]['inicioNocturno'];
                              $fin=$arr_recesama[$i]['finNocturno'];
                            }
                            else{
                              $jornal="Diurno";
                              $inicio=$arr_recesama[$i]['inicioDiurno'];
                              $fin=$arr_recesama[$i]['finDiurno'];
                            }
                            ?>
                              <tr>
                                <td><?php echo $arr_recesama[$i]['nameOper']?></td>
                                <td><?php echo $arr_recesama[$i]['receptivo']?></td>
                                <td><?php echo $arr_recesama[$i]['nameHotel']?></td>
                                <td><?php echo $arr_recesama[$i]['zona']?></td>
                                <td><?php echo $jornal;?></td>
                                <td><?php echo substr($inicio,12);?></td>
                                <td><?php echo substr($fin,12);?></td>
                                <td><?php echo $arr_recesama[$i]['value']?></td>
                                <td><a href="?controller=recesama&action=update&codeO=<?php echo $arr_recesama[$i]['codeOper'];?>&receptivo=<?php echo $arr_recesama[$i]['receptivo'];?>"class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a onclick="deleteRecesama(<?php echo $arr_recesama[$i]['codeOper'];?>,'<?php echo $arr_recesama[$i]['receptivo'];?>')" class="btn btn-danger" ><i class="fa fa-trash-alt" aria-hidden="true"></i></a></td>
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
                    $(document).on('click', '.deleteRecesama', function (event) {
                    event.preventDefault();
                    $(this).closest('tr').remove();
                    //alert('Hola');
                    });
                    //****************************************************************************** */
                </script>
