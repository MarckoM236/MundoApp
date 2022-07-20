<?php 
ob_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf8_spanish_ci">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vaucher</title>
    <style>
      .col-5{
        float:left;
      }
      .table{
        width: 100%;
        margin: 0 auto;
        border: 1px solid #000;
        caption-side: top;
      }
      th, td {
        width: 25%;
        text-align: left;
        vertical-align: top;
        border: 1px solid #000;
        padding: 0.3em;
        caption-side: top;
        }

        caption {
        padding: 0.3em;
        }
    </style>
    <!-- Bootstrap CSS v5.0.2 -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
</head>
<body>
    <!-- contenido-->
    <?php               if (isset($_GET['arr_liquidac']) && isset($_GET['arr_detail'])) {
                            /* Deshacemos el trabajo hecho por 'serialize' */
                            $arr_liquidac = unserialize($_GET['arr_liquidac']);
                            $arr_detail = unserialize($_GET['arr_detail']);
                        }

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
            <img src="C:\xampp\htdocs\MundoApp\img\logoVaucher.jpg" alt="LOGO">
            <br>
            <label for=""><b>ACOMODACION:</b> <?php echo $acomodacion;?></label>
            <br>
            <label for=""><b>ALIMENTACION:</b> <?php echo $tipAlim;?></label>
            <br>
            <br>
            <br>
            <br>
        </div>
        </div>
                    </div>
        <br>
        <br>
        <p>.</p>
        <div class="container">
        <table class="table">
        <caption style="text-align:center;">INFORMACION DE PASAJEROS</caption> 
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
        <p><b>CHECK IN 15:00 - CHECK OUT 12:00</b></p>
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

        <p><b>***LOS SERVICIOS NO UTILIZADOS POR VOLUNTAD PROPIA O EN CASO DE PROBLEMAS METEREOLOGICOS Y ESTOS NO OPEREN NO SERAN REEMBOLSADOS***</b></p>
        <p><b>Es potestad del oficial de inmigración permitir el ingreso de un turista, aunque cumpla a Cabalidad con todos los requisitos. Y no aplica reembolsos </b></p>
        <p>Es deber del pasajero comunicarse con el operador de traslados en destino para coordinar la hora de recogida en el hotel para ir al aeropuerto de regreso</p>
        <p style="color:red;">EN CASO DE EMERGENCIAS COMUNICARSE AL 301 6419910 - 313 6832221 - 318 6902223
            317 4250364</p>
        <p>Es Obligación del pasajero , tener los documentos vigentes para viajar</p> 
        <p>Para salir del pais su pasaporte debe tener 6 meses de vigencia verificar que sus visas para el viaje esten vigentes</p>
        <p>Verificar las vacunas en caso de ser requeridas para su destinos</p>
        <p>Menores de edad si <b>No</b> viajan con sus 2 padres requieren permiso de salida del pais autenticado por notaria por parte de sus padres</p>
        <p>Menores de edad viajando con ambos padres  requieren registro civil notarial inferior a 1 mes de expedicion</p>
        <p>Mayorista de Turismo al Mundo Viajes Sas se acoge a la ley de protección al pasajero comunicado de prensa No. 86 de 2015 - Aerocivil</p>
        <p>Si el nombre del pasajero no coincide con el del Pasaporte le será negado el embarque y aplicará penalidad del 100% sobre el valor total del plan.</p>
        <p>Servicios no tomados y/o utilizados en destino no serán reembolsados. </p>
        <p> Las presentes "Condiciones Comerciales" son regidas por las normas del ordenamiento mercantil y demás leyes aplicables en la Ley 300 de 1996, con sus decretos reglamentarios.<b> ORGANIZACIÓN Y RESPONSABILIDADES : MAYORISTA DE TURISMO AL MUNDO VIAJES SAS</b>, con <b>RNT 75592</b>, declara que actúa como intermediario entre las agencias Minoristas , Agentes de viajes externos o Freelance , pasajeros y las entidades o personas encargadas de proporcionar los servicios de transporte aéreo, terrestre, alojamiento, alimentación, asistencia médica nacional e internacional , o cualquier otro servicio contratado a través de nuestros diferentes canales de Atención Telefónico – WhatsApp Corporativos y correo electrónico.</p>
        <p><b>POLITICAS DE CANCELACION</b></p>
        <p>La tarifa seleccionada es la mas economica y mas restrictiva, por lo tanto aplica penalidad del 100% en caso de cambios o cancelaciones</p>
        <p> <b>INFORMACION GENERAL</b> </p>
        <p> <b>La exigencia del carné con esquema de vacunación completo (esquemas de dos dosis o esquema de dosis única) entrará en vigor a partir del 14 de diciembre de 2021 para mayores de 18 años; y desde el 28 de diciembre de 2021 para mayores de 12 años. Los menores de 12 años quedan exceptuados de esta medida.</b> </p>
        <p> <b>LINK DE POLITICAS Y CONDICIONES GENERALES AEROLINEAS </b> </p>
        <p> <a href="https://www.vivaair.com/co/es/politicas/terminos-y-condiciones-web">VIVA AIR https://www.vivaair.com/co/es/politicas/terminos-y-condiciones-web</a> </p>
        <p> <a href="https://aeromexico.com/es-co/informacion-legal">AERO MEXICO https://aeromexico.com/es-co/informacion-legal</a> </p>
        <p> <a href="https://www.copaair.com/es/web/co/contrato-transporte">COPA AIRLINES https://www.copaair.com/es/web/co/contrato-transporte</a> </p>
        <p> <a href="https://www.iberia.com/co/condiciones-transporte/">IBERIA   https://www.iberia.com/co/condiciones-transporte/</a> </p>
        <p> <a href="https://www.avianca.com/co/es/sobre-nosotros/informacion-legal/contrato-transporte/">AVIANCA https://www.avianca.com/co/es/sobre-nosotros/informacion-legal/contrato-transporte/</a> </p>
        <p> <a href="https://www.aireuropa.com/co/es/aea/informacion-para-volar/condiciones">AIR EUROPA https://www.aireuropa.com/co/es/aea/informacion-para-volar/condiciones</a> </p>

    <!-- fin contenido-->

    <!-- Bootstrap JavaScript Libraries -->
    <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>-->
</body>
</html>
<?php 
$html=ob_get_clean();
//echo $html;
require_once('C:\xampp\htdocs\MundoApp\lib\dompdf\autoload.inc.php');
use Dompdf\Dompdf;
$dompdf=New Dompdf();

//opciones para imagenes
/* $options=$dompdf->getOptions();
$options->set(array('isRemoteEnabled'=>true));
$options->setOptions($options); */

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');
//$dompdf->setPaper('A4','landscape');

$dompdf->render();
$dompdf->stream("vaucher.pdf",array('Attachment'=>false)); 
?>