<?php 
if(isset($utildeta)){
    foreach($utildeta as $dataUt) {
     $code=$dataUt->getCodeUtility();
     $valueLiqu=$dataUt->getValLiqu();
     $valueTicket=$dataUt->getValTicket();
     $valueHotel=$dataUt->getValHotel();
     $valueAsisMed=$dataUt->getValAsisMed();
     $valueReceptivo=$dataUt->getValReceptivo();
     $valueUtility=$dataUt->getValUtility();
   }
}
?>
<!-- Formulario -->
<form action="?controller=utility&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >Actualizar Utilidad</label>
                </div>

              </div>

  <hr/>
<div class="row justify-content-left py-2">
                
                <div class="container">
                  <div class="valores">
                  <div class="row justify-content-center py-2 pad">
                              <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                                              <label>Codigo</label>
                                      </div>
                                  </div>
                              </div>
                              <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                                          <input class="form-control inputFomulario number" type="text" placeholder="$$" id="Code" name="txbCode" value="<?php echo $code; ?>">
                                          <label class="error" for="Code" id="Code_error">Campo requerido.</label>
                                      </div>
                                  </div>
                              </div>      
                          </div>
                      <div class="row justify-content-center py-2 pad" >
                              <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                                              <label>Tiquetes</label>
                                      </div>
                                  </div>
                              </div>
                              <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                                          <input class="form-control inputFomulario number" type="number" placeholder="tiquete" id="valTicket" name="txbValTicket" value="<?php echo $valueTicket; ?>">
                                          <label class="error" for="ticket" id="ticket_error">Campo requerido.</label>
                                      </div>
                                  </div>
                              </div>      
                          </div>

                          <div class="row justify-content-center py-2 pad">
                              <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                                              <label>Hotel</label>
                                      </div>
                                  </div>
                              </div>
                              <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                                          <input class="form-control inputFomulario number" type="text" placeholder="$$" id="valHotel" name="txbValHotel" value="<?php echo $valueHotel; ?>">
                                          <label class="error" for="valHotel" id="valHotel_error">Campo requerido.</label>
                                      </div>
                                  </div>
                              </div>      
                          </div>

                          <div class="row justify-content-center py-2 pad">
                              <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-right text-right">
                                              <label>Asistencia Medica</label>
                                      </div>
                                  </div>
                              </div>
                              <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-selft-right text-right">
                                          <input class="form-control inputFomulario number" type="text" placeholder="AS. Medica" id="valAsisMedica" name="txbValAsisMedica" value="<?php echo $valueAsisMed; ?>">
                                          <label class="error" for="valAsisMedica" id="valAsisMedica_error">Campo requerido.</label>
                                      </div>
                                  </div>
                              </div>      
                          </div>

                          <div class="row justify-content-center py-2 pad">
                              <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                                              <label>Receptivos</label>
                                      </div>
                                  </div>
                              </div>
                              <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                                          <input class="form-control inputFomulario number" type="text" placeholder="Receptivo" id="valReceptivo" name="txbValReceptivo" value="<?php echo $valueReceptivo; ?>">
                                          <label class="error" for="valReceptivo" id="valReceptivo_error">Campo requerido.</label>
                                      </div>
                                  </div>
                              </div>      
                          </div>
                          
                          
                          <div class="row justify-content-center py-2 pad">
                              <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                                              <label>Otros</label>
                                      </div>
                                  </div>
                              </div>
                              <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                                          <input class="form-control inputFomulario number" type="text" placeholder="otros" id="valOtros" name="txbValOtros" >
                                          <label class="error" for="valOtros" id="valotros_error">Campo requerido.</label>
                                      </div>
                                  </div>
                              </div>      
                          </div>
                          
                          <div class="row justify-content-center py-2 pad">
                              <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-right">
                                              <label>Valor Liquidacion</label>
                                      </div>
                                  </div>
                              </div>
                              <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                                          <input class="form-control inputFomulario number" type="text" placeholder="liquidac" id="valLiquidac" name="txbValLiquidac" value="<?php echo $valueLiqu;?>" >
                                          <label class="error" for="valLiquidac" id="valLiquidac_error">Campo requerido.</label>
                                      </div>
                                  </div>
                              </div>      
                          </div>

                          <div class="row justify-content-center py-2 pad">
                              <div class="col-sm-6 col-6 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2 number">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                                              <label>Utilidad</label>
                                      </div>
                                  </div>
                              </div>
                              <div  class="col-sm-5 col-5 py-1 align-self-right text-right">
                                  <div class="row justify-content-right py-2">
                                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-right-center text-right">
                                          <input class="form-control inputFomulario number" type="text" placeholder="utilidad" id="valUtility" name="txbValUtility" value="<?php echo $valueUtility; ?>">
                                          <label class="error" for="valUtility" id="valUtility_error">Campo requerido.</label>
                                      </div>
                                  </div>
                              </div>      
                          </div>

                          
                  </div>                    
              </div>


                <hr/>

              <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnUpdateUtildeta'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                    <input id='cancelUp'class= "form-control botonesIS" style="width:130px"; type="button" value="Cancelar" name="cancelUtility" onclick="cancel('utility','home')"/>
                </div>
         

</div>

  <hr/>
  <?php      

if(isset($utility)){
  foreach($utility as $dataUt) {
   $code=$dataUt->getCode();
   $codeLiqu=$dataUt->getCodeLiqu();
   $dateUt=$dataUt->getDateUtil();

     $arr_Utility[] = array("codeUt" => $code,
     "codeLiqu" => $codeLiqu,
     "dateUt" => $dateUt);    
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
                            <th style="width:30px;background-color: #9FD5D1"># Liquidacion</th>
                            <th style="width:30px;background-color: #9FD5D1">Fecha de Generacion</th>
                            <th style="width:30px;background-color: #9FD5D1">Editar</th>
                            <th style="width:30px;background-color: #9FD5D1">Borrar</th>
                          </tr>
                        </thead>
						<br />
                        <tbody>
                            
                        <?php 
                        if (isset($arr_Utility)){
                        foreach($arr_Utility as $row ){
                            ?>
                        <tr>
                            <td><?php echo $row['codeUt'];?></td>
                            <td><?php echo $row['codeLiqu'];?></td>
                            <td><?php echo $row['dateUt'];?></td>
                            <td><a href="?controller=flight&action=update&code=<?php echo $row['num'];?>"class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                            <td><a onclick="deleteUtility(<?php echo $row['codeUt'];?>)" class="btn btn-danger" ><i class="fa fa-trash-alt" aria-hidden="true"></i></a></td>
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
                  /********************CONSULTAR LIQUIDACIONES DINAMICAMENTE SEGUN NUMERO DE IDENTIFICACION *****************/
                    $(document).ready(function () {
                      $("#CodeLiqu").keyup(function () {
                          var value = $(this).val();
                          var numCharacter= value.length;

                          if(numCharacter>1){
                            showLiquidac(value);
                            //alert(value);
                          }
                          
                      });
                    });
                </script>
