//validate Inputs forms

//*** COMPANY ***
//***Fomr insert company***
$(function() {
    $('.error').hide();
    $("#btnSaveCompany").click(function() {
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

      insertCompany();
        
    });
  });
//********************** */

//***Fomr update company***
$(function() {
    $('.error').hide();
    $("#btnUpdateCompany").click(function() {
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

      updateCompany();
        
    });
  });
//********************** */
//*** FIN COMPANY ***


//*** ESTARESE ***
//***Fomr insert estarese***
$(function() {
  $('.error').hide();
  $("#btnSaveEstarese").click(function() {
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

    insertEstarese();
      
  });
});
//********************** */

//***Fomr update estarese***
$(function() {
  $('.error').hide();
  $("#btnUpdateEstarese").click(function() {
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

    updateEstarese();
      
  });
});
//********************** */
//*** FIN COMPANY ***

//**** CANCEL SEND FORMS */
function cancel(c,a){
    window.location='?controller='+c+'&action='+a;
  }
//**** END CANCEL SEND FORMS */