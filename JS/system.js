//*********VALIDATIONS COMPANY ************/

//Insert data
function insertCompany() {
      var code = $("input#code").val();
      var name = $("input#name").val();
      var nit = $("input#nit").val();
      var rent = $("input#rent").val();
      var address = $("input#address").val();
      var pbx = $("input#pbx").val();
      var mobile = $("input#mobile").val();
      //Validate data submission
      var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbNit=' + nit + '&txbRent=' + rent + '&txbAddress=' + address + '&txbPBX=' + pbx + '&txbMobile=' + mobile +'&saveCompany=1';
      $.ajax({
        type: "POST",
        url: "/MundoApp/Controllers/ajaxController.php?controller=company&action=insert",
        data: dataString,
        dataType : 'json',
        
					success: function(response){ 
					  //var status=response.status;
					  if(response.status == 'ok'){
              alert(response.result);
              location.reload(true);
          }
          else{
            alert(response.result);
            location.reload(true);
          }
					  
					   //window.location="?controller=company&action=home";                            
					},
					error: function(jqXHR, textStatus, error){
					   alert( "Error al INSERTAR los datos: " + jqXHR.responseText);
					}
      });
      
        
}

//Delete data
function deleteCompany(code){
  var dataString = 'code='+ code;
    var opcion = confirm("realmente desea eliminar el registro?");
    if (opcion == true) {
      $.ajax({
        type: "GET",
        url: "/MundoApp/Controllers/ajaxController.php?controller=company&action=delete",
        data: dataString,
        dataType : 'json',
        
        success: function(response) {
          //validate response from server
          alert(response.result);  
          location.reload();
        }
      });
      return false;
	} else {
	    alert('Registro no eliminado');
	}
  
}

//Update data
function updateCompany(){
  var code = $("input#code").val();
  var name = $("input#name").val();
  var nit = $("input#nit").val();
  var rent = $("input#rent").val();
  var address = $("input#address").val();
  var pbx = $("input#pbx").val();
  var mobile = $("input#mobile").val();
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbNit=' + nit + '&txbRent=' + rent + '&txbAddress=' + address + '&txbPBX=' + pbx + '&txbMobile=' + mobile +'&updateCompany=1';
  var opcion = confirm("Realmente desea modificar el registro?");
    if (opcion == true) {
      $.ajax({
        type: "POST",
        url: "/MundoApp/Controllers/ajaxController.php?controller=company&action=update",
        data: dataString,
        dataType : 'json',
        
          success: function(response){ 
            //var status=response.status;
            if(response.status == 'ok'){
              alert(response.result);
              window.location="?controller=company&action=home";
          }
          else{
            alert(response.result);
          }
            
                                         
          },
          error: function(jqXHR, textStatus, error){
             alert( "Error al actualizar los datos: " + jqXHR.responseText);
          }
      });
	} else {
	    alert('Registro no actualizado');
      location.reload();
	}
  
}
//******** END VALIDATION COMPANY *************/


//*********VALIDATIONS ESTARESE ************/

//Insert data
function insertEstarese() {
  var code = $("input#code").val();
  var name = $("input#name").val();
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name +'&saveEstarese=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=estarese&action=insert",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          location.reload(true);
      }
      else{
        alert(response.result);
        location.reload(true);
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al INSERTAR los datos: " + jqXHR.responseText);
      }
  });
  
    
}

//Delete data
function deleteEstarese(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=estarese&action=delete",
    data: dataString,
    dataType : 'json',
    
    success: function(response) {
      //validate response from server
      alert(response.result);  
      location.reload();
    }
  });
  return false;
} else {
  alert('Registro no eliminado');
}

}

//Update data
function updateEstarese(){
var code = $("input#code").val();
var name = $("input#name").val();
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&updateEstarese=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=estarese&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=estarese&action=home";
      }
      else{
        alert(response.result);
      }
        
                                     
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al actualizar los datos: " + jqXHR.responseText);
      }
  });
} else {
  alert('Registro no actualizado');
  location.reload();
}

}
//******** END VALIDATION ESTARESE *************/

