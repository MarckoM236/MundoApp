
<?php

if(isset($bank)){
                 foreach($bank as $dataBa) {
                  $codeBa=$dataBa->getCode();
                  $nameBa=$dataBa->getName();

                    $arr_bank[] = array("codeBa" => $codeBa,
                    "nameBa" => $nameBa);    
                }
                }  
                
                if(isset($numPay)){
                  if($numPay==-1){
                   $numberPay=1;
                  }
                  else{$numberPay=$numPay + 1;}
              }  
              
?>
<style>
    .ocultar{
      display:none;
    }
    .disable{
      cursor: not-allowed;
        background-color: rgb(229, 229, 229) !important;
        pointer-events:none;
    }
</style>
<!-- Formulario -->
<form action="?controller=payments&action=home" method="post">
        <div class="row justify-content-center">
          <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
            <div class="card shadow cuadroHeader " id="cuepoCuadroBusqueda" >
              <div class="row justify-content-left py-2">
                <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-3 align-self-center text-left">
                      <label class="titulosPrincipalesPagina" >Pagos</label>
                </div>

              </div>

  <hr/>
<div class="row justify-content-center py-2">

<div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Liquidacion</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <input class="form-control inputFomulario" type="text" placeholder="liquidacion" id="iL" name="txbIL">
                           <label class="error" for="iL" id="iL_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Fecha</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="fecha" id="date" name="txbDate" readonly="readonly">
                           <label class="error" for="num" id="num_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Agencia</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="agencia" id="agency" name="txbAgency" readonly="readonly"> 
                           <label class="error" for="route" id="route_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Vendedor</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="vendedor" id="seller" name="txbSeller" readonly="readonly">
                           <label class="error" for="route" id="route_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Valor Total</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="total" id="value" name="txbValue" readonly="readonly">
                           <label class="error" for="route" id="route_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-4 col-4 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Saldo</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="saldo" id="saldo" name="txbSaldo" readonly="readonly">
                           <label class="error" for="route" id="route_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <hr/>
                
                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left ocultar">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Codigo</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="codigo" id="codePay" name="txbCode" readonly="readonly" value="<?php echo $numberPay; ?>">
                           <label class="error" for="CodePay" id="codePay_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
                
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Banco</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbCodeBank" id="codeBank" class="form-select inputFomulario" placeholder="Opciones"> 
                              <option select value="">SELECCIONE</option>
                             <?php if (isset($arr_bank)){
                                        foreach($arr_bank as $rowBa ){
                                            ?>
                                            <option select value="<?php echo $rowBa['codeBa'];?>"><?php echo $rowBa['nameBa'];?></option>
                                    <?php 
                                        }
                                    }?>         
                            </select>
                           <label class="error" for="codeBank" id="codeBank_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                            <label>Tipo de Pago</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                       <!--    <input class="form-control inputFomulario" type="text" placeholder="Estado" id="status" name="txbStatus">-->
                           <select name="txbTypePay" id="typePay" class="form-select inputFomulario" placeholder="Opciones"> 
                              <option select value="">SELECCIONE</option>
                              <option select value="PSE">PSE</option>
                              <option select value="TD">TD</option>
                              <option select value="TC">TC</option>
                              <option select value="EFECTIVO">EFECTIVO</option>
                                   
                            </select>
                           <label class="error" for="typePay" id="typePay_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Valor</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="valor" id="valuePay" name="txbValuePay">
                           <label class="error" for="valuePay" id="valuePay_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>

                <div  class=" col-sm-3 col-3 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Fecha</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="fecha" id="datePay" name="txbDatePay" value="<?php echo date('d/m/Y h:i:s'); ?>" readonly="readonly">
                           <label class="error" for="datePay" id="datePay_error">Campo requerido.</label>
                      </div>
                    </div>
                </div>
                
                <!-- <div  class=" col-sm-2 col-2 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" >
                            <label>Saldo</label>
                      </div>
                       <div  class="col-lg-12 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                           <input class="form-control inputFomulario" type="text" placeholder="saldo" id="saldo2" name="txbsaldo2" readonly="readonly">
                           <label class="error" for="route" id="route_error">Campo requerido.</label>
                      </div>
                    </div>
                </div> -->
    </div>

    <div class="row justify-content-center py-2">
              <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='btnSavePay'class= "form-control botonesIS" style="width:130px"; type="button" value="Guardar" />
                    </div>
                </div>
               
                <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left">
                    <div class="row justify-content-left py-2">
                      <input id='search'class= "form-control botonesIS" style="width:130px"; type="submit" name="showPay" value="Buscar" />
                    </div>
                </div>             

</div>

  <hr/>
  <?php      
 
                 if(isset($payment)){
                 foreach($payment as $dataPayment) {
                    $pay=$dataPayment->getCode();
                    $liqu=$dataPayment->getCodeLiqu();
                    $typePay=$dataPayment->getTypePay();
                    $bankPay=$dataPayment->getBankPay();
                    $valuePay=$dataPayment->getValuePay();
                    $datePay=$dataPayment->getDatePay();

                    $return_arrPay[] = array("pay" => $pay,
                    "liqu" => $liqu,
                    "typePay" => $typePay,
                    "bankPay" => $bankPay,
                    "valuePay" => $valuePay,
                    "datePay" => $datePay);    
                }
                //print_r($return_arr);
                ?>
                <br>
                <div class="row justify-content-cennter py-0 listado ">

                <td><a id="vaucher" href="?controller=vaucher&action=home&code=<?php echo $return_arrPay[0]['liqu'];?>"class="btn btn-warning disable"><i class="fa fa-edit" aria-hidden="true"></i>Vaucher</a></td>

                   <div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
                    <div class="table-responsive" >

                      <table class="table table-bordered " >
                        <thead>
                          <tr>
                          <th style="width:30px;background-color: #9FD5D1">Liquidacion</th>
                            <th style="width:30px;background-color: #9FD5D1">Banco</th>
                            <th style="width:30px;background-color: #9FD5D1">Tipo de Pago</th>
                            <th style="width:30px;background-color: #9FD5D1">Valor</th>
                            <th style="width:30px;background-color: #9FD5D1">Fecha de Generacion</th>
                            <th style="width:30px;background-color: #9FD5D1">Borrar</th>
                          </tr>
                        </thead>
						<br />
                        <tbody>
                            
                        <?php 
                        if (isset($return_arrPay)){
                        foreach($return_arrPay as $row ){
                            ?>
                        <tr>
                            <td><?php echo $row['liqu'];?></td>
                            <td><?php echo $row['bankPay'];?></td>
                            <td><?php echo $row['typePay'];?></td>
                            <td><?php echo $row['valuePay'];?></td>
                            <td><?php echo $row['datePay'];?></td>
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
                      $("#iL").keyup(function () {
                          var value = $(this).val();
                          var numCharacter= value.length;

                          if(numCharacter>1){
                            showLiquidac(value);
                            showPay(value);
                            //alert(value);
                          }
                          
                      });

                    });
                    
                    //********************************************************* */
                    
                </script>
