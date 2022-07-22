<style>
    .ocultar{
  display:none;
}
</style>
<?php
if(isset($_GET['code'])){
  $code=$_GET['code'];
}
?>
<div class="container">
  <form name="form" action="?controller=vaucher&action=home" method="POST">
    <input type="hidden" name="txbCodeLiquidac" value="<?php echo $code;?>">
    <input type="hidden" name="showVaucher" value="1">
    
    <div  class="col-lg-2 col-md-4 col-sm-12 col-12 py-1 align-self-center text-left" id="button">
      <div class="row justify-content-left py-2">
        <input id="button" class= "form-control botonesIS" style="width:130px"; type="submit" name="load" value="Cargar Vaucher" />
      </div>
    </div> 
  </form>
</div>
<?php
if(isset($arr_liquidac)&&isset($arr_detail)){
  if (isset($arr_liquidac)){
    for($i=0;$i<count($arr_liquidac);$i++){
      $llegada=$arr_liquidac[$i]['date_departure'];
      $salida=$arr_liquidac[$i]['date_arrival'];
      $destino=$arr_liquidac[$i]['nameDestination'];
      $hotel=$arr_liquidac[$i]['nameHotel'];
      $acomodacion=$arr_liquidac[$i]['nameAcomodac'];
      $tipAlim=$arr_liquidac[$i]['nameTipoAlim'];
    }
  }
    $result1=$arr_liquidac;
    $result1 = serialize($result1);
    $result1 = urlencode($result1);

    $result2=$arr_detail;
    $result2 = serialize($result2);
    $result2 = urlencode($result2);
  
?>

<hr>
<div class="container">
<div class="row">
<div class="col-5">
    <label for=""><b>E - Voucher #</b></label>
    <br>
    <label for=""><b>Localizador # </b></label>
    <br>
    <br>
    <label for=""><b>DESTINO:</b> <?php echo $destino;?></label>
    <br>
    <label for=""><b>FECHA LLEGADA:</b> </b> <?php echo $llegada;?> </label>
    <br>
    <label for=""><b>FECHA SALIDA:</b> </b> <?php echo $salida;?> </label>
    <br>
    <label for=""><b>HOTEL:</b>  <?php echo $hotel;?></label>
    <br>
    <br>
</div>
<div class="col-5">
    <label for=""><b>Reserva #</b></label>
    <br>
    <br>
    <img src="./img/logoVaucher.jpg" alt="LOGO">
    <br>
    <br>
    <label for=""><b>ACOMODACION:</b> <?php echo $acomodacion;?></label>
    <br>
    <label for=""><b>ALIMENTACIÓN:</b> <?php echo $tipAlim;?></label>
    <br>
    <br>
</div>
<div class="col-2">
    <a class="btn btn-success" href="http://localhost/MundoApp/Views/vaucher/reporte.php?arr_liquidac=<?php echo $result1;?>&arr_detail=<?php echo $result2;?>">Imprimir</a>
</div>
</div>

<table class="table" style="caption-side: top">
    <caption style="text-align: center">INFORMACION DE PASAJEROS</caption>
  <thead class="thead-dark">
  
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Identificacion</th>
      <th scope="col">Fecha de Nacimiento</th>
    </tr>
  </thead>
  <tbody>
  <?php
  if (isset($arr_detail)){
    $res=$arr_detail;
    $cont=(count($arr_detail))/2;
    function unique_multidim_array($array, $key) {
      $temp_array = array();
      $i = 0;
      $key_array = array();
     
      foreach($array as $val) {
          if (!in_array($val[$key], $key_array)) {
              $key_array[$i] = $val[$key];
              $temp_array[$i] = $val;
          }
          $i++;
      }
      return $temp_array;
  }
  //$res=unique_multidim_array($arr_detail,'id_traveler');
  //print_r($res);
      
  //print_r($cont);                    
                          for($i=0;$i<count($res);$i+=$cont){
                            
                            ?>
                         
    <tr>
      <th scope="row"><?php echo $res[$i]['name_traveler'];?></th>
      <td><?php echo $res[$i]['lastName_traveler'];?></td>
      <td><?php echo $res[$i]['id_traveler'];?></td>
      <td><?php echo $res[$i]['birthday_traveler'];?></td>
    </tr>
    <?php }}?>
  </tbody>
</table>
<br>
<br>
<label for=""><b>INCLUYE:</b></label>
<?php 
$res1=unique_multidim_array($arr_detail,'include');
for($i=0;$i<count($res1);$i++){?>
<label for=""><?php echo $res1[$i]['include'];?></label>
<?php } ?>
<br>
<br>
<label for=""><b>NO INCLUYE:</b></label>
<?php 
$res2=unique_multidim_array($arr_detail,'notInclude');
for($i=0;$i<count($res2);$i++){?>
<label for=""><?php echo $res2[$i]['notInclude'];?></label>
<?php } ?>
<br>
<br>
</div>

<script src="JS/jquery-3.6.0.js"></script>
<script>
  //deshabilitar Boton
  $('#button').addClass("ocultar");
                    
</script>
<?php }?>