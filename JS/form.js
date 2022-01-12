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
        url: "?controller=company&action=insert",
        data: dataString,
        dataType : 'json',
        
        success: function(data) {
          //validate response from server
          //console.log(response);
          console.log(data);
          var jsonData = JSON.parse(response);
          alert(jsonData.status);
          if(response.status == 'ok'){
              alert(response.result);
          }
          else{
            alert(response.result);
          }
          
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