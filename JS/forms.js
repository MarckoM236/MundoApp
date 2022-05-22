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
//*** FIN ESTARESE ***


//*** AGENCY ***
//***Fomr insert agency***
$(function() {
  $('.error').hide();
  $("#btnSaveAgency").click(function() {
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
    var address = $("input#address").val();
    if (name == "") {
      $("label#address_error").show();
      $("input#address").focus();
      return false;
    }
    var phone = $("input#phone").val();
    if (name == "") {
      $("label#phone_error").show();
      $("input#phone").focus();
      return false;
    }
    var mobile = $("input#mobile").val();
    if (name == "") {
      $("label#mobile_error").show();
      $("input#mobile").focus();
      return false;
    }
    var email = $("input#email").val();
    if (name == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    insertAgency(code,name,address,phone,mobile,email,status);
      
  });
});
//********************** */

//***Fomr update agency***
$(function() {
  $('.error').hide();
  $("#btnUpdateAgency").click(function() {
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

    var address = $("input#address").val();
    if (name == "") {
      $("label#address_error").show();
      $("input#address").focus();
      return false;
    }
    var phone = $("input#phone").val();
    if (name == "") {
      $("label#phone_error").show();
      $("input#phone").focus();
      return false;
    }
    var mobile = $("input#mobile").val();
    if (name == "") {
      $("label#mobile_error").show();
      $("input#mobile").focus();
      return false;
    }
    var email = $("input#email").val();
    if (name == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    updateAgency(code,name,address,phone,mobile,email,status);
      
  });
});
//********************** */
//*** FIN AGENCY ***


//*** ADVISER ***
//***Fomr insert adviser***
$(function() {
  $('.error').hide();
  $("#btnSaveAdviser").click(function() {
      //validate fields
      $('.error').hide();
      var id = $("input#id").val();
    if (id == "") {
      $("label#id_error").show();
      $("input#id").focus();
      return false;
    }

    var name = $("input#name").val();
    if (name == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }

    var lastName = $("input#lastName").val();
    if (lastName == "") {
      $("label#lastName_error").show();
      $("input#lastName").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    insertAdviser();
      
  });
});
//********************** */

//***Fomr update adviser***
$(function() {
  $('.error').hide();
  $("#btnUpdateAdviser").click(function() {
       //validate fields
       $('.error').hide();
       var id = $("input#id").val();
     if (id == "") {
       $("label#id_error").show();
       $("input#id").focus();
       return false;
     }
 
     var name = $("input#name").val();
     if (name == "") {
       $("label#name_error").show();
       $("input#name").focus();
       return false;
     }
 
     var lastName = $("input#lastName").val();
     if (lastName == "") {
       $("label#lastName_error").show();
       $("input#lastName").focus();
       return false;
     }
 
     var status = $("input#status").val();
     if (status == "") {
       $("label#status_error").show();
       $("input#status").focus();
       return false;
     }

    updateAdviser();
      
  });
});
//********************** */
//*** FIN ADVISER ***


//*** USER ***
//***Fomr insert user***
$(function() {
  $('.error').hide();
  $("#btnSaveUser").click(function() {
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

    var pass = $("input#pass").val();
    if (pass == "") {
      $("label#pass_error").show();
      $("input#pass").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    insertUser();
      
  });
});
//********************** */

//***Fomr update user***
$(function() {
  $('.error').hide();
  $("#btnUpdateUser").click(function() {
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

    var pass = $("input#pass").val();
    if (pass == "") {
      $("label#pass_error").show();
      $("input#pass").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    updateUser();
      
  });
});
//********************** */
//*** FIN USER ***

//*** SELLER ***
//***Fomr insert seller***
$(function() {
  $('.error').hide();
  $("#btnSaveSeller").click(function() {
      //validate fields
      $('.error').hide();
      var id = $("input#id").val();
    if (id == "") {
      $("label#id_error").show();
      $("input#id").focus();
      return false;
    }

    var name = $("input#name").val();
    if (name == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }

    var lastName = $("input#lastName").val();
    if (lastName == "") {
      $("label#lastName_error").show();
      $("input#lastName").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    insertSeller();
      
  });
});
//********************** */

//***Fomr update seller***
$(function() {
  $('.error').hide();
  $("#btnUpdateSeller").click(function() {
       //validate fields
       $('.error').hide();
       var id = $("input#id").val();
     if (id == "") {
       $("label#id_error").show();
       $("input#id").focus();
       return false;
     }
 
     var name = $("input#name").val();
     if (name == "") {
       $("label#name_error").show();
       $("input#name").focus();
       return false;
     }
 
     var lastName = $("input#lastName").val();
     if (lastName == "") {
       $("label#lastName_error").show();
       $("input#lastName").focus();
       return false;
     }
 
     var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    updateSeller();
      
  });
});
//********************** */
//*** FIN SELLER ***

//*** TIPOLIQU ***
//***Fomr insert tipoliqu***
$(function() {
  $('.error').hide();
  $("#btnSaveTipoLiQu").click(function() {
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

    insertTipoLiQu();
      
  });
});
//********************** */

//***Fomr update tipoliqu***
$(function() {
  $('.error').hide();
  $("#btnUpdateTipoLiQu").click(function() {
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

    updateTipoLiQu();
      
  });
});
//********************** */
//*** FIN TIPOLIQU ***

//*** PLAN ***
//***Fomr insert plan***
$(function() {
  $('.error').hide();
  $("#btnSavePlan").click(function() {
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

    insertPlan();
      
  });
});
//********************** */

//***Fomr update plan***
$(function() {
  $('.error').hide();
  $("#btnUpdatePlan").click(function() {
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

    updatePlan();
      
  });
});
//********************** */
//*** FIN PLAN ***

//*** DESTINATION ***
//***Fomr insert destination***
$(function() {
  $('.error').hide();
  $("#btnSaveDestination").click(function() {
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

    insertDestination();
      
  });
});
//********************** */

//***Fomr update destination***
$(function() {
  $('.error').hide();
  $("#btnUpdateDestination").click(function() {
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

    updateDestination();
      
  });
});
//********************** */
//*** FIN DESTINATION ***

//*** HOTEL ***
//***Fomr insert hotel***
$(function() {
  $('.error').hide();
  $("#btnSaveHotel").click(function() {
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

    var address = $("input#address").val();
    if (address == "") {
      $("label#address_error").show();
      $("input#address").focus();
      return false;
    }

    var phone = $("input#phone").val();
    if (phone == "") {
      $("label#phone_error").show();
      $("input#phone").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    var email = $("input#email").val();
    if (email == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }

    var mobile = $("input#mobile").val();
    if (mobile == "") {
      $("label#mobile_error").show();
      $("input#mobile").focus();
      return false;
    }

    
    insertHotel();
      
  });
});
//********************** */

//***Fomr update hotel***
$(function() {
  $('.error').hide();
  $("#btnUpdateHotel").click(function() {
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

    var address = $("input#address").val();
    if (address == "") {
      $("label#address_error").show();
      $("input#address").focus();
      return false;
    }

    var phone = $("input#phone").val();
    if (phone == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    var email = $("input#email").val();
    if (email == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }

    var mobile = $("input#mobile").val();
    if (mobile == "") {
      $("label#mobile_error").show();
      $("input#mobile").focus();
      return false;
    }


    updateHotel();
      
  });
});
//********************** */
//*** FIN HOTEL ***

//*** TIPOALIM ***
//***Fomr insert tipoAlim***
$(function() {
  $('.error').hide();
  $("#btnSaveTipoAlim").click(function() {
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

    insertTipoAlim();
      
  });
});
//********************** */

//***Fomr update tipoAlim***
$(function() {
  $('.error').hide();
  $("#btnUpdatetipoAlim").click(function() {
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

    updateTipoAlim();
      
  });
});
//********************** */
//*** FIN TIPOALIM ***

//*** ACOMODAC ***
//***Fomr insert acomodac***
$(function() {
  $('.error').hide();
  $("#btnSaveAcomodac").click(function() {
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

    insertAcomodac();
      
  });
});
//********************** */

//***Fomr update acomodac***
$(function() {
  $('.error').hide();
  $("#btnUpdateAcomodac").click(function() {
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

    updateAcomodac();
      
  });
});
//********************** */
//*** FIN ACOMODAC ***


//*** CONCEPTO ***
//***Fomr insert concepto***
$(function() {
  $('.error').hide();
  $("#btnSaveConcepto").click(function() {
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

    insertConcepto();
      
  });
});
//********************** */

//***Fomr update acomodac***
$(function() {
  $('.error').hide();
  $("#btnUpdateConcepto").click(function() {
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

    updateConcepto();
      
  });
});
//********************** */
//*** FIN CONCEPTO ***

//*** AEROLINE ***
//***Fomr insert aeroline***
$(function() {
  $('.error').hide();
  $("#btnSaveAeroline").click(function() {
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

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    insertAeroline(code,name,status);
      
  });
});
//********************** */

//***Fomr update aeroline***
$(function() {
  $('.error').hide();
  $("#btnUpdateAeroline").click(function() {
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

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    updateAeroline(code,name,status);
      
  });
});
//********************** */
//*** FIN AEROLINE ***

//*** INCLUSIO ***
//***Fomr insert inclusio***
$(function() {
  $('.error').hide();
  $("#btnSaveInclusio").click(function() {
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

    insertInclusio(code,name);
      
  });
});
//********************** */

//***Fomr update inclusio***
$(function() {
  $('.error').hide();
  $("#btnUpdateInclusio").click(function() {
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

    updateInclusio(code,name);
      
  });
});
//********************** */
//*** FIN INCLUSIO ***


//*** SYSTEM ***
//***Fomr insert system***
$(function() {
  $('.error').hide();
  $("#btnSaveSystem").click(function() {
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

    var value = $("input#value").val();
    if (value == "") {
      $("label#value_error").show();
      $("input#value").focus();
      return false;
    }

    var fein = $("input#fein").val();
    if (fein == "") {
      $("label#fein_error").show();
      $("input#fein").focus();
      return false;
    }
    


    var fefi = $("input#fefi").val();
    if (fefi == "") {
      $("label#fefi_error").show();
      $("input#fefi").focus();
      return false;
    }
    insertSystem(code,name,value,fein,fefi);
      
  });
});
//********************** */

//***Fomr update system***
$(function() {
  $('.error').hide();
  $("#btnUpdateSystem").click(function() {
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

    var value = $("input#value").val();
    if (value == "") {
      $("label#value_error").show();
      $("input#value").focus();
      return false;
    }

    var fein = $("input#fein").val();
    if (fein == "") {
      $("label#fein_error").show();
      $("input#fein").focus();
      return false;
    }
    

    var fefi = $("input#fefi").val();
    if (fefi == "") {
      $("label#fefi_error").show();
      $("input#fefi").focus();
      return false;
    }

    updateSystem(code,name,value,fein,fefi);
      
  });
});
//********************** */
//*** FIN SYSTEM ***


//*** OPERATOR ***
//***Fomr insert operator***
$(function() {
  $('.error').hide();
  $("#btnSaveOperator").click(function() {
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

    var address = $("input#address").val();
    if (address == "") {
      $("label#address_error").show();
      $("input#address").focus();
      return false;
    }

    var phone = $("input#phone").val();
    if (phone == "") {
      $("label#phone_error").show();
      $("input#phone").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    var email = $("input#email").val();
    if (email == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }

    var mobile = $("input#mobile").val();
    if (mobile == "") {
      $("label#mobile_error").show();
      $("input#mobile").focus();
      return false;
    }

    
    insertOperator(code,name,address,phone,status,email,mobile);
      
  });
});
//********************** */

//***Fomr update operator***
$(function() {
  $('.error').hide();
  $("#btnUpdateOperator").click(function() {
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

    var address = $("input#address").val();
    if (address == "") {
      $("label#address_error").show();
      $("input#address").focus();
      return false;
    }

    var phone = $("input#phone").val();
    if (phone == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    var email = $("input#email").val();
    if (email == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }

    var mobile = $("input#mobile").val();
    if (mobile == "") {
      $("label#mobile_error").show();
      $("input#mobile").focus();
      return false;
    }


    updateOperator(code,name,address,phone,status,email,mobile);
      
  });
});
//********************** */
//*** FIN OPERATOR ***

//*** BANK ***
//***Fomr insert bank***
$(function() {
  $('.error').hide();
  $("#btnSaveBank").click(function() {
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

    var tiAccount = $("select#tiAccount").val();
    if (tiAccount == "") {
      $("label#tiAccount_error").show();
      $("input#tiAccount").focus();
      return false;
    }

    var numAccount = $("input#numAccount").val();
    if (numAccount == "") {
      $("label#numAccount_error").show();
      $("input#numAccount").focus();
      return false;
    }


    insertBank(code,name,tiAccount,numAccount);
      
  });
});
//********************** */

//***Fomr update bank***
$(function() {
  $('.error').hide();
  $("#btnUpdateBank").click(function() {
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

    var tiAccount = $("select#tiAccount").val();
    if (tiAccount == "") {
      $("label#tiAccount_error").show();
      $("input#tiAccount").focus();
      return false;
    }

    var numAccount = $("input#numAccount").val();
    if (numAccount == "") {
      $("label#numAccount_error").show();
      $("input#numAccount").focus();
      return false;
    }

    updateBank(code,name,tiAccount,numAccount);
      
  });
});
//********************** */
//*** FIN BANK ***

//*** THIRD PARTY ***
//***Fomr insert thirdPary***
$(function() {
  $('.error').hide();
  $("#btnSaveThirdParty").click(function() {
      //validate fields
      $('.error').hide();
      var id = $("input#id").val();
    if (id == "") {
      $("label#id_error").show();
      $("input#id").focus();
      return false;
    }

    var name = $("input#name").val();
    if (name == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }

    var address = $("input#address").val();
    if (address == "") {
      $("label#address_error").show();
      $("input#address").focus();
      return false;
    }

    var phone = $("input#phone").val();
    if (phone == "") {
      $("label#phone_error").show();
      $("input#phone").focus();
      return false;
    }

    var email = $("input#email").val();
    if (email == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }

    insertThirdParty(id,name,address,phone,email);
      
  });
});
//********************** */

//***Fomr update third Pary***
$(function() {
  $('.error').hide();
  $("#btnUpdateThirdParty").click(function() {
      //validate fields
      $('.error').hide();
      var id = $("input#id").val();
    if (id == "") {
      $("label#id_error").show();
      $("input#id").focus();
      return false;
    }

    var name = $("input#name").val();
    if (name == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }

    var address = $("input#address").val();
    if (address == "") {
      $("label#address_error").show();
      $("input#address").focus();
      return false;
    }

    var phone = $("input#phone").val();
    if (phone == "") {
      $("label#phone_error").show();
      $("input#phone").focus();
      return false;
    }

    var email = $("input#email").val();
    if (email == "") {
      $("label#email_error").show();
      $("input#email").focus();
      return false;
    }

    updateThirdParty(id,name,address,phone,email);
      
  });
});
//********************** */
//*** FIN THIRD PARY ***

//*** FLIGHT ***
//***Fomr insert flight***
$(function() {
  $('.error').hide();
  $("#btnSaveFlight").click(function() {
      //validate fields
      $('.error').hide();
    var codAeroline = $("select#codAeroline").val();
    if (codAeroline == "") {
      $("label#codAeroline_error").show();
      $("input#CodAeroline").focus();
      return false;
    }

    var num = $("input#num").val();
    if (num == "") {
      $("label#num_error").show();
      $("input#num").focus();
      return false;
    }

    var route = $("input#route").val();
    if (route == "") {
      $("label#route_error").show();
      $("input#route").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    insertFlight(codAeroline,num,route,status);
      
  });
});
//********************** */

//***Fomr update flight***
$(function() {
  $('.error').hide();
  $("#btnUpdateFlight").click(function() {
      //validate fields
      $('.error').hide();
    var codAeroline = $("select#codAeroline").val();
    if (codAeroline == "") {
      $("label#codAeroline_error").show();
      $("input#CodAeroline").focus();
      return false;
    }

    var num = $("input#num").val();
    if (num == "") {
      $("label#num_error").show();
      $("input#num").focus();
      return false;
    }

    var route = $("input#route").val();
    if (route == "") {
      $("label#route_error").show();
      $("input#route").focus();
      return false;
    }

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    updateFlight(codAeroline,num,route,status);
      
  });
});
//********************** */
//*** FIN FLIGHT ***

//*** TRAVELER ***
//***Fomr insert traveler***
$(function() {
  $('.error').hide();
  $("#btnSaveTraveler").click(function() {
      //validate fields
      $('.error').hide();
     var id = $("input#id").val();
    if (id == "") {
      $("label#id_error").show();
      $("input#id").focus();
      return false;
    }

    var name = $("input#name").val();
    if (name == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }

    var lastName = $("input#lastName").val();
    if (lastName == "") {
      $("label#lastName_error").show();
      $("input#lastName").focus();
      return false;
    }

    var birthDate = $("input#birthDate").val();
    if (birthDate == "") {
      $("label#birthDate_error").show();
      $("input#birthDate").focus();
      return false;
    }
    
    insertTraveler(id,name,lastName,birthDate);
      
  });
});
//********************** */

//***Fomr update system***
$(function() {
  $('.error').hide();
  $("#btnUpdateTraveler").click(function() {
      //validate fields
      $('.error').hide();
      var id = $("input#id").val();
    if (id == "") {
      $("label#id_error").show();
      $("input#id").focus();
      return false;
    }

    var name = $("input#name").val();
    if (name == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }

    var lastName = $("input#lastName").val();
    if (lastName == "") {
      $("label#lastName_error").show();
      $("input#lastName").focus();
      return false;
    }

    var birthDate = $("input#birthDate").val();
    if (birthDate == "") {
      $("label#birthDate_error").show();
      $("input#birthDate").focus();
      return false;
    }

    updateTraveler(id,name,lastName,birthDate);
      
  });
});
//********************** */
//*** FIN TRAVELER ***

//*** LIQUIDAC ***
//***Fomr insert Liquidac***
$(function() {
  $('.error').hide();
  $("#btnSaveLiquidation").click(function() {
      //validate fields
      $('.error').hide();

    var tipoLiqu = "";
    if( $('#liquN').prop('checked') ) {
      tipoLiqu=1;
    }
      
    else if( $('#liquI').prop('checked') ) {
      tipoLiqu=2;
    }
    else{
      alert("Selecccione el tipo de liquidacion");
    }
    
    
    var fechaSis = $("input#fechaSis").val();
    if (fechaSis == "") {
      $("label#fechaSis_error").show();
      $("input#fechaSis").focus();
      return false;
    }

    var codLiqu = $("input#codLiqu").val();
    if (codLiqu == "") {
      $("label#codLiqu_error").show();
      $("input#codLiqu").focus();
      return false;
    }

    var codAgency = $("select#codAgency").val();
    if (codAgency == "") {
      $("label#codAgency_error").show();
      $("select#codAgency").focus();
      return false;
    }
    var codSeller = $("select#codSeller").val();
    if (codSeller == "") {
      $("label#codSeller_error").show();
      $("select#codSeller").focus();
      return false;
    }
    var codAdviser = $("select#codAviser").val();
    if (codAdviser == "") {
      $("label#codAdviser_error").show();
      $("select#codAviser").focus();
      return false;
    }
    var codEstarese = $("select#codEstarse").val();
    if (codEstarese == "") {
      $("label#codEstarese_error").show();
      $("select#codEstarse").focus();
      return false;
    }

    var fecViDeLiqu = $("input#fecViDeLiqu").val();
    if (fecViDeLiqu == "") {
      $("label#fecViDeLiqu_error").show();
      $("input#fecViDeLiqu").focus();
      return false;
    }
    var codDestination = $("select#codDestination").val();
    if (codDestination == "") {
      $("label#codDestination_error").show();
      $("select#codDestination").focus();
      return false;
    }
    var codHotel = $("select#codHotel").val();
    if (codHotel == "") {
      $("label#codHotel_error").show();
      $("select#codHotel").focus();
      return false;
    }
    var codHostal = $("select#codHostal").val();
    if (codHostal == "") {
      $("label#codHostal_error").show();
      $("select#codHostal").focus();
      return false;
    }
    var codAlim = $("select#codAlim").val();
    if (codAlim == "") {
      $("label#codAlim_error").show();
      $("select#codAlim").focus();
      return false;
    }
    var codPlan = $("select#codPlan").val();
    if (codPlan == "") {
      $("label#codPlan_error").show();
      $("select#codPlan").focus();
      return false;
    }
    var codAcomodac = $("select#codAcomodac").val();
    if (codAcomodac == "") {
      $("label#codAcomodac_error").show();
      $("select#codAcomodac").focus();
      return false;
    }
    
    //validar que exista el detalle de la liquidacion
    var flights = arrFlight();
    if (flights == "") {
      $("label#flights_error").show();
      $("select#codFlight").focus();
      return false;
    }

    var travelers = arrTraveler();
    if (travelers == "") {
      $("label#travelers_error").show();
      $("input#idTraveler").focus();
      return false;
    }

    var includes = arrIncludes();
    if (includes == "") {
      $("label#includes_error").show();
      $("select#codConcepto").focus();
      return false;
    }

    var Noincludes = arrNoIncludes();
    if (Noincludes == "") {
      $("label#noIncludes_error").show();
      $("select#codConceptoN").focus();
      return false;
    }

    var services = arrConcept();
    if (services == "") {
      $("label#services_error").show();
      $("select#codConc").focus();
      return false;
    }
    //******************************************* */
    var valTotTraveler = $("input#valTotTraveler").val();
    if (valTotTraveler == "") {
      $("label#valTotTraveler_error").show();
      $("input#valTotTraveler").focus();
      return false;
    }
    var valImp = $("input#valTotImp").val();
    if (valImp == "") {
      $("label#valTotImp_error").show();
      $("input#valTotImp").focus();
      return false;
    }
    var descuento=10;
    //insertTraveler(id,name,lastName,birthDate); 
    var valIvaLiqu = $("input#valIvaLiqu").val();
    var iva=(valIvaLiqu.replace(/[$.]/g,'')).toString();
    if (valIvaLiqu == "") {
      $("label#valIvaLiqu_error").show();
      $("input#valIvaLiqu").focus();
      return false;
    }
    var valIcaLiqu = $("input#valIcaLiqu").val();
    var ica=(valIcaLiqu.replace(/[$.]/g,'')).toString();
    if (valIcaLiqu == "") {
      $("label#valIcaLiqu_error").show();
      $("input#valIcaLiqu").focus();
      return false;
    }
    var valRtfLiqu = $("input#valRtfLiqu").val();
    var rtf=(valRtfLiqu.replace(/[$.]/g,'')).toString();
    if (valRtfLiqu == "") {
      $("label#valRtfLiqu_error").show();
      $("input#valRtfLiqu").focus();
      return false;
    }
    var valTotEmp = $("input#valTotEmp").val();
    if (valTotEmp == "") {
      $("label#valTotEmp_error").show();
      $("input#valTotEmp").focus();
      return false;
    }
    var pl50Liqu = $("input#pl50Liqu").val();
    if (pl50Liqu == "") {
      $("label#pl50Liqu_error").show();
      $("input#pl50Liqu").focus();
      return false;
    }
    var pl100Liqu = $("input#pl100Liqu").val();
    if (pl100Liqu == "") {
      $("label#pl100Liqu_error").show();
      $("input#pl100Liqu").focus();
      return false;
    }

    var usuario=1;

    var numRes = $("input#numRes").val();
    if (numRes == "") {
      $("label#numRes_error").show();
      $("input#NumRes").focus();
      return false;
    }
    
    insertLiquidac(tipoLiqu,fechaSis,codLiqu,codAgency,codSeller,codAdviser,codDestination,codHotel,codAlim,codPlan,codAcomodac,valTotTraveler,descuento,iva,ica,rtf,valTotEmp,pl50Liqu,pl100Liqu,usuario,numRes);
      
  });
});
//************************************************ */
//Validar fecha de viaje que no sea anterior a la actual
fecViDeLiqu.oninput = function() {
  var fecViDeLiqu = $("input#fecViDeLiqu").val()
  //alert(fecViDeLiqu);
    var hoy = new Date();
    var m=hoy.getMonth()+1;
    if(m.length=1){
      var mes='0'+m;
    }
    var fecFormat=hoy.getFullYear()+'-'+mes+'-'+hoy.getDate();
    var fechaFormulario = new Date(fecViDeLiqu);
    // Comparamos solo las fechas => no las horas!!
    hoy.setHours(0,0,0,0);
    fechaFormulario.setHours(0,0,0,0); // Lo iniciamos a 00:00 horas
    if (fechaFormulario < hoy) {
      $("label#fecViDeLiquMen_error").show();
      $("input#fecViDeLiqu").val(fecFormat);
      $("input#fecViDeLiqu").focus();
      return false;
      
    }
    else{
      $("label#fecViDeLiquMen_error").hide();
    }
};
//********************** */
//Validar fecha de vuelo que no sea anterior a la actual
dateFli.oninput = function() {
  var dateFli = $("input#dateFli").val()
  //alert(fecViDeLiqu);
    var hoy = new Date();
    var m=hoy.getMonth()+1;
    if(m.length=1){
      var mes='0'+m;
    }
    var fecFormat=hoy.getFullYear()+'-'+mes+'-'+hoy.getDate();
    var fechaFormulario = new Date(dateFli);
    // Comparamos solo las fechas => no las horas!!
    hoy.setHours(0,0,0,0);
    fechaFormulario.setHours(0,0,0,0); // Lo iniciamos a 00:00 horas
    if (fechaFormulario < hoy) {
      $("label#dateFliMen_error").show();
      $("input#dateFli").val(fecFormat);
      $("input#dateFli").focus();
      return false;
      
    }
    else{
      $("label#dateFliMen_error").hide();
    }
};
//************************************************************************** */
//Validar fechas de plazo 50 y 100% que no sea anterior a la actual
pl50Liqu.oninput = function() {
  var pl50 = $("input#pl50Liqu").val()
  //alert(fecViDeLiqu);
    var hoy = new Date();
    var m=hoy.getMonth()+1;
    if(m.length=1){
      var mes='0'+m;
    }
    var fecFormat=hoy.getFullYear()+'-'+mes+'-'+hoy.getDate();
    var fechaFormulario = new Date(pl50);
    // Comparamos solo las fechas => no las horas!!
    hoy.setHours(0,0,0,0);
    fechaFormulario.setHours(0,0,0,0); // Lo iniciamos a 00:00 horas
    if (fechaFormulario < hoy) {
      $("label#pl50LiquMen_error").show();
      $("input#pl50Liqu").val(fecFormat);
      $("input#pl50Liqu").focus();
      return false;
      
    }
    else{
      $("label#pl50LiquMen_error").hide();
    }
};

pl100Liqu.oninput = function() {
  var pl100 = $("input#pl100Liqu").val()
  //alert(fecViDeLiqu);
    var hoy = new Date();
    var m=hoy.getMonth()+1;
    if(m.length=1){
      var mes='0'+m;
    }
    var fecFormat=hoy.getFullYear()+'-'+mes+'-'+hoy.getDate();
    var fechaFormulario = new Date(pl100);
    // Comparamos solo las fechas => no las horas!!
    hoy.setHours(0,0,0,0);
    fechaFormulario.setHours(0,0,0,0); // Lo iniciamos a 00:00 horas
    if (fechaFormulario < hoy) {
      $("label#pl100LiquMen_error").show();
      $("input#pl100Liqu").val(fecFormat);
      $("input#pl100Liqu").focus();
      return false;
      
    }
    else{
      $("label#pl100LiquMen_error").hide();
    }
};
//***************************************************************************** */

//***Fomr update Liquidac***
$(function() {
  $('.error').hide();
  $("#btnUpdateTraveler").click(function() {
      //validate fields
      $('.error').hide();
      var id = $("input#id").val();
    if (id == "") {
      $("label#id_error").show();
      $("input#id").focus();
      return false;
    }

    var name = $("input#name").val();
    if (name == "") {
      $("label#name_error").show();
      $("input#name").focus();
      return false;
    }

    var lastName = $("input#lastName").val();
    if (lastName == "") {
      $("label#lastName_error").show();
      $("input#lastName").focus();
      return false;
    }

    var birthDate = $("input#birthDate").val();
    if (birthDate == "") {
      $("label#birthDate_error").show();
      $("input#birthDate").focus();
      return false;
    }

    updateTraveler(id,name,lastName,birthDate);
      
  });
});
//********************** */
//*** FIN LIQUIDAC ***

//********************Query Travelers*************************** */
//********************CONSULTAR VIAJEROS DINAMICAMENTE SEGUN NUMERO DE IDENTIFICACION *****************/
$(document).ready(function () {
  $("#idTraveler").keyup(function () {
      var value = $(this).val();
      var numCharacter= value.length;

      if(numCharacter>6){
        showTraveler(value);
      }
      
  });
});

//********************SELECCIONAR ITEM DE VIAJEROS Y AÑADIR A TABLA DINAMICA *****************/
function addSelectTrav(){
  /* Para obtener el valor */
  var id = $("input#idTraveler").val();
  var name = $("input#nameTraveler").val();
  var lastName= $("input#lastNameTraveler").val();
  var fecNac= $("input#fecNacTraveler").val();
  addTraveler(id,name,lastName,fecNac);
}  
  //**************FIN Query Traveler***************************** */

//********************Query flight*************************** */
//********************CONSULTAR VUELOS DISPONIBLES, SEGUN SELECCION EN EL FORMULARIO ATRAVEZ DE EVENTO ONCHANGE *****************/
function ShowSelectedFlight(){
/* Para obtener el valor */
var num = document.getElementById("codFlight").value;
//alert(num);
showFlight(num);
}

//********************SELECCIONAR ITEMS DE VUELOS Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectFlight(){
  var codF = $("select#codFlight").val();
  var codAer= $("input#codAer").val();
  var aeroline = $("input#aeroFli").val();
  var route= $("input#routeFli").val();
  var date= $("input#dateFli").val();
  var exit= $("input#exitFli").val();
  var arrival= $("input#arrivalFli").val();
  var comment= $("textarea#commentFli").val();
  if (codF == "") {
    $("label#codFlight_error").show();
    $("select#codFlight").focus();
    return false;}
  else if(codAer==""){
    $("label#codAer_error").show();
    $("input#codAer").focus();
    return false;
  }    
  else if(aeroline==""){
    $("label#aeroFli_error").show();
    $("input#aeroFli").focus();
    return false;
  }  
  else if(route==""){
    $("label#routeFli_error").show();
    $("input#routeFli").focus();
    return false;
  }  
  else if(date==""){
    $("label#dateFli_error").show();
    $("input#dateFli").focus();
    return false;
  }  
  else if(exit==""){
    $("label#exitFli_error").show();
    $("input#exitFli").focus();
    return false;
  }  
  else if(arrival==""){
    $("label#arrivalFli_error").show();
    $("input#arrivalFli").focus();
    return false;
  }  
  else if(comment==""){
    $("label#commentFli_error").show();
    $("textarea#commentFli").focus();
    return false;
  }  
  else{
     /* Para obtener el valor */
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("codFlight_error").style.display="none";
    document.getElementById("aeroFli_error").style.display="none";
    document.getElementById("aeroFli_error").style.display="none";
    document.getElementById("routeFli_error").style.display="none";
    document.getElementById("dateFli_error").style.display="none";
    document.getElementById("exitFli_error").style.display="none";
    document.getElementById("arrivalFli_error").style.display="none";
    document.getElementById("commentFli_error").style.display="none";
    addFlight(codF,codAer,aeroline,route,date,exit,arrival,comment);
  }
 
}
//**************FIN Query flight***************************** */

//********************Operations concepts*************************** */
//********************GENERAR TOTAL DE CADA CONCEPTO DINAMICAMENTE *****************/
$(function() {
  $("#preConc").keyup(function () {
    var cantidad=$("input#cantConc").val();
    var precio = $(this).val();
    var total= cantidad * precio;
    $("#totConc").val(total);
    
  });
});

//********************SELECCIONAR ITEM DE CONCEPTOS Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS*****************/
function addSelectConcept(){
  var codC = $("select#codConc").val();
  var cantidad = $("input#cantConc").val();
  var precio= $("input#preConc").val();
    if (codC == "") {
      $("label#codConc_error").show();
      $("select#codConc").focus();
      return false;}
    else if(cantidad==""){
      $("label#cantConc_error").show();
      $("input#cantConc").focus();
      return false;
    }  
    else if(precio==""){
      $("label#preConc_error").show();
      $("input#preConc").focus();
      return false;
    }  
    else{
      /* Para obtener el valor */
      //var cod = document.getElementById("codConc").value;
      var name = document.getElementById("codConc");
      var selected = name.options[name.selectedIndex].text;
      var total= $("input#totConc").val();
      document.getElementById("codConc_error").style.display="none";
      document.getElementById("cantConc_error").style.display="none";
      document.getElementById("preConc_error").style.display="none";
      addConcept(codC,selected,cantidad,precio,total);
    }
  
}  
//********************End operations concepts*************************** */

//********************Query Include*************************** */
//********************SELECCIONAR ITEM DE INCLUSIONES Y AÑADIR A TABLA DINAMICA *****************/
function addSelectedInc(){
  var codI = $("select#codConcepto").val();
    if (codI == "") {
      $("label#codConcepto_error").show();
      $("select#codConcepto").focus();
      return false;}
      else{
        /* Para obtener el valor */
        //var cod = document.getElementById("codConcepto").value;
        var name = document.getElementById("codConcepto");
        var selected = name.options[name.selectedIndex].text;
        document.getElementById("codConcepto_error").style.display="none";
        addInc(codI,selected);
      }
  
  }
  //**************FIN Query include***************************** */

  //********************Query Not Include*************************** */
  //********************SELECCIONAR ITEM DE NO INCLUSIONES Y AÑADIR A TABLA DINAMICA *****************/
function addSelectedNotInc(){
  //var cod = document.getElementById("codConceptoN").value;
  var codNI = $("select#codConceptoN").val();
    if (codNI == "") {
      $("label#codConceptoN_error").show();
      $("select#codConceptoN").focus();
      return false;}
      else{
        var name = document.getElementById("codConceptoN");
        var selected = name.options[name.selectedIndex].text;
        document.getElementById("codConceptoN_error").style.display="none";
        //alert(cod+" "+selected);
        addNotInc(codNI,selected);
      }
  
  }
  //**************FIN Query Not include***************************** */

  //****************************************** */
  

//**** CANCEL SEND FORMS */
function cancel(c,a){
    window.location='?controller='+c+'&action='+a;
  }
//**** END CANCEL SEND FORMS */

//***********VALIDATIONS CHEKBOX************* */
//************VALIDAR QUE SOLO SE PUEDA SELECCIONAR UN CHEK DEL TIPO LIQUIDACION */
function uncheck(){
  var checkbox1 = document.getElementById("liquN");
  var checkbox2 = document.getElementById("liquI"); 
  checkbox1.onclick = function(){ 
    if(checkbox1.checked != false){ 
      checkbox2.checked =null; 
      }
    } 
  checkbox2.onclick = function(){ 
    if(checkbox2.checked != false){ 
      checkbox1.checked=null;
      }
    } 
}
//***********END VALIDATION CHEKBOX*********** */

//*************************DELETE ITEMS OF LIQUIDATIONS DETAILS**************************** */
//******** remove rows from pivot table containing items (inclusio) */
$(document).on('click', '.deleteInclusio', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
});

//****************************************************************************** */
//********************GENERAR TOTAL DE CADA valor DINAMICAMENTE *****************/
$(function() {
  $("#valTotImp").keyup(function () {
    var totTraveler=$("input#valTotTraveler").val();
    var totImpuestos = $(this).val();
    var subTotal= totTraveler - totImpuestos;
    var sub=formatter.format(subTotal);
    $("#subTotLiqu").val(sub);
      
  });
});
function valImp(sub,imp){
  var total=(sub*imp)/100;
  return total;
}
//*****************comision ***********************/
$(function() {
  $("#subTotLiqu").keyup(function () {
    var subt = $(this).val();
    var subtotal=subt.replace(/[$.]/g,'');
    if(subtotal>0){
      var porcComision=$("input#comision").val();
      var porcIva=$("input#iva").val();
      var porcRtf=$("input#rtf").val();
      var porcRtIca=$("input#rtica").val();
      var valRtIca=parseFloat(porcRtIca.replace(/,/g, '.'));
      

    $("#valComiLiqu").val(formatter.format(Math.round(valImp(subtotal,porcComision))));
    var com=$("input#valComiLiqu").val();
    var comision=com.replace(/[$.]/g,'');
    var totComision= (parseInt(comision) + parseInt(valImp(subtotal,porcIva)))-parseInt(valImp(subtotal,porcRtf))-valRtIca;
    $("#valIvaLiqu").val(Math.round(valImp(comision,porcIva)));
    $("#valRtfLiqu").val(Math.round(valImp(comision,porcRtf)));
    $("#valIcaLiqu").val(Math.round(valImp(comision,valRtIca)));
    $("#valTotLiqu").val(formatter.format(Math.round(totComision)));
    }
      
  });
});

//***********************************iva********************************* */

//****************************************************************************** */

//******** remove rows from pivot table containing items (No inclusio) */
$(document).on('click', '.deleteNoInclusio', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
});
//****************************************************************************** */

//******** remove rows from pivot table containing items (concept) */
$(document).on('click', '.deleteConc', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
});
//****************************************************************************** */

//******** remove rows from pivot table containing items (traveler) */
$(document).on('click', '.deleteTraveler', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
});
//****************************************************************************** */

//******** remove rows from pivot table containing items (Flight) */
$(document).on('click', '.deleteFlight', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
});
//****************************************************************************** */
//************************* FIN DELETE ITEMS OF LIQUIDATIONS DETAILS**************************** */

//***************************AÑADIR ELEMENTOS DEL DETALLE EN ARRAYS PARA ENVIO AL SRVIDOR******************** */
//*************** Añadir elementos de la tabla dinamica inclusiones a un array */
function arrIncludes(){
let includes = [];
document.querySelectorAll('.table-include tbody tr').forEach(function(e){
  let fila = {
    codI: e.querySelector('.codI').innerText,
    nameI: e.querySelector('.nameI').innerText
  };
  includes.push(fila);
});
//console.log(includes);
return includes;
}
//**************************************************************************** */

//*************** Añadir elementos de la tabla dinamica No inclusiones a un array */
function arrNoIncludes(){
  let NoIncludes = [];
  document.querySelectorAll('.table-NoInclude tbody tr').forEach(function(e){
    let fila = {
      codNI: e.querySelector('.codNI').innerText,
      nameNI: e.querySelector('.nameNI').innerText
    };
    NoIncludes.push(fila);
  });
  //console.log(NoIncludes);
  return NoIncludes;
  }
  //**************************************************************************** */

  //*************** Añadir elementos de la tabla dinamica viajero a un array */
function arrTraveler(){
  let traveler = [];
  document.querySelectorAll('.table-Traveler tbody tr').forEach(function(e){
    let fila = {
      idTr: e.querySelector('.idTr').innerText,
      nameTr: e.querySelector('.nameTr').innerText,
      lastNameTr: e.querySelector('.lastNameTr').innerText,
      birthDateTr: e.querySelector('.birthDateTr').innerText
    };
    traveler.push(fila);
  });
  //console.log(traveler);
  return traveler;
  }
  //**************************************************************************** */

//*************** Añadir elementos de la tabla dinamica concepto a un array */
function arrConcept(){
  let concept = [];
  document.querySelectorAll('.table-Concept tbody tr').forEach(function(e){
    let fila = {
      codConc: e.querySelector('.codConc').innerText,
      nameConc: e.querySelector('.nameConc').innerText,
      cantConc: e.querySelector('.cantConc').innerText,
      preConc: e.querySelector('.preConc').innerText,
      totConc: e.querySelector('.totConc').innerText
    };
    concept.push(fila);
  });
  console.log(concept);
  return concept;
  }
  //**************************************************************************** */

  //*************** Añadir elementos de la tabla dinamica viajero a un array */
function arrFlight(){
  let flight = [];
  document.querySelectorAll('.table-Flight tbody tr').forEach(function(e){
    let fila = {
      codFli: e.querySelector('.codFli').innerText,
      rouFli: e.querySelector('.rouFli').innerText,
      aerFli: e.querySelector('.codAer').innerText,
      dateFli: e.querySelector('.dateFli').innerText,
      exitFli: e.querySelector('.exitFli').innerText,
      arriFli: e.querySelector('.arriFli').innerText,
      commFli: e.querySelector('.commFli').innerText,
      travelFli: arrTraveler(),
      incFli: arrIncludes(),
      nincFli: arrNoIncludes(),
      concFli: arrConcept()
    };
    flight.push(fila);
  });
  //console.log(flight);
  return flight;
  }
  //**************************************************************************** */


//****************FORMATO DE MONEDA  */
const formatter = new Intl.NumberFormat('es-CO', {
  style: 'currency',
  currency: 'COP',
  minimumFractionDigits: 0
});
//****************************************** */