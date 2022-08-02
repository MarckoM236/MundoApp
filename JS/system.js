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
function insertAgency(code,name,address,phone,mobile,email,status) {
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbAddress=' +address+ '&txbPhone=' +phone+ '&txbMobile=' +mobile+ '&txbEmail=' +email+ '&txbStatus='+ status +'&saveAgency=1';
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
function updateAgency(code,name,address,phone,mobile,email,status){
//Validate data submission
var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbAddress=' +address+ '&txbPhone=' +phone+ '&txbMobile=' +mobile+ '&txbEmail=' +email+'&txbStatus='+ status +'&updateAgency=1';
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
  var status = $("select#status").val();
  
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
var status = $("select#status").val();
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
  var status = $("select#status").val();
  
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
var status = $("select#status").val();
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
  var status = $("select#status").val();
  
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
var status = $("select#status").val();
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
  var status = $("select#status").val();
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
  var status = $("select#status").val();
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
function insertLiquidac(tipoLiqu,fechaSis,codLiqu,codAgency,codSeller,codAdviser,codDestination,codHotel,codAlim,codPlan,codAcomodac,valTotTraveler,descuento,valIvaLiqu,valIcaLiqu,valRtfLiqu,valTotEmp,pl50Liqu,pl100Liqu,usuario,numRes) {
  numRes=0;
  //Validate data submission
  var dataString = 'txbChTipoLiqu='+ tipoLiqu + '&txbfecSis=' + fechaSis + '&txbCodeLiqu=' + codLiqu + '&txbCodeAgency=' + codAgency + '&txbCodeSeller=' + codSeller + '&txbCodeAdviser=' + codAdviser + '&txbCodeDestination=' + codDestination + '&txbCodeHotel=' + codHotel + '&txbCodeAlim=' + codAlim + '&txbCodePlan=' + codPlan + '&txbCodeAcomodac=' + codAcomodac + '&txbValTotTraveler=' + valTotTraveler + '&txbValDes=' + descuento +  '&txbValIvaLiqu=' + valIvaLiqu + '&txbValIcaLiqu=' + valIcaLiqu + '&txbValRtfLiqu=' + valRtfLiqu + '&txbvalTotEmp=' + valTotEmp + '&txbPl50Liqu=' + pl50Liqu + '&txbPl100Liqu=' + pl100Liqu + '&txbIdUser=' + usuario + '&txbNumRes=' + numRes + '&saveLiquidac=1';
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
          //alert(response.result);
      }
      else{
        alert(response.result);
        location.reload(true);
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar la liquidacion: " + jqXHR.responseText);
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

//*********VALIDATIONS PAYMENTS ************/

//Insert data
function insertPayments(code,liqu,bank,typePay,value,datePay,user) {
  user=1;
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbIL=' + liqu + '&txbCodeBank=' + bank + '&txbTypePay=' + typePay + '&txbValuePay=' + value + '&txbDatePay=' + datePay + '&txbIdUser=' + user + '&savePayments=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=payments&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar el pago: " + jqXHR.responseText);
      }
  });
     
}

//Delete data
function deletePay(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=payments&action=delete",
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
//******** END VALIDATION PAYMENTS *************/

//*********VALIDATIONS UTILITY ************/

//Insert data
function insertUtility(code,codeLiqu,date,user,valTicket,valHotel,valAsisMedica,valReceptivo,valOtros,valLiquidac,valUtility){
  //alert(date);
  //Validate data submission
  var dataString = 'txbCode='+ code  + '&txbCodeLiqu=' + codeLiqu+ '&txbDateUtil=' + date + '&txbIdUser=' + user +'&saveUtility=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=utility&action=insert",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          /* alert(response.result);
          location.reload(true); */
          var dataString = 'txbCode='+ code  + '&txbValTicket=' + valTicket+ '&txbValHotel=' + valHotel + '&txbValAsisMedica=' + valAsisMedica + '&txbValReceptivo=' + valReceptivo + '&txbValOtros=' + valOtros + '&txbValLiquidac=' + parseInt(valLiquidac.substr(2)) + '&txbValUtility=' + valUtility + '&saveUtildeta=1';
            $.ajax({
              type: "POST",
              url: "/MundoApp/Controllers/ajaxController.php?controller=utildeta&action=insert",
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
                }
                  
                  //window.location="?controller=company&action=home";                            
                },
                error: function(jqXHR, textStatus, error){
                  alert( "Error al guardar la utilidad: " + jqXHR.responseText);
                }
            }); 
          
          

      }
      else{
        alert(response.result);
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar el receptivo: " + jqXHR.responseText);
      }
  }); 
     
}

