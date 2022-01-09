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
                                    <a style="color:white" href="" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/parametros3.png">
                                    </div>

                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Par&aacute;metros</label>

                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div  class="espaMe2 py-0 align-self-center text-center" onmouseover="desplegarMenu2();">
                                <div class="row justify-content-center opcionMenu" id="opcionMenuActivo2">
                                    <a style="color:white" href="?accion=solicitud" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/solicitud.png">
                                    </div>

                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Orden Compra</label>

                                    </div>
                                    </a>
                                </div>
                            </div>

                            <div  class="espaMe py-0 align-self-center text-center " id="" onmouseover="desplegarMenu4();" >
                                <div class="row justify-content-left  opcionMenu" id="opcionMenuActivo4" >
                                    <a style="color:white" href="?accion=distribu" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/contrato.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Distribuci&oacute;n</label>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div  class="espaMe py-0 align-self-center text-center " id="" onmouseover="desplegarMenu5();" >
                                <div class="row justify-content-left  opcionMenu" id="opcionMenuActivo5" >
                                    <a style="color:white" href="?accion=barra" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/actaIco.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Gesti&oacute;n de Barras</label>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div  class="espaMe py-0 align-self-center text-center " id="" onmouseover="desplegarMenu3();" >
                                <div class="row justify-content-left  opcionMenu" id="opcionMenuActivo3" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/seguimiento.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Indicadores</label>
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
    
    <!--SUB MENU SEGURIDADS-->
    <section class="contenidoPrincipal py-0" id="opcionMenu1" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-Fsis">
                                <a style="color:white" href="?accion=sistema" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/solicitudOrden.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Sistema</label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-Fsis">
                                <a style="color:white" href="?accion=color" >
                                <div class="row justify-content-left opcionMenu2">
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center">
                                        <img class="imgMenu" src="img/plazo.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto">
                                        <label>Color</label>
                                    </div>
                                </div>
                                </a>
                            </div>

                            </div>
                            </div>

                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU SEGURIDAD-->

    <!--SUB MENU ORDEN compra-->
    <section class="contenidoPrincipal py-0" id="opcionMenu2" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">

                            </div>

                            </div>

                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU compra-->
    <!--SUB MENU INDICADOR-->
    <section class="contenidoPrincipal py-0" id="opcionMenu3" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">
                            <img class="iconoCerrarMenu" src="img/cerrar.png" title="CERRAR SUB MENU" onclick="cerrarSubMenu();" >
                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?accion=indicador" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/seguimiento.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  > Compra Distribuci&oacute;n</label>
                                    </div>
                                </a>

                            </div>


                            <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?accion=indicadorGlobal" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/seguimiento.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Distribuci&oacute;n Global</label>
                                    </div>
                                </a>

                            </div>

                                <div  class="espaMe2 py-0 align-self-center text-center" >
                                <a style="color:white" href="?accion=listaDigital" >
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center ">
                                        <img class="imgMenu" src="img/seguimiento.png">
                                    </div>
                                    <div  class="col-lg-12 col-md-12 col-sm-3 col-3 py-0 align-self-center text-center centrarTexto ">
                                        <label  >Lista Digital</label>
                                    </div>
                                </a>

                            </div>

                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU ORDEN distribucion-->
    <section class="contenidoPrincipal py-0" id="opcionMenu4" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">

                            </div>

                            </div>

                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU distribucion-->
    <!--SUB MENU barra-->
    <section class="contenidoPrincipal py-0" id="opcionMenu5" style="display: none" >
            <div class="row justify-content-center ">
                <div  class="col-lg-10 col-md-12 col-sm-12 col-12 py-0 align-self-center text-center">
                    <div class="card shadow cuadroHeader2 menuFondoSubMenu" >
                        <div class="row justify-content-left ">

                            </div>

                            </div>

                    </div>
                </div>
            </div>
    </section>
    <!--SUB MENU barra-->
    
    <!-- CONTENIDO-->

      <div class="container">
          <div class="row">
              <div class="col-xs|sm|md|lg|xl-1-12">
                  <?php  include_once('../routes.php'); ?>
              </div>
              
          </div>
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

  </body>
</html>