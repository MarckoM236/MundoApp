function desplegarMenu1(){
  document.getElementById('opcionMenu2').style.display='none';
  document.getElementById('opcionMenu3').style.display='none';
  document.getElementById('opcionMenu4').style.display='none';
  document.getElementById('opcionMenu5').style.display='none';
  document.getElementById('opcionMenu1').style.display='block';

  $("#opcionMenuActivo2").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo3").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo4").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo5").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo1").addClass("opcionMenuActivo");
}

function desplegarMenu2(){
  document.getElementById('opcionMenu1').style.display='none';
  document.getElementById('opcionMenu2').style.display='block'; 
  document.getElementById('opcionMenu3').style.display='none';
  document.getElementById('opcionMenu4').style.display='none';
  document.getElementById('opcionMenu5').style.display='none';  
  

  $("#opcionMenuActivo1").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo3").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo4").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo5").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo2").addClass("opcionMenuActivo");
}
function desplegarMenu3(){
  document.getElementById('opcionMenu1').style.display='none';
  document.getElementById('opcionMenu2').style.display='none'; 
  document.getElementById('opcionMenu3').style.display='block'; 
  document.getElementById('opcionMenu4').style.display='none';
  document.getElementById('opcionMenu5').style.display='none'; 
  

  $("#opcionMenuActivo1").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo2").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo4").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo5").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo3").addClass("opcionMenuActivo");
}
function desplegarMenu4(){
  document.getElementById('opcionMenu1').style.display='none';
  document.getElementById('opcionMenu2').style.display='none'; 
  document.getElementById('opcionMenu3').style.display='none';
  document.getElementById('opcionMenu4').style.display='block';
  document.getElementById('opcionMenu5').style.display='none';  
  

  $("#opcionMenuActivo1").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo2").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo3").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo5").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo4").addClass("opcionMenuActivo");
}
function desplegarMenu4(){
  document.getElementById('opcionMenu1').style.display='none';
  document.getElementById('opcionMenu2').style.display='none'; 
  document.getElementById('opcionMenu3').style.display='none';
  document.getElementById('opcionMenu4').style.display='none';
  document.getElementById('opcionMenu5').style.display='block';  
  

  $("#opcionMenuActivo1").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo2").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo3").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo4").removeClass("opcionMenuActivo");
  $("#opcionMenuActivo5").addClass("opcionMenuActivo");
}
function cerrarSubMenu(){
  document.getElementById('opcionMenu1').style.display='none';
  document.getElementById('opcionMenu2').style.display='none';
	document.getElementById('opcionMenu3').style.display='none';
	document.getElementById('opcionMenu4').style.display='none';
  document.getElementById('opcionMenu5').style.display='none';
  document.getElementById('opcionMenu6').style.display='none';
  document.getElementById('opcionMenu7').style.display='none';

    $("#opcionMenuActivo1").removeClass("opcionMenuActivo");
    $("#opcionMenuActivo2").removeClass("opcionMenuActivo");
	  $("#opcionMenuActivo3").removeClass("opcionMenuActivo");
	  $("#opcionMenuActivo4").removeClass("opcionMenuActivo");
    $("#opcionMenuActivo5").removeClass("opcionMenuActivo");
    $("#opcionMenuActivo6").removeClass("opcionMenuActivo");
    $("#opcionMenuActivo7").removeClass("opcionMenuActivo");

}


function funSeguridad(){
   window.location="?accion=solicitud";  
}

function funSeguridad(){
   window.location="?accion=solicitud";  
}