//Delete data
function deleteUtility(code1){
  //alert(code1);
var dataString = 'code1='+ code1;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=utility&action=delete",
    data: dataString,
    dataType : 'json',
    
    success: function(response) {
      //validate response from server
      $.ajax({
        type: "GET",
        url: "/MundoApp/Controllers/ajaxController.php?controller=utildeta&action=delete",
        data: dataString,
        dataType : 'json',
        
        success: function(response) {
          //validate response from server
          alert(response.result);  
          location.reload();
        }
      });
    }
  });
  return false;
} else {
  alert('Registro no eliminado');
}

}

//Update data
function updateUtility(code,valTicket,valHotel,valAsisMedica,valReceptivo,valOtros,valLiquidac,valUtility){
  //Validate data submission
  var dataString = 'txbCode='+ code  + '&txbValTicket=' + valTicket+ '&txbValHotel=' + valHotel + '&txbValAsisMedica=' + valAsisMedica + '&txbValReceptivo=' + valReceptivo + '&txbValOtros=' + valOtros + '&txbValLiquidac=' + valLiquidac + '&txbValUtility=' + valUtility + '&updateUtildeta=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=utildeta&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=utility&action=home";
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
//******** END VALIDATION UTILITY*************/

//*********VALIDATIONS LOCKS ************/

//Insert data
function insertLocks(code,aeroline,origin,destination,dateIn,dateFi,flightIda,flightReg,quantity,tariff,user) {
  user=1;
  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbCodeAeroline=' + aeroline + '&txbCodeOr=' + origin + '&txbCodeDest=' + destination + '&txbFecIdaLock=' + dateIn + '&txbFecRegLock=' + dateFi + '&txbCodeFlightIda=' + flightIda + '&txbCodeFlightReg=' + flightReg + '&txbCantLock=' + quantity + '&txbTariLock=' + tariff + '&txbUserLock=' + user +'&saveLock=1';
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=locks&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar el bloqueo: " + jqXHR.responseText);
      }
  });
     
}

//Delete data
function deleteLock(code){
var dataString = 'code='+ code;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=locks&action=delete",
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
function updateLock(code,aeroline,origin,destination,dateIn,dateFi,flightIda,flightReg,quantity,tariff,user){
//Validate data submission
var dataString = 'txbCode='+ code + '&txbCodeAeroline=' + aeroline + '&txbCodeOr=' + origin + '&txbCodeDest=' + destination + '&txbFecIdaLock=' + dateIn + '&txbFecRegLock=' + dateFi + '&txbCodeFlightIda=' + flightIda + '&txbCodeFlightReg=' + flightReg + '&txbCantLock=' + quantity + '&txbTariLock=' + tariff + '&txbUserLock=' + user +'&updateLock=1';
var opcion = confirm("Realmente desea modificar el registro?");
if (opcion == true) {
  $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=locks&action=update",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          alert(response.result);
          window.location="?controller=lock&action=home";
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
//******** END VALIDATION LOCKS *************/

//*********VALIDATIONS TARIANDR ************/

//Insert data
function insertTariandr(user,arrTariandr){
  var arrTarJson=JSON.stringify(arrTariandr);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrTariandr='+ arrTarJson  + '&txbUser=' + user +'&saveTariandr=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=tariandr&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar la tarifa: " + jqXHR.responseText);
      }
  }); 
     
}

