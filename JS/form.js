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
      var dataString = 'txbCode='+ code + '&txbName=' + name + '&txbNit=' + nit + '&txbRent=' + rent + '&txbAddress=' + address + '&txbPBX=' + pbx + '&txbMobile=' + mobile +'&saveCompany';
      $.ajax({
        type: "POST",
        url: "?controller=company&action=insert",
        data: dataString,
        dataType : 'json',
        
        success: function(response) {
          //validate response from server
          console.log(response);
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
     //validate fields
     $('.error').hide();
     var code = $("input#code").val();
   if (code == "") {
     $("label#code_error").show();
     $("input#code").focus();
     return false;
   }

   var name = $("input#name").val();
   if (name == "") {
     $("label#name_error").show();
     $("input#name").focus();
     return false;
   }

   var nit = $("input#nit").val();
   if (nit == "") {
     $("label#nit_error").show();
     $("input#nit").focus();
     return false;
   }

   var rent = $("input#rent").val();
   if (rent == "") {
     $("label#rent_error").show();
     $("input#rent").focus();
     return false;
   }

   var address = $("input#address").val();
   if (address == "") {
     $("label#address_error").show();
     $("input#address").focus();
     return false;
   }

   var pbx = $("input#pbx").val();
   if (pbx == "") {
     $("label#pbx_error").show();
     $("input#pbx").focus();
     return false;
   }

   var mobile = $("input#mobile").val();
   if (mobile == "") {
     $("label#mobile_error").show();
     $("input#mobile").focus();
     return false;
   }
}