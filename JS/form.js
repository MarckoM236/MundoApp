//search company

//Send post form company
function insertCompany() {
      var code = $("input#code").val();
      var name = $("input#name").val();
      var nit = $("input#nit").val();
      var rent = $("input#rent").val();
      var address = $("input#address").val();
      var pbx = $("input#pbx").val();
      var mobile = $("input#mobile").val();
      //Validate data submission
      var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbNit=' + nit + '&txbRent=' + rent + '&txbAddress=' + address + '&txbPBX=' + pbx + '&txbMobile=' + mobile +'&saveCompany=';
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

function valiFieldsCompany(){
  var code = $("input#code").val();
  var name = $("input#name").val();
  var nit = $("input#nit").val();

  //Validate data submission
  var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbNit=' + nit  + '&showCompany';
  $.ajax({
    type: "POST",
    url: "?controller=company&action=show",
    data: dataString,
    dataType : 'json',
    
    success: function(response) {
      //validate response from server
      console.log(response);
      
      
    }
  });
}

//opcion cancelar
function cancel(){
  window.location='?controller=company&action=home';
}