//Delete data
function deleteTariandr(code1,code2){
  //alert(code1);
  //alert(code2);
var dataString = 'code1='+ code1 + '&code2=' + code2;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=tariandr&action=delete",
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
function updateTariandr(user,arrTariandr){
  var arrTarJson=JSON.stringify(arrTariandr);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrTariandr='+ arrTarJson  + '&txbUser=' + user +'&updateTariandr=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=tariandr&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=tariandr&action=home";
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
//******** END VALIDATION TARIANDR *************/

//*********VALIDATIONS TARICART ************/

//Insert data
function insertTaricart(user,arrTaricart){
  var arrTarJson=JSON.stringify(arrTaricart);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrTaricart='+ arrTarJson  + '&txbUser=' + user +'&saveTaricart=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=taricart&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar la tarifa: " + jqXHR.responseText);
      }
  }); 
     
}
//Delete data
function deleteTaricart(code1,code2){
  //alert(code1);
  //alert(code2);
var dataString = 'code1='+ code1 + '&code2=' + code2;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=taricart&action=delete",
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
function updateTaricart(user,arrTaricart){
  var arrTarJson=JSON.stringify(arrTaricart);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrTaricart='+ arrTarJson  + '&txbUser=' + user +'&updateTaricart=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=taricart&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=taricart&action=home";
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
//******** END VALIDATION TARICART *************/

//*********VALIDATIONS TARISAMA ************/

//Insert data
function insertTarisama(user,arrTarisama){
  var arrTarJson=JSON.stringify(arrTarisama);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrTarisama='+ arrTarJson  + '&txbUser=' + user +'&saveTarisama=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=tarisama&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar la tarifa: " + jqXHR.responseText);
      }
  }); 
     
}

//Delete data
function deleteTarisama(code1,code2){
  //alert(code1);
  //alert(code2);
var dataString = 'code1='+ code1 + '&code2=' + code2;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=tarisama&action=delete",
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
function updateTarisama(user,arrTarisama){
  var arrTarJson=JSON.stringify(arrTarisama);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrTarisama='+ arrTarJson  + '&txbUser=' + user +'&updateTarisama=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=tarisama&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=tarisama&action=home";
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
//******** END VALIDATION TARISAMA *************/

//*********VALIDATIONS NETOANDR ************/

//Insert data
function insertNetoandr(user,arrNetoandr){
  var arrTarJson=JSON.stringify(arrNetoandr);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrNetoandr='+ arrTarJson  + '&txbUser=' + user +'&saveNetoandr=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=netoandr&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar la tarifa: " + jqXHR.responseText);
      }
  }); 
     
}

//Delete data
function deleteNetoandr(code1,code2){
  //alert(code1);
  //alert(code2);
var dataString = 'code1='+ code1 + '&code2=' + code2;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=netoandr&action=delete",
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
function updateNetoandr(user,arrNetoandr){
  var arrTarJson=JSON.stringify(arrNetoandr);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrNetoandr='+ arrTarJson  + '&txbUser=' + user +'&updateNetoandr=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=netoandr&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=netoandr&action=home";
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
//******** END VALIDATION NETOANDR *************/

//*********VALIDATIONS NETOCART ************/

//Insert data
function insertNetocart(user,arrNetocart){
  var arrNetJson=JSON.stringify(arrNetocart);
  //Validate data submission
  var dataString = 'arrNetocart='+ arrNetJson  + '&txbUser=' + user +'&saveNetocart=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=netocart&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar la tarifa: " + jqXHR.responseText);
      }
  }); 
     
}

//Delete data
function deleteNetocart(code1,code2){
  //alert(code1);
  //alert(code2);
var dataString = 'code1='+ code1 + '&code2=' + code2;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=netocart&action=delete",
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
function updateNetocart(user,arrNetocart){
  var arrNetJson=JSON.stringify(arrNetocart);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrNetocart='+ arrNetJson  + '&txbUser=' + user +'&updateNetocart=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=netocart&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=netocart&action=home";
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
//******** END VALIDATION NETOCART *************/

//*********VALIDATIONS NETOSAMA ************/

//Insert data
function insertNetosama(user,arrNetosama){
  var arrNetJson=JSON.stringify(arrNetosama);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrNetosama='+ arrNetJson  + '&txbUser=' + user +'&saveNetosama=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=netosama&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar la tarifa: " + jqXHR.responseText);
      }
  }); 
     
}

//Delete data
function deleteNetosama(code1,code2){
  //alert(code1);
  //alert(code2);
var dataString = 'code1='+ code1 + '&code2=' + code2;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=netosama&action=delete",
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
function updateNetosama(user,arrNetosama){
  var arrNetJson=JSON.stringify(arrNetosama);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrNetosama='+ arrNetJson  + '&txbUser=' + user +'&updateNetosama=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=netosama&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=netosama&action=home";
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
//******** END VALIDATION NETOSAMA *************/

//*********VALIDATIONS RECEANDR ************/

//Insert data
function insertReceandr(user,arrReceandr){
  var arrReJson=JSON.stringify(arrReceandr);
  //Validate data submission
  var dataString = 'arrReceandr='+ arrReJson  + '&txbUser=' + user +'&saveReceandr=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=receandr&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar el receptivo: " + jqXHR.responseText);
      }
  }); 
     
}

