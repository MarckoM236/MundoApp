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


//*********VALIDATIONS AGENCY ************/

//Insert data
function insertAgency() {
  var code = $("input#code").val();
  var name = $("input#name").val();
  var status = $("input#status").val();
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbStatus='+ status +'&saveAgency=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=agency&action=insert",
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
function deleteAgency(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=agency&action=delete",
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
function updateAgency(){
var code = $("input#code").val();
var name = $("input#name").val();
var status = $("input#status").val();
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&txbStatus='+ status +'&updateAgency=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=agency&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=agency&action=home";
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
//******** END VALIDATION AGENCY *************/


//*********VALIDATIONS ADVISER ************/

//Insert data
function insertAdviser() {
  var id = $("input#id").val();
  var name = $("input#name").val();
  var lastName = $("input#lastName").val();
  var status = $("input#status").val();
  
  //Validate data submission
  var dataString = 'txbId='+ id + '&txbName=' + name + '&txbLastName='+lastName+ '&txbStatus='+ status +'&saveAdviser=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=adviser&action=insert",
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
function deleteAdviser(id){
var dataString = 'id='+ id;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=adviser&action=delete",
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
function updateAdviser(){
var id = $("input#id").val();
var name = $("input#name").val();
var lastName = $("input#lastName").val();
var status = $("input#status").val();
//Validate data submission
var dataString = 'txbId='+ id + '&txbName=' + name + '&txbLastName=' + lastName + '&txbStatus='+ status +'&updateAdviser=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=adviser&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=adviser&action=home";
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
//******** END VALIDATION ADVISER *************/

//*********VALIDATIONS USER ************/

//Insert data
function insertUser() {
  var code = $("input#code").val();
  var name = $("input#name").val();
  var pass = $("input#pass").val();
  var status = $("input#status").val();
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbPass='+pass+ '&txbStatus='+ status +'&saveUser=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=user&action=insert",
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
function deleteUser(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=user&action=delete",
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
function updateUser(){
var code = $("input#code").val();
var name = $("input#name").val();
var pass = $("input#pass").val();
var status = $("input#status").val();
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbPass=' + pass + '&txbStatus='+ status +'&updateUser=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=user&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=user&action=home";
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
//******** END VALIDATION USER *************/

//*********VALIDATIONS SELLER ************/

//Insert data
function insertSeller() {
  var id = $("input#id").val();
  var name = $("input#name").val();
  var lastName = $("input#lastName").val();
  var status = $("input#status").val();
  
  //Validate data submission
  var dataString = 'txbId='+ id + '&txbName=' + name + '&txbLastName='+lastName+ '&txbStatus='+ status +'&saveSeller=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=seller&action=insert",
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
function deleteSeller(id){
var dataString = 'id='+ id;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=seller&action=delete",
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
function updateSeller(){
var id = $("input#id").val();
var name = $("input#name").val();
var lastName = $("input#lastName").val();
var status = $("input#status").val();
//Validate data submission
var dataString = 'txbId='+ id + '&txbName=' + name + '&txbLastName=' + lastName + '&txbStatus='+ status +'&updateSeller=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=seller&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=seller&action=home";
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
//******** END VALIDATION SELLER *************/

//*********VALIDATIONS TIPOLIQU  ************/

//Insert data
function insertTipoLiQu() {
  var code = $("input#code").val();
  var name = $("input#name").val();
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name +'&saveTipoLiQu=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=tipoLiQu&action=insert",
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
function deleteTipoLiQu(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=tipoLiQu&action=delete",
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
function updateTipoLiQu(){
var code = $("input#code").val();
var name = $("input#name").val();
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&updateTipoLiQu=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=tipoLiQu&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=tipoLiQu&action=home";
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


