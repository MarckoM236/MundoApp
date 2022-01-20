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

    var status = $("input#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    insertAgency();
      
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

    var status = $("input#status").val();
    if (status == "") {
      $("label#status_error").show();
      $("input#status").focus();
      return false;
    }

    updateAgency();
      
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
//*** FIN PLAN ***

//**** CANCEL SEND FORMS */
function cancel(c,a){
    window.location='?controller='+c+'&action='+a;
  }
//**** END CANCEL SEND FORMS */