//Delete data
function deleteReceandr(code1,code2){
  //alert(code1);
  alert(code2);
var dataString = 'code1='+ code1 + '&code2=' + code2;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=receandr&action=delete",
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
function updateReceandr(user,arrReceandr){
  var arrReJson=JSON.stringify(arrReceandr);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrReceandr='+ arrReJson  + '&txbUser=' + user +'&updateReceandr=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=receandr&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=receandr&action=home";
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
//******** END VALIDATION RECEANDR*************/

//*********VALIDATIONS RECECART ************/

//Insert data
function insertRececart(user,arrRececart){
  var arrReJson=JSON.stringify(arrRececart);
  //Validate data submission
  var dataString = 'arrRececart='+ arrReJson  + '&txbUser=' + user +'&saveRececart=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=rececart&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar el receptivo: " + jqXHR.responseText);
      }
  }); 
     
}

//Delete data
function deleteRececart(code1,code2){
  //alert(code1);
  alert(code2);
var dataString = 'code1='+ code1 + '&code2=' + code2;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=rececart&action=delete",
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
function updateRececart(user,arrRececart){
  var arrReJson=JSON.stringify(arrRececart);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrRececart='+ arrReJson  + '&txbUser=' + user +'&updateRececart=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=rececart&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=rececart&action=home";
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
//******** END VALIDATION RECECART*************/

//*********VALIDATIONS RECESAMA ************/

//Insert data
function insertRecesama(user,arrRecesama){
  var arrReJson=JSON.stringify(arrRecesama);
  //Validate data submission
  var dataString = 'arrRecesama='+ arrReJson  + '&txbUser=' + user +'&saveRecesama=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=recesama&action=insert",
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
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar el receptivo: " + jqXHR.responseText);
      }
  }); 
     
}

