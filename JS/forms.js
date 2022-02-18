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

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    insertAgency(code,name,status);
      
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

    var status = $("select#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    updateAgency(code,name,status);
      
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

    var status = $("input#status").val();
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

    var status = $("input#status").val();
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

    var status = $("input#status").val();
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

    var status = $("input#status").val();
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
 
     var status = $("input#status").val();
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

    var status = $("input#status").val();
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

    var status = $("input#status").val();
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
//*** FIN INCLUSIO ***


//********************Query Users*************************** */
$(document).ready(function () {
  $("#idUser").keyup(function () {
      var value = $(this).val();
      var numCharacter= value.length;

      if(numCharacter>6){
        showUsers(value);
      }
      
  });
});
//********************Fin Query Users*************************** */

//********************Query flight*************************** */
function ShowSelectedFlight(){
/* Para obtener el valor */
var num = document.getElementById("codFlight").value;
//alert(num);
showFlight(num);
}
//**************FIN Query flight***************************** */

//**** CANCEL SEND FORMS */
function cancel(c,a){
    window.location='?controller='+c+'&action='+a;
  }
//**** END CANCEL SEND FORMS */