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
function insertAgency(code,name,status) {
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
function updateAgency(code,name,status){
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
//******** END VALIDATION TIPOLIQU *************/

//*********VALIDATIONS PLAN  ************/

//Insert data
function insertPlan() {
  var code = $("input#code").val();
  var name = $("input#name").val();
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name +'&savePlan=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=plan&action=insert",
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
function deletePlan(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=plan&action=delete",
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
function updatePlan(){
var code = $("input#code").val();
var name = $("input#name").val();
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&updatePlan=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=plan&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=plan&action=home";
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
//******** END VALIDATION PLAN *************/

//*********VALIDATIONS DESTINATION  ************/

//Insert data
function insertDestination() {
  var code = $("input#code").val();
  var name = $("input#name").val();
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name +'&saveDestination=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=destination&action=insert",
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
function deleteDestination(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=destination&action=delete",
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
function updateDestination(){
var code = $("input#code").val();
var name = $("input#name").val();
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&updateDestination=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=destination&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=destination&action=home";
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
//******** END VALIDATION DESTINATION *************/


//*********VALIDATIONS HOTEL  ************/

//Insert data
function insertHotel() {
  var code = $("input#code").val();
  var name = $("input#name").val();
  var nit = $("input#nit").val();
  var address = $("input#address").val();
  var phone = $("input#phone").val();
  var status = $("input#status").val();
  var email = $("input#email").val();
  var mobile = $("input#mobile").val();
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name +'&txbNit='+ nit + '&txbAddress='+ address + '&txbPhone='+ phone  +'&txbStatus='+ status +'&txbEmail='+ email +'&txbMobile='+ mobile +'&saveHotel=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=hotel&action=insert",
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
function deleteHotel(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=hotel&action=delete",
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
function updateHotel(){
  var code = $("input#code").val();
  var name = $("input#name").val();
  var nit = $("input#nit").val();
  var address = $("input#address").val();
  var phone = $("input#phone").val();
  var status = $("input#status").val();
  var email = $("input#email").val();
  var mobile = $("input#mobile").val();
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&txbNit='+ nit + '&txbAddress='+ address + '&txbPhone='+ phone  +'&txbStatus='+ status +'&txbEmail='+ email +'&txbMobile='+ mobile +'&updateHotel=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=hotel&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=hotel&action=home";
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
//******** END VALIDATION HOTEL *************/

//*********VALIDATIONS TIPOALIM  ************/

//Insert data
function insertTipoAlim() {
  var code = $("input#code").val();
  var name = $("input#name").val();
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name +'&saveTipoAlim=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=tipoAlim&action=insert",
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
function deleteTipoAlim(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=tipoAlim&action=delete",
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
function updateTipoAlim(){
var code = $("input#code").val();
var name = $("input#name").val();
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&updateTipoAlim=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=tipoAlim&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=tipoAlim&action=home";
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
//******** END VALIDATION TIPOALIM *************/

//*********VALIDATIONS ACOMODAC  ************/

//Insert data
function insertAcomodac() {
  var code = $("input#code").val();
  var name = $("input#name").val();
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name +'&saveAcomodac=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=acomodac&action=insert",
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
function deleteAcomodac(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=acomodac&action=delete",
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
function updateAcomodac(){
var code = $("input#code").val();
var name = $("input#name").val();
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&updateAcomodac=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=acomodac&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=acomodac&action=home";
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
//******** END VALIDATION ACOMODAC *************/

//*********VALIDATIONS CONCEPTO  ************/

//Insert data
function insertConcepto() {
  var code = $("input#code").val();
  var name = $("input#name").val();
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name +'&saveConcepto=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=concepto&action=insert",
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
function deleteConcepto(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=concepto&action=delete",
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
function updateConcepto(){
var code = $("input#code").val();
var name = $("input#name").val();
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&updateConcepto=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=concepto&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=concepto&action=home";
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
//******** END VALIDATION CONCEPTO *************/

//*********VALIDATIONS AEROLINE ************/

//Insert data
function insertAeroline(code,name,status) {
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbStatus='+ status +'&saveAeroline=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=aeroline&action=insert",
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
function deleteAeroline(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=aeroline&action=delete",
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
function updateAeroline(code,name,status){
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&txbStatus='+ status +'&updateAeroline=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=aeroline&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=aeroline&action=home";
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
//******** END VALIDATION AEROLINE *************/

//*********VALIDATIONS INCLUSIO ************/

//Insert data
function insertInclusio(code,name) {
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name + '&saveInclusio=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=inclusio&action=insert",
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
function deleteInclusio(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=inclusio&action=delete",
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
function updateInclusio(code,name){
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&updateInclusio=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=inclusio&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=inclusio&action=home";
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
//******** END VALIDATION INCLUSIO *************/


//*********VALIDATIONS SYSTEM ************/

//Insert data
function insertSystem(code,name,value,fein,fefi) {
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbValue=' + value + '&txbFeIn=' + fein + '&txbFeFi=' + fefi + '&saveSystem=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=system&action=insert",
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
function deleteSystem(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=system&action=delete",
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
function updateSystem(code,name,value,fein,fefi){
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbValue=' + value + '&txbFeIn=' + fein + '&txbFeFi=' + fefi + '&updateSystem=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=system&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=system&action=home";
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
//******** END VALIDATION SYSTEM *************/

//*********VALIDATIONS OPERATOR  ************/

//Insert data
function insertOperator(code,name,address,phone,status,email,mobile) {
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbAddress='+ address + '&txbPhone='+ phone  +'&txbStatus='+ status +'&txbEmail='+ email +'&txbMobile='+ mobile +'&saveOperator=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=operator&action=insert",
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
function deleteOperator(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=operator&action=delete",
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
function updateOperator(code,name,address,phone,status,email,mobile){
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name +'&txbAddress='+ address + '&txbPhone='+ phone  +'&txbStatus='+ status +'&txbEmail='+ email +'&txbMobile='+ mobile +'&updateOperator=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=operator&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=operator&action=home";
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
//******** END VALIDATION OPERATOR *************/


//*********VALIDATIONS BANK  ************/

//Insert data
function insertBank(code,name,tiAccount,numAccount) {
  
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbTiAccount='+ tiAccount + '&txbNumAccount='+ numAccount +'&saveBank=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=bank&action=insert",
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
function deleteBank(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=bank&action=delete",
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
function updateBank(code,name,tiAccount,numAccount){
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbTiAccount='+ tiAccount + '&txbNumAccount='+ numAccount +'&updateBank=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=bank&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=bank&action=home";
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
//******** END VALIDATION BANK *************/

//*********VALIDATIONS THIRD PARTY  ************/

//Insert data
function insertThirdParty(id,name,address,phone,email) {
  
  //Validate data submission
  var dataString = 'txbId='+ id + '&txbName=' + name + '&txbAddress='+ address + '&txbPhone='+ phone + '&txbEmail='+ email +'&saveThirdParty=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=thirdParty&action=insert",
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
function deleteThirdParty(id){
var dataString = 'id='+ id;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=thirdParty&action=delete",
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
function updateThirdParty(id,name,address,phone,email){
//Validate data submission
var dataString = 'txbId='+ id + '&txbName=' + name + '&txbAddress='+ address + '&txbPhone='+ phone + '&txbEmail='+ email +'&updateThirdParty=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=thirdParty&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=thirdParty&action=home";
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
//******** END VALIDATION THIRD PARTY *************/

//*********VALIDATIONS FLIGHT  ************/

//Insert data
function insertFlight(codAeroline,num,route,status) {
  
  //Validate data submission
  var dataString = 'txbCodAeroline='+ codAeroline + '&txbNum=' + num + '&txbRoute='+ route + '&txbStatus='+ status +'&saveFlight=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=flight&action=insert",
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
function deleteFlight(num){
var dataString = 'num='+ num;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=flight&action=delete",
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
function updateFlight(codAeroline,num,route,status){
//Validate data submission
var dataString = 'txbCodAeroline='+ codAeroline + '&txbNum=' + num + '&txbRoute='+ route + '&txbStatus='+ status +'&updateFlight=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=flight&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=flight&action=home";
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
//******** END VALIDATION FLIGHT *************/

//*********VALIDATIONS TRAVELER ************/

//Insert data
function insertTraveler(id,name,lastName,birthDate) {
  //Validate data submission
  var dataString = 'txbId='+ id + '&txbName=' + name + '&txbLastName=' + lastName + '&txbBirthDate=' + birthDate + '&saveTraveler=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=traveler&action=insert",
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
function deleteTraveler(id){
var dataString = 'id='+ id;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=traveler&action=delete",
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
function updateTraveler(id,name,lastName,birthDate){
//Validate data submission
var dataString = 'txbId='+ id + '&txbName=' + name + '&txbLastName=' + lastName + '&txbBirthDate=' + birthDate + '&updateTraveler=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=traveler&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=traveler&action=home";
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
//******** END VALIDATION TRAVELER *************/

//*********VALIDATIONS LIQUIDAC ************/

//Insert data
function insertLiquidac(tipoLiqu,fechaSis,codLiqu,codAgency,codSeller,codAdviser,codDestination,codHotel,codAlim,codPlan,codAcomodac,valTotTraveler,descuento,valIvaLiqu,valIcaLiqu,valRtfLiqu,valTotEmp,pl50Liqu,pl100Liqu,usuario) {
  //Validate data submission
  var dataString = 'txbChTipoLiqu='+ tipoLiqu + '&txbfecSis=' + fechaSis + '&txbCodeLiqu=' + codLiqu + '&txbCodeAgency=' + codAgency + '&txbCodeSeller=' + codSeller + '&txbCodeAdviser=' + codAdviser + '&txbCodeDestination=' + codDestination + '&txbCodeHotel=' + codHotel + '&txbCodeAlim=' + codAlim + '&txbCodePlan=' + codPlan + '&txbCodeAcomodac=' + codAcomodac + '&txbValTotTraveler=' + valTotTraveler + '&txbValDes=' + descuento +  '&txbValIvaLiqu=' + valIvaLiqu + '&txbValIcaLiqu=' + valIcaLiqu + '&txbValRtfLiqu=' + valRtfLiqu + '&txbvalTotEmp=' + valTotEmp + '&txbPl50Liqu=' + pl50Liqu + '&txbPl100Liqu=' + pl100Liqu + '&txbIdUser=' + usuario + '&saveLiquidac=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=liquidac&action=insert",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          /* alert(response.result);
          location.reload(true); */
          //si se inserta liquidacion, se procede a insertar el detalle de esta.
          liquDetail(codLiqu,arrFlight());
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
function deleteTraveler(id){
var dataString = 'id='+ id;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=traveler&action=delete",
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
function updateTraveler(id,name,lastName,birthDate){
//Validate data submission
var dataString = 'txbId='+ id + '&txbName=' + name + '&txbLastName=' + lastName + '&txbBirthDate=' + birthDate + '&updateTraveler=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=traveler&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=traveler&action=home";
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
//******** END VALIDATION LIQUIDAC *************/


//******************** VALIDATION SHOW FLIGHT ************************//
//********************CONSULTA VUELOS SELECCIONADO Y RELLENA LOS CAMPOS CORRESPONDIENTES *****************/
function showFlight(num){
  //alert(" el codigo es: "+ num);
  var dataString = 'txbCodFlightSh='+ num +'&ShowFlight=1';
      $.ajax({
        type: "POST",
        url: "/MundoApp/Controllers/ajaxController.php?controller=liquidacFlight&action=show",
        data: dataString,
        dataType : 'json',
        
          success: function(response){ 
            var codAer=response.codAer;
          var aeroline=response.aer;
           var route=response.rou;
            //alert(response.aer);
            $("#routeFli").val(route);
            $("#aeroFli").val(aeroline);
            $("#codAer").val(codAer);
                                                 
          },
          /* error: function(jqXHR, textStatus, error){
            alert( "Error al actualizar los datos: " + jqXHR.responseText);
          } */
      });
  }

//******************** END VALIDATION SHOW FLIGHT ************************//

function showTraveler(id){
  //alert(id);
  var dataString = 'txbCodTraveler='+ id +'&ShowTraveler=1';
      $.ajax({
        type: "POST",
        url: "/MundoApp/Controllers/ajaxController.php?controller=liquidacTraveler&action=show",
        data: dataString,
        dataType : 'json',
        
          success: function(response){ 
          var name=response.name;
           var lastName=response.lastName;
           var birthDate=response.birthDate;
            //alert(response.aer);
            $("#nameTraveler").val(name);
            $("#lastNameTraveler").val(lastName);
            $("#fecNacTraveler").val(birthDate);
          
            
                                        
          },
          /* error: function(jqXHR, textStatus, error){
            alert( "Error al actualizar los datos: " + jqXHR.responseText);
          } */
      });
}


function addInc(cod,name){
  var item = '<tr><td class="codI ocultar">'+cod+'</td><td class="nameI">'+name+'</td><td> <a href="#"class="btn btn-danger deleteInclusio"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista1").append(item);
    arrIncludes();
}
function addNotInc(cod,name){
  var item = '<tr><td class="codNI ocultar">'+cod+'</td><td class="nameNI">'+name+'</td><td> <a href="#"class="btn btn-danger deleteNoInclusio"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista2").append(item);
    arrNoIncludes();
}
function addTraveler(id,name,lastName,fecNac){
  var item = '<tr><td class="idTr">'+id+'</td><td class="nameTr">'+name+'</td><td class="lastNameTr">'+lastName+'</td><td class="birthDateTr">'+fecNac+'</td><td> <a href="#"class="btn btn-danger deleteTraveler"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#listaTrav").append(item);
    arrTraveler();
}
function addConcept(cod,name,cant,prec,tot){
  var item = '<tr><td class="codConc ocultar">'+cod+'</td><td class="nameConc">'+name+'</td><td class="cantConc">'+cant+'</td><td class="preConc">'+prec+'</td><td class="totConc">'+tot+'</td><td> <a href="#"class="btn btn-danger deleteConc"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#listaConc").append(item);
    arrConcept();
}
function addFlight(cod,codAer,aeroline,route,date,exit,arrival,comment){
  var item = '<tr><td class="codFli">'+cod+'</td><td class="rouFli">'+route+'</td><td class="codAer ocultar">'+codAer+'</td><td class="aerFli">'+aeroline+'</td><td class="dateFli">'+date+'</td><td class="exitFli">'+exit+'</td><td class="arriFli">'+arrival+'</td><td class="commFli">'+comment+'</td><td> <a href="#"class="btn btn-danger deleteFlight"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#listaFlight").append(item);
    arrFlight();
}


//DETALLE LIQUIDACION
function liquDetail(codDetail,arrFli){
  var arrFliJson=JSON.stringify(arrFli);
  //var arrTravJson=JSON.stringify(arrTrav);

  //console.log(arrTravJson);
  var dataString = 'codDetail='+ codDetail +'&arrFliJson='+ arrFliJson + '&saveDetail=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=liquidac&action=insert",
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