//Delete data
function deleteRecesama(code1,code2){
  //alert(code1);
  alert(code2);
var dataString = 'code1='+ code1 + '&code2=' + code2;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=recesama&action=delete",
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
function updateRecesama(user,arrRecesama){
  var arrReJson=JSON.stringify(arrRecesama);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrRecesama='+ arrReJson  + '&txbUser=' + user +'&updateRecesama=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=recesama&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=recesama&action=home";
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
//******** END VALIDATION RECESAMA*************/

//*********VALIDATIONS BLOQDETA ************/

//Insert data
function insertBloqdeta(arrBloqdeta){
  
  var arrBTJson=JSON.stringify(arrBloqdeta);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrBTJson='+ arrBTJson +'&saveBloqdeta=1';
   $.ajax({
    type: "POST",
    url: "/MundoApp/Controllers/ajaxController.php?controller=bloqdeta&action=insert",
    data: dataString,
    dataType : 'json',
    
      success: function(response){ 
        //var status=response.status;
        if(response.status == 'ok'){
          //inicio
          var codeBlok=arrBloqdeta[0]['code'];
          console.log(codeBlok);
          var cant=arrBloqdeta.length;
          var dataString2 = 'codigo='+ codeBlok +'&cantidad='+ cant +'&updateCantBloqdeta=1';
          $.ajax({
            type: "POST",
            url: "/MundoApp/Controllers/ajaxController.php?controller=locks&action=updateCant",
            data: dataString2,
            dataType : 'json',
            
              success: function(response){ 
                //var status=response.status;
                if(response.status == 'ok'){
                  location.reload(true);
              }
            }
          });
          //fin
          alert(response.result);
          location.reload(true);
      }
      else{
        alert(response.result);
      }
        
         //window.location="?controller=company&action=home";                            
      },
      error: function(jqXHR, textStatus, error){
         alert( "Error al guardar el detalle: " + jqXHR.responseText);
      }
  }); 
     
}

//Delete data
function deleteNetoandr(code1,code2){
  //alert(code1);
  //alert(code2);
var dataString = 'code1='+ code1 + '&code2=' + code2;
var opcion = confirm("realmente desea eliminar el registro?");
if (opcion == true) {
  $.ajax({
    type: "GET",
    url: "/MundoApp/Controllers/ajaxController.php?controller=netoandr&action=delete",
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
function updateBloqdeta(user,arrNetoandr){
  var arrTarJson=JSON.stringify(arrNetoandr);
  //alert(arrTarJson);
  //Validate data submission
  var dataString = 'arrNetoandr='+ arrTarJson  + '&txbUser=' + user +'&updateNetoandr=1';
  var opcion = confirm("Realmente desea modificar el registro?");
  if (opcion == true) {
    $.ajax({
      type: "POST",
      url: "/MundoApp/Controllers/ajaxController.php?controller=netoandr&action=update",
      data: dataString,
      dataType : 'json',
      
        success: function(response){ 
          //var status=response.status;
          if(response.status == 'ok'){
            alert(response.result);
            window.location="?controller=netoandr&action=home";
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
//******** END VALIDATION BLOQDETA *************/


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

function showTraveler(id,controller){
  //alert(id);
  var dataString = 'txbCodTraveler='+ id +'&ShowTraveler=1';
      $.ajax({
        type: "POST",
        url: "/MundoApp/Controllers/ajaxController.php?controller="+controller+"&action=show",
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
function addDest(fecDest,codDest,valDest,codHotel,valHotel,codAlim,valAlim,codPlan,valPlan,codAcom){
  var item = '<tr><td class="fecDest">'+fecDest+'</td><td class="codDest ocultar">'+codDest+'</td><td class="valDest">'+valDest+'</td><td class="codHotel ocultar">'+codHotel+'</td><td class="valHotel">'+valHotel+'</td><td class="codAlim ocultar">'+codAlim+'</td><td class="valAlim">'+valAlim+'</td><td class="codPlan ocultar">'+codPlan+'</td><td class="valPlan">'+valPlan+'</td><td class="codAcom">'+codAcom+'</td><td> <a href="#"class="btn btn-danger deleteDest"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#listaDestination").append(item);
    //arrDest();
}
function addTariandr(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user){
  var item = '<tr><td class="codeHotel ocultar">'+codeHotel+'</td><td class="selectedH">'+selectedH+'</td> <td class="alim ocultar">'+alim+'</td> <td class="selectedA">'+selectedA+'</td><td class="sencilla">'+sencilla+'</td><td class="doble">'+doble+'</td><td class="triple">'+triple+'</td><td class="cuadruple">'+cuadruple+'</td><td class="nino">'+nino+'</td><td class="dateInVi">'+dateInVi+'</td><td class="dateFiVi">'+dateFiVi+'</td><td class="dateInEx">'+dateInEx+'</td><td class="dateFiEx">'+dateFiEx+'</td><td> <a href="#"class="btn btn-danger deleteTariandr"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista-tariAndr").append(item);
    arrTariandr();    
}

function addTaricart(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user){
  var item = '<tr><td class="codeHotel ocultar">'+codeHotel+'</td><td class="selectedH">'+selectedH+'</td> <td class="alim ocultar">'+alim+'</td> <td class="selectedA">'+selectedA+'</td><td class="sencilla">'+sencilla+'</td><td class="doble">'+doble+'</td><td class="triple">'+triple+'</td><td class="cuadruple">'+cuadruple+'</td><td class="nino">'+nino+'</td><td class="dateInVi">'+dateInVi+'</td><td class="dateFiVi">'+dateFiVi+'</td><td class="dateInEx">'+dateInEx+'</td><td class="dateFiEx">'+dateFiEx+'</td><td> <a href="#"class="btn btn-danger deleteTaricart"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista-tariCart").append(item);
    arrTaricart();    
}

function addTarisama(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user){
  var item = '<tr><td class="codeHotel ocultar">'+codeHotel+'</td><td class="selectedH">'+selectedH+'</td> <td class="alim ocultar">'+alim+'</td> <td class="selectedA">'+selectedA+'</td><td class="sencilla">'+sencilla+'</td><td class="doble">'+doble+'</td><td class="triple">'+triple+'</td><td class="cuadruple">'+cuadruple+'</td><td class="nino">'+nino+'</td><td class="dateInVi">'+dateInVi+'</td><td class="dateFiVi">'+dateFiVi+'</td><td class="dateInEx">'+dateInEx+'</td><td class="dateFiEx">'+dateFiEx+'</td><td> <a href="#"class="btn btn-danger deleteTarisama"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista-tariSama").append(item);
    arrTarisama();    
}

function addNetoandr(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user){
  var item = '<tr><td class="codeHotel ocultar">'+codeHotel+'</td><td class="selectedH">'+selectedH+'</td> <td class="alim ocultar">'+alim+'</td> <td class="selectedA">'+selectedA+'</td><td class="sencilla">'+sencilla+'</td><td class="doble">'+doble+'</td><td class="triple">'+triple+'</td><td class="cuadruple">'+cuadruple+'</td><td class="nino">'+nino+'</td><td class="dateInVi">'+dateInVi+'</td><td class="dateFiVi">'+dateFiVi+'</td><td class="dateInEx">'+dateInEx+'</td><td class="dateFiEx">'+dateFiEx+'</td><td> <a href="#"class="btn btn-danger deleteNetoandr"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista-netoAndr").append(item);
    arrNetoandr();
    //alert(codeHotel);
}


function addNetocart(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user){
  var item = '<tr><td class="codeHotel ocultar">'+codeHotel+'</td><td class="selectedH">'+selectedH+'</td> <td class="alim ocultar">'+alim+'</td> <td class="selectedA">'+selectedA+'</td><td class="sencilla">'+sencilla+'</td><td class="doble">'+doble+'</td><td class="triple">'+triple+'</td><td class="cuadruple">'+cuadruple+'</td><td class="nino">'+nino+'</td><td class="dateInVi">'+dateInVi+'</td><td class="dateFiVi">'+dateFiVi+'</td><td class="dateInEx">'+dateInEx+'</td><td class="dateFiEx">'+dateFiEx+'</td><td> <a href="#"class="btn btn-danger deleteNetocart"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista-netoCart").append(item);
    arrNetocart();
    //alert(codeHotel);
}

function addNetosama(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user){
  var item = '<tr><td class="codeHotel ocultar">'+codeHotel+'</td><td class="selectedH">'+selectedH+'</td> <td class="alim ocultar">'+alim+'</td> <td class="selectedA">'+selectedA+'</td><td class="sencilla">'+sencilla+'</td><td class="doble">'+doble+'</td><td class="triple">'+triple+'</td><td class="cuadruple">'+cuadruple+'</td><td class="nino">'+nino+'</td><td class="dateInVi">'+dateInVi+'</td><td class="dateFiVi">'+dateFiVi+'</td><td class="dateInEx">'+dateInEx+'</td><td class="dateFiEx">'+dateFiEx+'</td><td> <a href="#"class="btn btn-danger deleteNetosama"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista-netoSama").append(item);
    arrNetosama();
    //alert(codeHotel);
}

function addReceandr(codeOper,selectedO,receptivo,codeHotel,selectedH,zona,hoinDiu,hofiDiu,valueDiurno,hoinNoc,hofiNoc,valueNocturno,user){
  var item = '<tr><td class="codeOperator ocultar">'+codeOper+'</td><td class="selectedO">'+selectedO+'</td> <td class="receptivo">'+receptivo+'</td> <td class="codeHotel ocultar">'+codeHotel+'</td><td class="selectedO">'+selectedH+'</td><td class="zona">'+zona+'</td><td class="hoinDiu">'+hoinDiu+'</td><td class="hofiDiu">'+hofiDiu+'</td><td class="valueDiurno">'+valueDiurno+'</td><td class="hoinNoc">'+hoinNoc+'</td><td class="hofiNoc">'+hofiNoc+'</td><td class="valueNocturno">'+valueNocturno+'</td><td> <a href="#"class="btn btn-danger deleteReceandr"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista-receAndr").append(item);
    arrReceandr();
    //alert(codeHotel);
}

function addRececart(codeOper,selectedO,receptivo,codeHotel,selectedH,zona,hoinDiu,hofiDiu,valueDiurno,hoinNoc,hofiNoc,valueNocturno,user){
  var item = '<tr><td class="codeOperator ocultar">'+codeOper+'</td><td class="selectedO">'+selectedO+'</td> <td class="receptivo">'+receptivo+'</td> <td class="codeHotel ocultar">'+codeHotel+'</td><td class="selectedO">'+selectedH+'</td><td class="zona">'+zona+'</td><td class="hoinDiu">'+hoinDiu+'</td><td class="hofiDiu">'+hofiDiu+'</td><td class="valueDiurno">'+valueDiurno+'</td><td class="hoinNoc">'+hoinNoc+'</td><td class="hofiNoc">'+hofiNoc+'</td><td class="valueNocturno">'+valueNocturno+'</td><td> <a href="#"class="btn btn-danger deleteRececart"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista-receCart").append(item);
    arrRececart();
    //alert(codeHotel);
}

function addRecesama(codeOper,selectedO,receptivo,codeHotel,selectedH,zona,hoinDiu,hofiDiu,valueDiurno,hoinNoc,hofiNoc,valueNocturno,user){
  var item = '<tr><td class="codeOperator ocultar">'+codeOper+'</td><td class="selectedO">'+selectedO+'</td> <td class="receptivo">'+receptivo+'</td> <td class="codeHotel ocultar">'+codeHotel+'</td><td class="selectedO">'+selectedH+'</td><td class="zona">'+zona+'</td><td class="hoinDiu">'+hoinDiu+'</td><td class="hofiDiu">'+hofiDiu+'</td><td class="valueDiurno">'+valueDiurno+'</td><td class="hoinNoc">'+hoinNoc+'</td><td class="hofiNoc">'+hofiNoc+'</td><td class="valueNocturno">'+valueNocturno+'</td><td> <a href="#"class="btn btn-danger deleteRecesama"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista-receSama").append(item);
    arrRecesama();
    //alert(codeHotel);
}

function addBloqdeta(code,liquidac,id,name,lastName,dateN){
  var item = '<tr><td class="code">'+code+'</td><td class="liquidac">'+liquidac+'</td> <td class="id">'+id+'</td> <td class="name">'+name+'</td><td class="lastName">'+lastName+'</td><td class="dateN">'+dateN+'</td><td> <a href="#"class="btn btn-danger deleteBloqdeta"><i class="fa fa-trash-alt" aria-hidden="true"></i></a> </td></tr>';
    $("#lista-bloqdeta").append(item);
    arrBloqdeta();
    //alert(codeHotel);
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
         alert( "Error al guardar el detalle de la liquidacion: " + jqXHR.responseText);
      }
  });
     

}

//CONSULTAR LIQUIDACION POR CODIGO
function showLiquidac(code){
  //alert(id);
  var dataString = 'txbCodeLiquidac='+ code +'&ShowLiquidac=1';
      $.ajax({
        type: "POST",
        url: "/MundoApp/Controllers/ajaxController.php?controller=liquidac&action=show",
        data: dataString,
        dataType : 'json',
        
          success: function(response){ 
          var date=response.date;
           var agency=response.agency;
           var seller=response.seller;
           var value=response.value;
            //alert(response.aer);
            $("#date").val(date);
            $("#agency").val(agency);
            $("#seller").val(seller);
            $("#value").val(priceFormat(value));
          
            
                                        
          },
          /* error: function(jqXHR, textStatus, error){
            alert( "Error al actualizar los datos: " + jqXHR.responseText);
          } */
      });
}

//CONSULTAR SUMA PAGO POR CODIGO LIQUIDACION
function showPay(code){
  //alert(id);
  var dataString = 'txbCodeLiquidac='+ code +'&showPay=1';
      $.ajax({
        type: "POST",
        url: "/MundoApp/Controllers/ajaxController.php?controller=payments&action=showPayTotal",
        data: dataString,
        dataType : 'json',
        
          success: function(response){ 
           var value=Number(response);
            //alert(response.aer);

            $("#saldo").val(priceFormat(value)); 

            if(value==0){
              $('#vaucher').removeClass("disable");
            }
          },
          /* error: function(jqXHR, textStatus, error){
            alert( "Error al actualizar los datos: " + jqXHR.responseText);
          } */
      });
}

//CONSULTAR vaucher POR CODIGO LIQUIDACION
function showVaucher(code){
  //alert(code);
  var dataString = 'txbCodeLiquidac='+ code +'&showVaucher=1';
  //alert(dataString);
      $.ajax({
        type: "POST",
        url: "/MundoApp/Controllers/ajaxController.php?controller=vaucher&action=show",
        data: dataString,
        dataType : 'json',
        
          success: function(response){ 
           
          },
          /* error: function(jqXHR, textStatus, error){
            alert( "Error al actualizar los datos: " + jqXHR.responseText);
          }  */
      });
}


