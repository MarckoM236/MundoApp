<?php 
date_default_timezone_set('UTC');
date_default_timezone_set("America/Bogota");
?>
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ESTILOS PROPIOS-->
    <!--<link rel="stylesheet" href="CSS/bootstrap.min.css" >-->
	<link rel="stylesheet" href="CSS/semantic.min.css"/>
	<link rel="stylesheet" href="CSS/main.css">
    <!--ICONOS fontawesome-->
    <link href="CSS/fontawesome/css/all.css" rel="stylesheet">

  </head>
  <body>
         <!-- ENCABEZADO PRINCIPAL-->
        <section class="contenidoPrincipal py-0" >
            <div class="row justify-content-center">
            <div  class="col-lg-10 col-md-12 col-sm-4 col-12 py-1 align-self-center text-center">
                <div class="card shadow cuadroHeader" >
                <div class="row justify-content-left">
                    <div  class="col-lg-4 col-md-3 col-sm-3 col-6 py-1 align-self-center text-center">
                        <img class="imgLogoCoral" src="img/logoAllMundo.png">

                    </div>
                    <div  class="col-lg-4 col-md-5 col-sm-4 col-12 py-4 align-self-center text-center">

                        <label class="  py-4 " id="tituloHeader" >SISTEMA DE  <br>LIQUIDACION </label>

                    </div>
                    <div  class="col-lg-2 col-md-2 col-sm-4 col-6 py-1 align-self-center text-center">
                        <img class="imgLogo" src="img/logoAllMundo.png">
                    </div>

                    <div  class="col-lg-2 col-md-2 col-sm-4 col-12 py-1 align-self-center text-center">
                    <div class="row justify-content-center">
                    <div  class="d-none d-sm-block py-1 align-self-center text-center">
                            <img class="imgLogoSesion" src="img/user5.jpeg">
                    </div>
                    <div  class="col-lg-12 col-md-12 col-sm-4 col-6 py-1 align-self-center text-center">
                        <label style="" class="nombreUsuario" >ADMIN<a  href="?accion=cerrar_sesion" title="CERRAR SESION"> <img class="imgCerrarSesion" src="img/cerrarSesion.png" title="Cerrar Sesion" ></a>&nbsp;</label>
                    </div>
                    </div>
                </div>
                </div>

                </div>
            </div>
        </div>

    </section>
    <!-- FIN ENCABEZADO PRONCIPAL-->
    <!--MENU PRINCIPAL-->
        <section class="contenidoPrincipal py-0" >
            <div class="row justify-content-center">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center ">
                    <div class="card shadow cuadroHeader menuFondo" >
                        <div class="row justify-content-left ">
                        <div  class="espaMe2 py-0 align-self-center text-center" onmouseover="desplegarMenu1();">
                                <div class="row justify-content-center opcionMenu" id="opcionMenuActivo1">
                                    <a style="color:white" href="#" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/parametros3.png">
                                    </div>

                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Par&aacute;metros</label>

                                    </div>
                                    </a>
                                </div>
                            </div>

                            <div  class="espaMe py-0 align-self-center text-center " id="" onmouseover="desplegarMenu4();" >
                                <div class="row justify-content-left  opcionMenu" id="opcionMenuActivo4" >
                                    <a style="color:white" href="#" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/liquidacion.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Liquidaci&oacute;n</label>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div  class="espaMe py-0 align-self-center text-center " id="" onmouseover="desplegarMenu5();" >
                                <div class="row justify-content-left  opcionMenu" id="opcionMenuActivo5" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tarifaNacional.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Tarifario Nacional</label>
                                    </div>
                                </div>
                            </div>
                            <div  class="espaMe py-0 align-self-center text-center " id="" onmouseover="desplegarMenu6();" >
                                <div class="row justify-content-left  opcionMenu" id="opcionMenuActivo6" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/pagos.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Pagos</label>
                                    </div>
                                </div>
                            </div>
                            <div  class="espaMe py-0 align-self-center text-center " id=""  >
                                <div class="row justify-content-left  opcionMenu" id="opcionMenuActivo3" >
                                <a style="color:white" href="?controller=lock&action=home" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/bloqueo.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Bloqueos</label>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <!--FIN MENU PRINCIPAL-->
    
    <!--SUB MENU PARAMETROS-->
    <section class="contenidoPrincipal py-0" id="opcionMenu1" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">

                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-Fsis">
                                <a style="color:white" href="?controller=company&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/empresa.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Empresa</label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-Fsis">
                                <a style="color:white" href="?controller=system&action=home
                                " >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/sistema.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Sistema</label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-Fsis">
                                <a style="color:white" href="?controller=tipoAlim&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/plazo.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Tipo Alimentacion</label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-Fsis">
                                <a style="color:white" href="?controller=tipoLiQu&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/tipoLiquidacion.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Tipo Liquidacion</label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-Fsis">
                                <a style="color:white" href="?controller=estarese&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/estadoreserva.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Estado Reserva</label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-Fsis">
                                <a style="color:white" href="?controller=inclusio&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/receptivo.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Inclusion Receptivos</label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <!-- ITEM1-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=acomodac&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/seguimiento.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Acomodaci&oacute;n</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM1-->
                            
                            <!-- ITEM2-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=aeroline&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/aerolinea.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Aerolinea</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM2-->

                            <!-- ITEM3-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=agency&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/seguimiento.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Agencia</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM3-->

                            <!-- ITEM4-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=bank&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/banco.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Banco</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM4-->

                            <!-- ITEM5-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=concepto&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/concepto.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Concepto</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM5-->

                            <!-- ITEM6-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=destination&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/destinos.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Destino</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM6-->

                            <!-- ITEM7-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=plan&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/plan.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Plan</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM7-->

                            <!-- ITEM8-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=flight&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/vuelo.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Vuelo</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM8-->

                            <!-- ITEM9-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=operator&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/seguimiento.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Operador</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM9-->

                            <!-- ITEM10-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=hotel&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/hotel.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Hotel</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM10-->

                            <!-- 11-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=thirdParty&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Tercero</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM11-->

                            <!-- 12-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=adviser&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/asesor.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Asesor</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM12-->

                            <!-- 13-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=seller&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/vendedor.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Vendedor</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM13-->

                            <!-- 14-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=traveler&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/vendedor.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Viajeros</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM13-->

                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-Fsis">
                                <a style="color:white" href="?controller=user&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/usuarios.jpeg">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Usuarios</label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU SEGURIDAD-->

    
    <!-- SUB MENU LIQUIDACION -->
    <section class="contenidoPrincipal py-0" id="opcionMenu4" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">

                            <!-- 01-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=liquidac&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Liquidacion</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM01-->

                            <!-- 02-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=thirdParty&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Vauchers</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM02-->

                            <!-- 03-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=thirdParty&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Receptivos</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM03-->

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU LIQUIDACION-->

    <!--SUB MENU TARIFA NACIONAL-->
    <section class="contenidoPrincipal py-0" id="opcionMenu5" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">
                            <!-- 01-->
                            <div  class="espaMe py-0 align-self-center text-center " id="" onmouseover="desplegarSubMenu51();" >
                                <div class="row justify-content-left  opcionMenu2" id="opcionSubMenuActivo51" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/pagos.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >San Andres</label>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN ITEM01-->
                            <!-- 02-->
                            <div  class="espaMe py-0 align-self-center text-center " id="" onmouseover="desplegarSubMenu52();" >
                                <div class="row justify-content-left  opcionMenu2" id="opcionMenuActivo52" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/pagos.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Cartagena</label>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN ITEM02-->
                            <!-- 03-->
                            <div  class="espaMe py-0 align-self-center text-center " id="" onmouseover="desplegarSubMenu53();" >
                                <div class="row justify-content-left  opcionMenu2" id="opcionMenuActivo53" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/pagos.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Santa Marta</label>
                                    </div>
                                </div>
                            </div>
                            <!-- FIN ITEM03-->

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU TARIFA NACIONAL-->
    <!--SUB MENU 5.1 DEL SUBMENU TARIFA NACIONAL TARIFAS SAN ANDRES-->
    <section class="contenidoPrincipal py-0" id="opcionSubMenu51" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">
                            <!-- 01-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=tariandr&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/pagos.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Tarifas</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM01-->
                            <!-- 02-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=netoandr&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Neto</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM02-->
                            <!-- 03-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=receandr&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Receptivos</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM03-->

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU 5.1 DEL SUBMENU TARIFA NACIONAL-->

    <!--SUB MENU 5.2 DEL SUBMENU TARIFA NACIONAL CARTAGENA-->
    <section class="contenidoPrincipal py-0" id="opcionSubMenu52" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">
                            <!-- 01-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=taricart&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Tarifas</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM01-->
                            <!-- 02-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=netocart&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Neto</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM02-->
                            <!-- 03-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=rececart&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Receptivos</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM03-->

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU 5.2 DEL SUBMENU TARIFA NACIONAL-->

    <!--SUB MENU 5.3 DEL SUBMENU TARIFA NACIONAL SANTA MARTA-->
    <section class="contenidoPrincipal py-0" id="opcionSubMenu53" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">
                            <!-- 01-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=tarisama&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Tarifas</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM01-->
                            <!-- 02-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=netosama&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Neto</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM02-->
                            <!-- 03-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=recesama&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Receptivos</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM03-->

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU 5.1 DEL SUBMENU TARIFA NACIONAL-->

    <!--SUB MENU TARIFA PAGOS-->
    <section class="contenidoPrincipal py-0" id="opcionMenu6" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">
                            <!-- 01-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=payments&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Pagos</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM01-->
                            <!-- 02-->
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onmouseover="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?controller=utility&action=home" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/tercero.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Netos</label>
                                    </div>
                                </div>    
                                </a>
                            </div>
                            <!-- FIN ITEM02-->

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU TARIFA PAGOS-->

    <!--SUB MENU TARIFA BLOQUEOS-->
    <section class="contenidoPrincipal py-0" id="opcionMenu5" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">


                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU TARIFA BLOQUEOS-->
    

    <!-- CONTENIDO-->
      <div class="container">
          <!-- REDIRECCIONAMIENTO DINAMICO DEL CONTENIDO-->
          <?php  include_once('router.php'); ?>
      </div>
    <!-- FIN CONTENIDO-->  


      <footer >
      <section class="contenidoPrincipal py-0" >
      	<div class="row justify-content-center">
      		<div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center ">
		      	<div class="card shadow cuadroHeader menuFondo2" >
		      		<div class="row justify-content-left">

			      		<div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
			      			<div class="row justify-content-left">
			      				<div  class="col-lg-12 col-md-12 col-sm-12 col-12 py-1 align-self-center text-center">
			      					<label>Realizado por  | Coral Solutions | Versión 1.0  </label>
			      				</div>
			      			</div>
			      		</div>


		      		</div>

		      	</div>
	      	</div>
	    </div>
	</section>
    </footer> 
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- SCRIPT PROPIO-->
    <script src="JS/validacionMenu.js"></script>
   <script src="JS/jquery-3.6.0.js"></script>
    <script src="JS/forms.js"></script>
    <script src="JS/system.js"></script>

  </body>
</html>