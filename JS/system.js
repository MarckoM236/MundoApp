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
//******** END VALIDATION SYSTEM *************/


//******************** VALIDATION SHOW FLIGHT ************************//
function showFlight(num){
  //alert(" el codigo es: "+ num);
  var dataString = 'txbCodFlightSh='+ num +'&ShowFlight=1';
      $.ajax({
        type: "POST",
        url: "/MundoApp/Controllers/ajaxController.php?controller=liquidacFlight&action=show",
        data: dataString,
        dataType : 'json',
        
          success: function(response){ 
          var aeroline=response.aer;
           var route=response.rou;
            //alert(response.aer);
            $("#routeFl").val(route);
            $("#aeroFli").val(aeroline);
          
            
                                        
          },
          /* error: function(jqXHR, textStatus, error){
            alert( "Error al actualizar los datos: " + jqXHR.responseText);
          } */
      });
  }

//******************** END VALIDATION SHOW FLIGHT ************************//

function showUsers(id){
  var dataString = 'txbCodUser='+ id +'&ShowUsers=1';
      $.ajax({
        type: "POST",
        url: "/MundoApp/Controllers/ajaxController.php?controller=liquidacFlight&action=show",
        data: dataString,
        dataType : 'json',
        
          success: function(response){ 
          var aeroline=response.aer;
           var route=response.rou;
            //alert(response.aer);
            $("#routeFl").val(route);
            $("#aeroFli").val(aeroline);
          
            
                                        
          },
          /* error: function(jqXHR, textStatus, error){
            alert( "Error al actualizar los datos: " + jqXHR.responseText);
          } */
      });
}



