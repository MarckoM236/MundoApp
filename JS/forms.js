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

//********************SELECCIONAR ITEMS DE DESTINOS Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectDest(){
  var fecDest = $("input#fecViDeLiqu").val();
  var codDest= $("select#codDestination").val();
  var codHotDest = $("select#codHotel").val();
  var codAlimDest= $("select#codAlim").val();
  var codPlanDest= $("select#codPlan").val();
  var codAcomDest= $("input#codAcomodac").val();
  
  if (fecDest == "") {
    $("label#fecViDeLiqu_error").show();
    $("input#fecViDeLiqu").focus();
    return false;
  }
  else if(codDest==""){
    $("label#codDestination_error").show();
    $("select#codDestination").focus();
    return false;
  }    
  else if(codHotDest==""){
    $("label#codHotel_error").show();
    $("select#codHotel").focus();
    return false;
  }  
  else if(codAlimDest==""){
    $("label#codAlim_error").show();
    $("select#codAlim").focus();
    return false;
  }  
  else if(codPlanDest==""){
    $("label#codPlan_error").show();
    $("select#codPlan").focus();
    return false;
  }  
  else if(codAcomDest==""){
    $("label#codAcomodac_error").show();
    $("input#codAcomodac").focus();
    return false;
  }  
  
  else{
    //value option
    var codD=document.getElementById("codDestination");
    var valDest=codD.options[codD.selectedIndex].text;

    var codH=document.getElementById("codHotel");
    var valHotel=codH.options[codH.selectedIndex].text;

    var codA=document.getElementById("codAlim");
    var valAlim=codA.options[codA.selectedIndex].text;

    var codP=document.getElementById("codPlan");
    var valPlan=codP.options[codP.selectedIndex].text;

     /* Para obtener el valor */
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("fecViDeLiqu_error").style.display="none";
    document.getElementById("codDestination_error").style.display="none";
    document.getElementById("codHotel_error").style.display="none";
    document.getElementById("codAlim_error").style.display="none";
    document.getElementById("codPlan_error").style.display="none";
    document.getElementById("codAcomodac_error").style.display="none";
    addDest(fecDest,codDest,valDest,codHotDest,valHotel,codAlimDest,valAlim,codPlanDest,valPlan,codAcomDest);
  }
 
}
//**************FIN Query dest***************************** */
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

//***Fomr update traveler***
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
    
    //var fechaSis="2022-06-04";
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
    var codAcomodac = $("input#codAcomodac").val();
    if (codAcomodac == "") {
      $("label#codAcomodac_error").show();
      $("input#codAcomodac").focus();
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
    var numRes=0;

    /* var numRes = $("input#numRes").val();
    if (numRes == "") {
      $("label#numRes_error").show();
      $("input#NumRes").focus();
      return false;
    } */
    
    insertLiquidac(tipoLiqu,fechaSis,codLiqu,codAgency,codSeller,codAdviser,codDestination,codHotel,codAlim,codPlan,codAcomodac,valTotTraveler,descuento,iva,ica,rtf,valTotEmp,pl50Liqu,pl100Liqu,usuario,numRes);
      
  });
});

//*** PAYMENTS ***
//***Fomr insert payments***
$(function() {
  $('.error').hide();
  $("#btnSavePay").click(function() {
      //validate fields
      var code = $("input#codePay").val();
    if (code == "") {
      $("label#codePay_error").show();
      $("input#codePay").focus();
      return false;
    }

      var liqu = $("input#iL").val();
    if (liqu == "") {
      $("label#iL_error").show();
      $("input#iL").focus();
      return false;
    }

      $('.error').hide();
    var bank = $("select#codeBank").val();
    if (bank == "") {
      $("label#codeBank_error").show();
      $("select#codeBank").focus();
      return false;
    }

    var typePay = $("select#typePay").val();
    if (typePay == "") {
      $("label#typePay_error").show();
      $("select#typePay").focus();
      return false;
    }

    var value = $("input#valuePay").val();
    if (value == "") {
      $("label#valuePay_error").show();
      $("input#valuePay").focus();
      return false;
    }
    var datePay = $("input#datePay").val();
    if (datePay == "") {
      $("label#datePay_error").show();
      $("input#datePay").focus();
      return false;
    }
     user=1;
    insertPayments(code,liqu,bank,typePay,value,datePay,user);
    //alert(liqu+','+bank+','+typePay+','+value+','+datePay)
      
  });
});
//********************** */

//***Fomr update payments***
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
//*** FIN PAYMENTS ***

//*** LOCKS ***
//***Fomr insert Locks***
$(function() {
  $('.error').hide();
  $("#btnSaveLock").click(function() {
      //validate fields
      var code = $("input#codeLock").val();
    if (code == "") {
      $("label#codeLock_error").show();
      $("input#codeLock").focus();
      return false;
    }

    var aeroline = $("select#codeAeroline").val();
    if (aeroline == "") {
      $("label#codeAeroline_error").show();
      $("select#codeAeroline").focus();
      return false;
    }

      var origin = $("select#codeOr").val();
    if (origin == "") {
      $("label#codeOr_error").show();
      $("select#codeOr").focus();
      return false;
    }

    var destination = $("select#codeDest").val();
    if (destination == "") {
      $("label#codeDest_error").show();
      $("select#codeDest").focus();
      return false;
    }

    var dateIn = $("input#fecIdaLock").val();
    if (dateIn == "") {
      $("label#fecIdaLock_error").show();
      $("select#fecIdaLock").focus();
      return false;
    }

    var dateFi = $("input#fecRegLock").val();
    if (dateFi == "") {
      $("label#fecRegLock_error").show();
      $("input#fecRegLock").focus();
      return false;
    }
    var flightIda = $("select#codeFlightIda").val();
    if (flightIda == "") {
      $("label#codeFlightIda_error").show();
      $("select#codeFlightIda").focus();
      return false;
    }

    var flightReg = $("select#codeFlightReg").val();
    if (flightReg == "") {
      $("label#codeFlightReg_error").show();
      $("select#codeFlightReg").focus();
      return false;
    }

    var quantity = $("input#cantLock").val();
    if (quantity == "") {
      $("label#cantLock_error").show();
      $("input#cantLock").focus();
      return false;
    }

    var tariff = $("input#tariLock").val();
    if (tariff == "") {
      $("label#tariLock_error").show();
      $("input#tariLock").focus();
      return false;
    }
     user=1;
    insertPayments(code,aeroline,origin,destination,dateIn,dateFi,flightIda,flightReg,quantity,tariff,user);
    //alert(code,aeroline,origin,destination,dateIn,dateFi,flightIda,flightReg,quantity,tariff,user);
      
  });
});
//********************** */

//***Fomr update Locks***
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
//*** FIN LOCKS ***

//*** BLOQDETA ***
//***Fomr insert bloqdeta***
$(function() {
  $('.error').hide();
  $("#btnSaveBloqdeta").click(function() {
      //validate fields
      var code = $("input#code").val();
    if (code == "") {
      $("label#code_error").show();
      $("input#codeHotel").focus();
      return false;
    }

    var liquidac = $("input#liquidac").val();
    if (liquidac == "") {
      $("label#liquidac_error").show();
      $("input#liquidac").focus();
      return false;
    }

      var id = $("input#idTravelerlock").val();
    if (id == "") {
      $("label#idTraveler_error").show();
      $("input#idTravelerLock").focus();
      return false;
    }

    var name = $("input#nameTraveler").val();
    if (name == "") {
      $("label#nameTraveler_error").show();
      $("input#nameTraveler").focus();
      return false;
    }

    var lastName = $("input#lastNameTraveler").val();
    if (lastName == "") {
      $("label#lastNameTraveler_error").show();
      $("input#lastNameTraveler").focus();
      return false;
    }

    var dateN = $("input#fecNacTraveler").val();
    if (dateN == "") {
      $("label#fecNacTraveler_error").show();
      $("input#fecNacTraveler").focus();
      return false;
    }
   
    insertBloqdeta(arrBloqdeta());   
  });
});
//********************** */

//***Fomr update Bloqdeta***
$(function() {
  $('.error').hide();
  $("#btnUpdateBloqdeta").click(function() {
      //validate fields
      $('.error').hide();
      var code = $("input#code").val();
    if (code == "") {
      $("label#code_error").show();
      $("input#codeHotel").focus();
      return false;
    }

    var liquidac = $("input#liquidac").val();
    if (liquidac == "") {
      $("label#liquidac_error").show();
      $("input#liquidac").focus();
      return false;
    }

      var id = $("input#idTravelerlock").val();
    if (id == "") {
      $("label#idTraveler_error").show();
      $("input#idTravelerLock").focus();
      return false;
    }

    var name = $("input#nameTraveler").val();
    if (name == "") {
      $("label#nameTraveler_error").show();
      $("input#nameTraveler").focus();
      return false;
    }

    var lastName = $("input#lastNameTraveler").val();
    if (lastName == "") {
      $("label#lastNameTraveler_error").show();
      $("input#lastNameTraveler").focus();
      return false;
    }

    var dateN = $("input#fecNacTraveler").val();
    if (dateN == "") {
      $("label#fecNacTraveler_error").show();
      $("input#fecNacTraveler").focus();
      return false;
    }
      updateBloqdeta(arrNetoandr());
      
  });
});
//********************** */

//********************SELECCIONAR ITEMS DE DETALLE BLOQUEO Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectBloqdeta(){
  var code = $("input#code").val();
  var liquidac = $("input#liquidac").val();
  var id = $("input#idTravelerlock").val();
  var name = $("input#nameTraveler").val();
  var lastName = $("input#lastNameTraveler").val();
  var dateN = $("input#fecNacTraveler").val();

  if (code == "") {
    $("label#code_error").show();
    $("input#codeHotel").focus();
    return false;
  }

   else if (liquidac == "") {
    $("label#liquidac_error").show();
    $("input#liquidac").focus();
    return false;
  }

    else if (id == "") {
      $("label#idTraveler_error").show();
      $("input#idTravelerLock").focus();
      return false;
    }
 
    else if (name == "") {
      $("label#nameTraveler_error").show();
      $("input#nameTraveler").focus();
      return false;
    }

    else if (lastName == "") {
      $("label#lastNameTraveler_error").show();
      $("input#lastNameTraveler").focus();
      return false;
    }
    
    else if (dateN == "") {
      $("label#fecNacTraveler_error").show();
      $("input#fecNacTraveler").focus();
      return false;
    }

    
  else{
     /* Para evitar que salga el mensaje de error */ 
    document.getElementById("code_error").style.display="none";
    document.getElementById("liquidac_error").style.display="none";
    document.getElementById("idTraveler_error").style.display="none";
    document.getElementById("nameTraveler_error").style.display="none";
    document.getElementById("lastNameTraveler_error").style.display="none";
    document.getElementById("fecNacTraveler_error").style.display="none";
    
    addBloqdeta(code,liquidac,id,name,lastName,dateN);  
  }
 
}
//**************FIN ADD bloqdeta***************************** */


//*** FIN BLOQDETA ***

//*** TARIANDR ***
//***Fomr insert tariandr***
$(function() {
  $('.error').hide();
  $("#btnSaveTariandr").click(function() {
      //validate fields
      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var alim = $("select#codeAlim").val();
    if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

      var sencilla = $("input#valueSencilla").val();
    if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }

    var doble = $("input#valueDoble").val();
    if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    var triple = $("input#valueTriple").val();
    if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    var cuadruple = $("input#valueCuadruple").val();
    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    var nino = $("input#valueNino").val();
    if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    var dateInVi = $("input#dateInVi").val();
    if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    var dateFiVi = $("input#dateFiVi").val();
    if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    var dateInEx = $("input#dateInEx").val();
    if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    var dateFiEx = $("input#dateFiEx").val();
    if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }
     user=1;
    insertTariandr(user,arrTariandr());
    
      
  });
});
//********************** */

//***Fomr update Tariandr***
$(function() {
  $('.error').hide();
  $("#btnUpdateTariandr").click(function() {
      //validate fields
      $('.error').hide();
      var codeHotel = $("select#codeHotel").val();
      if (codeHotel == "") {
        $("label#codeHotel_error").show();
        $("select#codeHotel").focus();
        return false;
      }
  
      var alim = $("select#codeAlim").val();
      if (alim == "") {
        $("label#codeAlim_error").show();
        $("select#codeAlim").focus();
        return false;
      }
  
        var sencilla = $("input#valueSencilla").val();
      if (sencilla == "") {
        $("label#valueSencilla_error").show();
        $("input#valueSencilla").focus();
        return false;
      }
  
      var doble = $("input#valueDoble").val();
      if (doble == "") {
        $("label#valueDoble_error").show();
        $("input#valueDoble").focus();
        return false;
      }
  
      var triple = $("input#valueTriple").val();
      if (triple == "") {
        $("label#valueTriple_error").show();
        $("input#valueTriple").focus();
        return false;
      }
  
      var cuadruple = $("input#valueCuadruple").val();
      if (cuadruple == "") {
        $("label#valueCuadruple_error").show();
        $("input#valueCuadruple").focus();
        return false;
      }
      var nino = $("input#valueNino").val();
      if (nino == "") {
        $("label#valueNino_error").show();
        $("input#valueNino").focus();
        return false;
      }
  
      var dateInVi = $("input#dateInVi").val();
      if (dateInVi == "") {
        $("label#dateInVi_error").show();
        $("input#dateInVi").focus();
        return false;
      }
  
      var dateFiVi = $("input#dateFiVi").val();
      if (dateFiVi == "") {
        $("label#dateFiVi_error").show();
        $("input#dateFiVi").focus();
        return false;
      }
  
      var dateInEx = $("input#dateInEx").val();
      if (dateInEx == "") {
        $("label#dateInEx_error").show();
        $("input#dateInEx").focus();
        return false;
      }
  
      var dateFiEx = $("input#dateFiEx").val();
      if (dateFiEx == "") {
        $("label#dateFiEx_error").show();
        $("input#dateFiEx").focus();
        return false;
      }
       user=1;
      updateTariandr(user,arrTariandr());
      
  });
});
//********************** */

//********************SELECCIONAR ITEMS DE VUELOS Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectTariandr(){
  var codeHotel = $("select#codeHotel").val();
  var alim = $("select#codeAlim").val();
  var sencilla = $("input#valueSencilla").val();
  var doble = $("input#valueDoble").val();
  var triple = $("input#valueTriple").val();
  var cuadruple = $("input#valueCuadruple").val();
  var nino = $("input#valueNino").val();
  var dateInVi = $("input#dateInVi").val();
  var dateFiVi = $("input#dateFiVi").val();
  var dateInEx = $("input#dateInEx").val();
  var dateFiEx = $("input#dateFiEx").val();

    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    else if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

    else if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }
 
    else if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    else if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    
    else if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    else if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    else if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    else if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    else if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }  

  else{
     /* Para obtener el valor */
     var user=1;
      var hotel = document.getElementById("codeHotel");
      var selectedH = hotel.options[hotel.selectedIndex].text;

      var plan = document.getElementById("codeAlim");
      var selectedA = plan.options[plan.selectedIndex].text;
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("codeHotel_error").style.display="none";
    document.getElementById("codeAlim_error").style.display="none";
    document.getElementById("valueSencilla_error").style.display="none";
    document.getElementById("valueDoble_error").style.display="none";
    document.getElementById("valueTriple_error").style.display="none";
    document.getElementById("valueCuadruple_error").style.display="none";
    document.getElementById("ValueNino_error").style.display="none";
    document.getElementById("dateInVi_error").style.display="none";
    document.getElementById("dateFiVi_error").style.display="none";
    document.getElementById("dateInEx_error").style.display="none";
    document.getElementById("dateFiEx_error").style.display="none";
    addTariandr(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user);
  }
 
}
//**************FIN ADD tariandr***************************** */


//*** FIN TARIANDR ***

//*** TARICART ***
//***Fomr insert taricart***
$(function() {
  $('.error').hide();
  $("#btnSaveTaricart").click(function() {
      //validate fields
      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var alim = $("select#codeAlim").val();
    if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

      var sencilla = $("input#valueSencilla").val();
    if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }

    var doble = $("input#valueDoble").val();
    if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    var triple = $("input#valueTriple").val();
    if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    var cuadruple = $("input#valueCuadruple").val();
    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    var nino = $("input#valueNino").val();
    if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    var dateInVi = $("input#dateInVi").val();
    if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    var dateFiVi = $("input#dateFiVi").val();
    if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    var dateInEx = $("input#dateInEx").val();
    if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    var dateFiEx = $("input#dateFiEx").val();
    if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }
     user=1;
    insertTaricart(user,arrTaricart());
    
      
  });
});
//********************** */

//***Fomr update Taricart***
$(function() {
  $('.error').hide();
  $("#btnUpdateTaricart").click(function() {
      //validate fields
      $('.error').hide();
      var codeHotel = $("select#codeHotel").val();
      if (codeHotel == "") {
        $("label#codeHotel_error").show();
        $("select#codeHotel").focus();
        return false;
      }
  
      var alim = $("select#codeAlim").val();
      if (alim == "") {
        $("label#codeAlim_error").show();
        $("select#codeAlim").focus();
        return false;
      }
  
        var sencilla = $("input#valueSencilla").val();
      if (sencilla == "") {
        $("label#valueSencilla_error").show();
        $("input#valueSencilla").focus();
        return false;
      }
  
      var doble = $("input#valueDoble").val();
      if (doble == "") {
        $("label#valueDoble_error").show();
        $("input#valueDoble").focus();
        return false;
      }
  
      var triple = $("input#valueTriple").val();
      if (triple == "") {
        $("label#valueTriple_error").show();
        $("input#valueTriple").focus();
        return false;
      }
  
      var cuadruple = $("input#valueCuadruple").val();
      if (cuadruple == "") {
        $("label#valueCuadruple_error").show();
        $("input#valueCuadruple").focus();
        return false;
      }
      var nino = $("input#valueNino").val();
      if (nino == "") {
        $("label#valueNino_error").show();
        $("input#valueNino").focus();
        return false;
      }
  
      var dateInVi = $("input#dateInVi").val();
      if (dateInVi == "") {
        $("label#dateInVi_error").show();
        $("input#dateInVi").focus();
        return false;
      }
  
      var dateFiVi = $("input#dateFiVi").val();
      if (dateFiVi == "") {
        $("label#dateFiVi_error").show();
        $("input#dateFiVi").focus();
        return false;
      }
  
      var dateInEx = $("input#dateInEx").val();
      if (dateInEx == "") {
        $("label#dateInEx_error").show();
        $("input#dateInEx").focus();
        return false;
      }
  
      var dateFiEx = $("input#dateFiEx").val();
      if (dateFiEx == "") {
        $("label#dateFiEx_error").show();
        $("input#dateFiEx").focus();
        return false;
      }
       user=1;
      updateTaricart(user,arrTaricart());
      
  });
});
//********************** */

//********************SELECCIONAR ITEMS DE VUELOS Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectTaricart(){
  var codeHotel = $("select#codeHotel").val();
  var alim = $("select#codeAlim").val();
  var sencilla = $("input#valueSencilla").val();
  var doble = $("input#valueDoble").val();
  var triple = $("input#valueTriple").val();
  var cuadruple = $("input#valueCuadruple").val();
  var nino = $("input#valueNino").val();
  var dateInVi = $("input#dateInVi").val();
  var dateFiVi = $("input#dateFiVi").val();
  var dateInEx = $("input#dateInEx").val();
  var dateFiEx = $("input#dateFiEx").val();

    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    else if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

    else if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }
 
    else if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    else if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    
    else if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    else if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    else if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    else if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    else if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }  

  else{
     /* Para obtener el valor */
     var user=1;
      var hotel = document.getElementById("codeHotel");
      var selectedH = hotel.options[hotel.selectedIndex].text;

      var plan = document.getElementById("codeAlim");
      var selectedA = plan.options[plan.selectedIndex].text;
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("codeHotel_error").style.display="none";
    document.getElementById("codeAlim_error").style.display="none";
    document.getElementById("valueSencilla_error").style.display="none";
    document.getElementById("valueDoble_error").style.display="none";
    document.getElementById("valueTriple_error").style.display="none";
    document.getElementById("valueCuadruple_error").style.display="none";
    document.getElementById("ValueNino_error").style.display="none";
    document.getElementById("dateInVi_error").style.display="none";
    document.getElementById("dateFiVi_error").style.display="none";
    document.getElementById("dateInEx_error").style.display="none";
    document.getElementById("dateFiEx_error").style.display="none";
    addTaricart(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user);
  }
 
}
//**************FIN ADD taricart***************************** */
//*** FIN TARICART ***

//*** TARISAMA ***
//***Fomr insert tarisama***
$(function() {
  $('.error').hide();
  $("#btnSaveTarisama").click(function() {
      //validate fields
      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var alim = $("select#codeAlim").val();
    if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

      var sencilla = $("input#valueSencilla").val();
    if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }

    var doble = $("input#valueDoble").val();
    if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    var triple = $("input#valueTriple").val();
    if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    var cuadruple = $("input#valueCuadruple").val();
    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    var nino = $("input#valueNino").val();
    if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    var dateInVi = $("input#dateInVi").val();
    if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    var dateFiVi = $("input#dateFiVi").val();
    if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    var dateInEx = $("input#dateInEx").val();
    if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    var dateFiEx = $("input#dateFiEx").val();
    if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }
     user=1;
    insertTarisama(user,arrTarisama());
    
      
  });
});
//********************** */

//***Fomr update Tarisama***
$(function() {
  $('.error').hide();
  $("#btnUpdateTarisama").click(function() {
      //validate fields
      $('.error').hide();
      var codeHotel = $("select#codeHotel").val();
      if (codeHotel == "") {
        $("label#codeHotel_error").show();
        $("select#codeHotel").focus();
        return false;
      }
  
      var alim = $("select#codeAlim").val();
      if (alim == "") {
        $("label#codeAlim_error").show();
        $("select#codeAlim").focus();
        return false;
      }
  
        var sencilla = $("input#valueSencilla").val();
      if (sencilla == "") {
        $("label#valueSencilla_error").show();
        $("input#valueSencilla").focus();
        return false;
      }
  
      var doble = $("input#valueDoble").val();
      if (doble == "") {
        $("label#valueDoble_error").show();
        $("input#valueDoble").focus();
        return false;
      }
  
      var triple = $("input#valueTriple").val();
      if (triple == "") {
        $("label#valueTriple_error").show();
        $("input#valueTriple").focus();
        return false;
      }
  
      var cuadruple = $("input#valueCuadruple").val();
      if (cuadruple == "") {
        $("label#valueCuadruple_error").show();
        $("input#valueCuadruple").focus();
        return false;
      }
      var nino = $("input#valueNino").val();
      if (nino == "") {
        $("label#valueNino_error").show();
        $("input#valueNino").focus();
        return false;
      }
  
      var dateInVi = $("input#dateInVi").val();
      if (dateInVi == "") {
        $("label#dateInVi_error").show();
        $("input#dateInVi").focus();
        return false;
      }
  
      var dateFiVi = $("input#dateFiVi").val();
      if (dateFiVi == "") {
        $("label#dateFiVi_error").show();
        $("input#dateFiVi").focus();
        return false;
      }
  
      var dateInEx = $("input#dateInEx").val();
      if (dateInEx == "") {
        $("label#dateInEx_error").show();
        $("input#dateInEx").focus();
        return false;
      }
  
      var dateFiEx = $("input#dateFiEx").val();
      if (dateFiEx == "") {
        $("label#dateFiEx_error").show();
        $("input#dateFiEx").focus();
        return false;
      }
       user=1;
      updateTarisama(user,arrTarisama());
      
  });
});
//********************** */

//********************SELECCIONAR ITEMS DE TARISAMA Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectTarisama(){
  var codeHotel = $("select#codeHotel").val();
  var alim = $("select#codeAlim").val();
  var sencilla = $("input#valueSencilla").val();
  var doble = $("input#valueDoble").val();
  var triple = $("input#valueTriple").val();
  var cuadruple = $("input#valueCuadruple").val();
  var nino = $("input#valueNino").val();
  var dateInVi = $("input#dateInVi").val();
  var dateFiVi = $("input#dateFiVi").val();
  var dateInEx = $("input#dateInEx").val();
  var dateFiEx = $("input#dateFiEx").val();

    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    else if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

    else if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }
 
    else if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    else if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    
    else if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    else if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    else if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    else if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    else if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }  

  else{
     /* Para obtener el valor */
     var user=1;
      var hotel = document.getElementById("codeHotel");
      var selectedH = hotel.options[hotel.selectedIndex].text;

      var plan = document.getElementById("codeAlim");
      var selectedA = plan.options[plan.selectedIndex].text;
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("codeHotel_error").style.display="none";
    document.getElementById("codeAlim_error").style.display="none";
    document.getElementById("valueSencilla_error").style.display="none";
    document.getElementById("valueDoble_error").style.display="none";
    document.getElementById("valueTriple_error").style.display="none";
    document.getElementById("valueCuadruple_error").style.display="none";
    document.getElementById("ValueNino_error").style.display="none";
    document.getElementById("dateInVi_error").style.display="none";
    document.getElementById("dateFiVi_error").style.display="none";
    document.getElementById("dateInEx_error").style.display="none";
    document.getElementById("dateFiEx_error").style.display="none";
    addTarisama(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user);
  }
 
}
//**************FIN ADD tarisama***************************** */


//*** FIN TARISAMA ***


//*** NETOANDR ***
//***Fomr insert netoandr***
$(function() {
  $('.error').hide();
  $("#btnSaveNetoandr").click(function() {
      //validate fields
      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var alim = $("select#codeAlim").val();
    if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

      var sencilla = $("input#valueSencilla").val();
    if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }

    var doble = $("input#valueDoble").val();
    if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    var triple = $("input#valueTriple").val();
    if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    var cuadruple = $("input#valueCuadruple").val();
    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    var nino = $("input#valueNino").val();
    if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    var dateInVi = $("input#dateInVi").val();
    if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    var dateFiVi = $("input#dateFiVi").val();
    if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    var dateInEx = $("input#dateInEx").val();
    if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    var dateFiEx = $("input#dateFiEx").val();
    if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }
     user=1;
    insertNetoandr(user,arrNetoandr());
    
      
  });
});
//********************** */

//***Fomr update Netoandr***
$(function() {
  $('.error').hide();
  $("#btnUpdateNetoandr").click(function() {
      //validate fields
      $('.error').hide();
      var codeHotel = $("select#codeHotel").val();
      if (codeHotel == "") {
        $("label#codeHotel_error").show();
        $("select#codeHotel").focus();
        return false;
      }
  
      var alim = $("select#codeAlim").val();
      if (alim == "") {
        $("label#codeAlim_error").show();
        $("select#codeAlim").focus();
        return false;
      }
  
        var sencilla = $("input#valueSencilla").val();
      if (sencilla == "") {
        $("label#valueSencilla_error").show();
        $("input#valueSencilla").focus();
        return false;
      }
  
      var doble = $("input#valueDoble").val();
      if (doble == "") {
        $("label#valueDoble_error").show();
        $("input#valueDoble").focus();
        return false;
      }
  
      var triple = $("input#valueTriple").val();
      if (triple == "") {
        $("label#valueTriple_error").show();
        $("input#valueTriple").focus();
        return false;
      }
  
      var cuadruple = $("input#valueCuadruple").val();
      if (cuadruple == "") {
        $("label#valueCuadruple_error").show();
        $("input#valueCuadruple").focus();
        return false;
      }
      var nino = $("input#valueNino").val();
      if (nino == "") {
        $("label#valueNino_error").show();
        $("input#valueNino").focus();
        return false;
      }
  
      var dateInVi = $("input#dateInVi").val();
      if (dateInVi == "") {
        $("label#dateInVi_error").show();
        $("input#dateInVi").focus();
        return false;
      }
  
      var dateFiVi = $("input#dateFiVi").val();
      if (dateFiVi == "") {
        $("label#dateFiVi_error").show();
        $("input#dateFiVi").focus();
        return false;
      }
  
      var dateInEx = $("input#dateInEx").val();
      if (dateInEx == "") {
        $("label#dateInEx_error").show();
        $("input#dateInEx").focus();
        return false;
      }
  
      var dateFiEx = $("input#dateFiEx").val();
      if (dateFiEx == "") {
        $("label#dateFiEx_error").show();
        $("input#dateFiEx").focus();
        return false;
      }
       user=1;
      updateNetoandr(user,arrNetoandr());
      
  });
});
//********************** */

//********************SELECCIONAR ITEMS DE VUELOS Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectNetoandr(){
  var codeHotel = $("select#codeHotel").val();
  var alim = $("select#codeAlim").val();
  var sencilla = $("input#valueSencilla").val();
  var doble = $("input#valueDoble").val();
  var triple = $("input#valueTriple").val();
  var cuadruple = $("input#valueCuadruple").val();
  var nino = $("input#valueNino").val();
  var dateInVi = $("input#dateInVi").val();
  var dateFiVi = $("input#dateFiVi").val();
  var dateInEx = $("input#dateInEx").val();
  var dateFiEx = $("input#dateFiEx").val();

    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    else if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

    else if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }
 
    else if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    else if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    
    else if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    else if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    else if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    else if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    else if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }  

  else{
     /* Para obtener el valor */
     var user=1;
      var hotel = document.getElementById("codeHotel");
      var selectedH = hotel.options[hotel.selectedIndex].text;

      var plan = document.getElementById("codeAlim");
      var selectedA = plan.options[plan.selectedIndex].text;
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("codeHotel_error").style.display="none";
    document.getElementById("codeAlim_error").style.display="none";
    document.getElementById("valueSencilla_error").style.display="none";
    document.getElementById("valueDoble_error").style.display="none";
    document.getElementById("valueTriple_error").style.display="none";
    document.getElementById("valueCuadruple_error").style.display="none";
    document.getElementById("ValueNino_error").style.display="none";
    document.getElementById("dateInVi_error").style.display="none";
    document.getElementById("dateFiVi_error").style.display="none";
    document.getElementById("dateInEx_error").style.display="none";
    document.getElementById("dateFiEx_error").style.display="none";
    addNetoandr(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user);  
  }
 
}
//**************FIN ADD netoandr***************************** */

//*** FIN NETOANDR ***

//*** NETOCART ***
//***Fomr insert netoandr***
$(function() {
  $('.error').hide();
  $("#btnSaveNetoCart").click(function() {
      //validate fields
      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var alim = $("select#codeAlim").val();
    if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

      var sencilla = $("input#valueSencilla").val();
    if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }

    var doble = $("input#valueDoble").val();
    if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    var triple = $("input#valueTriple").val();
    if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    var cuadruple = $("input#valueCuadruple").val();
    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    var nino = $("input#valueNino").val();
    if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    var dateInVi = $("input#dateInVi").val();
    if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    var dateFiVi = $("input#dateFiVi").val();
    if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    var dateInEx = $("input#dateInEx").val();
    if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    var dateFiEx = $("input#dateFiEx").val();
    if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }
     user=1;
    insertNetocart(user,arrNetocart());
    
      
  });
});
//********************** */

//***Fomr update Netocart***
$(function() {
  $('.error').hide();
  $("#btnUpdateNetocart").click(function() {
      //validate fields
      $('.error').hide();
      var codeHotel = $("select#codeHotel").val();
      if (codeHotel == "") {
        $("label#codeHotel_error").show();
        $("select#codeHotel").focus();
        return false;
      }
  
      var alim = $("select#codeAlim").val();
      if (alim == "") {
        $("label#codeAlim_error").show();
        $("select#codeAlim").focus();
        return false;
      }
  
        var sencilla = $("input#valueSencilla").val();
      if (sencilla == "") {
        $("label#valueSencilla_error").show();
        $("input#valueSencilla").focus();
        return false;
      }
  
      var doble = $("input#valueDoble").val();
      if (doble == "") {
        $("label#valueDoble_error").show();
        $("input#valueDoble").focus();
        return false;
      }
  
      var triple = $("input#valueTriple").val();
      if (triple == "") {
        $("label#valueTriple_error").show();
        $("input#valueTriple").focus();
        return false;
      }
  
      var cuadruple = $("input#valueCuadruple").val();
      if (cuadruple == "") {
        $("label#valueCuadruple_error").show();
        $("input#valueCuadruple").focus();
        return false;
      }
      var nino = $("input#valueNino").val();
      if (nino == "") {
        $("label#valueNino_error").show();
        $("input#valueNino").focus();
        return false;
      }
  
      var dateInVi = $("input#dateInVi").val();
      if (dateInVi == "") {
        $("label#dateInVi_error").show();
        $("input#dateInVi").focus();
        return false;
      }
  
      var dateFiVi = $("input#dateFiVi").val();
      if (dateFiVi == "") {
        $("label#dateFiVi_error").show();
        $("input#dateFiVi").focus();
        return false;
      }
  
      var dateInEx = $("input#dateInEx").val();
      if (dateInEx == "") {
        $("label#dateInEx_error").show();
        $("input#dateInEx").focus();
        return false;
      }
  
      var dateFiEx = $("input#dateFiEx").val();
      if (dateFiEx == "") {
        $("label#dateFiEx_error").show();
        $("input#dateFiEx").focus();
        return false;
      }
       user=1;
      updateNetocart(user,arrNetocart());
      
  });
});
//********************** */

//********************SELECCIONAR ITEMS DE NETOCART Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectNetoCart(){
  var codeHotel = $("select#codeHotel").val();
  var alim = $("select#codeAlim").val();
  var sencilla = $("input#valueSencilla").val();
  var doble = $("input#valueDoble").val();
  var triple = $("input#valueTriple").val();
  var cuadruple = $("input#valueCuadruple").val();
  var nino = $("input#valueNino").val();
  var dateInVi = $("input#dateInVi").val();
  var dateFiVi = $("input#dateFiVi").val();
  var dateInEx = $("input#dateInEx").val();
  var dateFiEx = $("input#dateFiEx").val();

    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    else if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

    else if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }
 
    else if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    else if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    
    else if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    else if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    else if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    else if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    else if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }  

  else{
     /* Para obtener el valor */
     var user=1;
      var hotel = document.getElementById("codeHotel");
      var selectedH = hotel.options[hotel.selectedIndex].text;

      var plan = document.getElementById("codeAlim");
      var selectedA = plan.options[plan.selectedIndex].text;
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("codeHotel_error").style.display="none";
    document.getElementById("codeAlim_error").style.display="none";
    document.getElementById("valueSencilla_error").style.display="none";
    document.getElementById("valueDoble_error").style.display="none";
    document.getElementById("valueTriple_error").style.display="none";
    document.getElementById("valueCuadruple_error").style.display="none";
    document.getElementById("ValueNino_error").style.display="none";
    document.getElementById("dateInVi_error").style.display="none";
    document.getElementById("dateFiVi_error").style.display="none";
    document.getElementById("dateInEx_error").style.display="none";
    document.getElementById("dateFiEx_error").style.display="none";
    addNetocart(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user);  
  }
 
}
//**************FIN ADD netocart***************************** */


//*** FIN NETOCART ***

//*** NETOSAMA ***
//***Fomr insert netosama***
$(function() {
  $('.error').hide();
  $("#btnSaveNetosama").click(function() {
      //validate fields
      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var alim = $("select#codeAlim").val();
    if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

      var sencilla = $("input#valueSencilla").val();
    if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }

    var doble = $("input#valueDoble").val();
    if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    var triple = $("input#valueTriple").val();
    if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    var cuadruple = $("input#valueCuadruple").val();
    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    var nino = $("input#valueNino").val();
    if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    var dateInVi = $("input#dateInVi").val();
    if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    var dateFiVi = $("input#dateFiVi").val();
    if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    var dateInEx = $("input#dateInEx").val();
    if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    var dateFiEx = $("input#dateFiEx").val();
    if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }
     user=1;
    insertNetosama(user,arrNetosama());
    
      
  });
});
//********************** */

//***Fomr update Netosama***
$(function() {
  $('.error').hide();
  $("#btnUpdateNetosama").click(function() {
      //validate fields
      $('.error').hide();
      var codeHotel = $("select#codeHotel").val();
      if (codeHotel == "") {
        $("label#codeHotel_error").show();
        $("select#codeHotel").focus();
        return false;
      }
  
      var alim = $("select#codeAlim").val();
      if (alim == "") {
        $("label#codeAlim_error").show();
        $("select#codeAlim").focus();
        return false;
      }
  
        var sencilla = $("input#valueSencilla").val();
      if (sencilla == "") {
        $("label#valueSencilla_error").show();
        $("input#valueSencilla").focus();
        return false;
      }
  
      var doble = $("input#valueDoble").val();
      if (doble == "") {
        $("label#valueDoble_error").show();
        $("input#valueDoble").focus();
        return false;
      }
  
      var triple = $("input#valueTriple").val();
      if (triple == "") {
        $("label#valueTriple_error").show();
        $("input#valueTriple").focus();
        return false;
      }
  
      var cuadruple = $("input#valueCuadruple").val();
      if (cuadruple == "") {
        $("label#valueCuadruple_error").show();
        $("input#valueCuadruple").focus();
        return false;
      }
      var nino = $("input#valueNino").val();
      if (nino == "") {
        $("label#valueNino_error").show();
        $("input#valueNino").focus();
        return false;
      }
  
      var dateInVi = $("input#dateInVi").val();
      if (dateInVi == "") {
        $("label#dateInVi_error").show();
        $("input#dateInVi").focus();
        return false;
      }
  
      var dateFiVi = $("input#dateFiVi").val();
      if (dateFiVi == "") {
        $("label#dateFiVi_error").show();
        $("input#dateFiVi").focus();
        return false;
      }
  
      var dateInEx = $("input#dateInEx").val();
      if (dateInEx == "") {
        $("label#dateInEx_error").show();
        $("input#dateInEx").focus();
        return false;
      }
  
      var dateFiEx = $("input#dateFiEx").val();
      if (dateFiEx == "") {
        $("label#dateFiEx_error").show();
        $("input#dateFiEx").focus();
        return false;
      }
       user=1;
      updateNetosama(user,arrNetosama());
      
  });
});
//********************** */

//********************SELECCIONAR ITEMS DE NETOANDR Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectNetosama(){
  var codeHotel = $("select#codeHotel").val();
  var alim = $("select#codeAlim").val();
  var sencilla = $("input#valueSencilla").val();
  var doble = $("input#valueDoble").val();
  var triple = $("input#valueTriple").val();
  var cuadruple = $("input#valueCuadruple").val();
  var nino = $("input#valueNino").val();
  var dateInVi = $("input#dateInVi").val();
  var dateFiVi = $("input#dateFiVi").val();
  var dateInEx = $("input#dateInEx").val();
  var dateFiEx = $("input#dateFiEx").val();

    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    else if (alim == "") {
      $("label#codeAlim_error").show();
      $("select#codeAlim").focus();
      return false;
    }

    else if (sencilla == "") {
      $("label#valueSencilla_error").show();
      $("input#valueSencilla").focus();
      return false;
    }
 
    else if (doble == "") {
      $("label#valueDoble_error").show();
      $("input#valueDoble").focus();
      return false;
    }

    else if (triple == "") {
      $("label#valueTriple_error").show();
      $("input#valueTriple").focus();
      return false;
    }

    if (cuadruple == "") {
      $("label#valueCuadruple_error").show();
      $("input#valueCuadruple").focus();
      return false;
    }
    
    else if (nino == "") {
      $("label#valueNino_error").show();
      $("input#valueNino").focus();
      return false;
    }

    else if (dateInVi == "") {
      $("label#dateInVi_error").show();
      $("input#dateInVi").focus();
      return false;
    }

    else if (dateFiVi == "") {
      $("label#dateFiVi_error").show();
      $("input#dateFiVi").focus();
      return false;
    }

    else if (dateInEx == "") {
      $("label#dateInEx_error").show();
      $("input#dateInEx").focus();
      return false;
    }

    else if (dateFiEx == "") {
      $("label#dateFiEx_error").show();
      $("input#dateFiEx").focus();
      return false;
    }  

  else{
     /* Para obtener el valor */
     var user=1;
      var hotel = document.getElementById("codeHotel");
      var selectedH = hotel.options[hotel.selectedIndex].text;

      var plan = document.getElementById("codeAlim");
      var selectedA = plan.options[plan.selectedIndex].text;
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("codeHotel_error").style.display="none";
    document.getElementById("codeAlim_error").style.display="none";
    document.getElementById("valueSencilla_error").style.display="none";
    document.getElementById("valueDoble_error").style.display="none";
    document.getElementById("valueTriple_error").style.display="none";
    document.getElementById("valueCuadruple_error").style.display="none";
    document.getElementById("ValueNino_error").style.display="none";
    document.getElementById("dateInVi_error").style.display="none";
    document.getElementById("dateFiVi_error").style.display="none";
    document.getElementById("dateInEx_error").style.display="none";
    document.getElementById("dateFiEx_error").style.display="none";
    addNetosama(codeHotel,selectedH,alim,selectedA,sencilla,doble,triple,cuadruple,nino,dateInVi,dateFiVi,dateInEx,dateFiEx,user);  
  }
 
}
//**************FIN ADD netosama***************************** */

//*** FIN NETOSAMA ***

//*** RECEANDR ***
//***Fomr insert receandr***
$(function() {
  $('.error').hide();
  $("#btnSaveReceandr").click(function() {
      //validate fields

      var codeOper = $("select#codeOperator").val();
    if (codeOper == "") {
      $("label#codeOperator_error").show();
      $("select#codeOperator").focus();
      return false;
    }

      var receptivo = $("input#receptivo").val();
    if (receptivo == "") {
      $("label#receptivo_error").show();
      $("input#receptivo").focus();
      return false;
    }

      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var zona = $("input#zona").val();
    if (zona == "") {
      $("label#zona_error").show();
      $("input#zona").focus();
      return false;
    }

    var hoinDiu = $("input#hoinDiu").val();
    if (hoinDiu == "") {
      $("label#hoinDiu_error").show();
      $("input#hoinDiu").focus();
      return false;
    }

    var hofiDiu = $("input#hofiDiu").val();
    if (hofiDiu == "") {
      $("label#hofiDiu_error").show();
      $("input#hofiDiu").focus();
      return false;
    }
    var valueDiurno = $("input#valueDiurno").val();
    if (valueDiurno == "") {
      $("label#valueDiurno_error").show();
      $("input#valueDiurno").focus();
      return false;
    }

    var hoinNoc = $("input#hoinNoc").val();
    if (hoinNoc == "") {
      $("label#hoinNoc_error").show();
      $("input#hoinNoc").focus();
      return false;
    }

    var hofiNoc = $("input#hofiNoc").val();
    if (hofiNoc == "") {
      $("label#hofiNoc_error").show();
      $("input#hofiNoc").focus();
      return false;
    }

    var valueNocturno = $("input#valueNocturno").val();
    if (valueNocturno == "") {
      $("label#valueNocturno_error").show();
      $("input#valueNocturno").focus();
      return false;
    }

     user=1;
    insertReceandr(user,arrReceandr());
    
      
  });
});
//********************** */

//***Fomr update receandr***
$(function() {
  $('.error').hide();
  $("#btnUpdateReceandr").click(function() {
      //validate fields
      var codeOper = $("select#codeOperator").val();
    if (codeOper == "") {
      $("label#codeOperator_error").show();
      $("select#codeOperator").focus();
      return false;
    }

      var receptivo = $("input#receptivo").val();
    if (receptivo == "") {
      $("label#receptivo_error").show();
      $("input#receptivo").focus();
      return false;
    }

      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var zona = $("input#zona").val();
    if (zona == "") {
      $("label#zona_error").show();
      $("input#zona").focus();
      return false;
    }

    var hoinDiu = $("input#hoinDiu").val();
    if (hoinDiu == "") {
      $("label#hoinDiu_error").show();
      $("input#hoinDiu").focus();
      return false;
    }

    var hofiDiu = $("input#hofiDiu").val();
    if (hofiDiu == "") {
      $("label#hofiDiu_error").show();
      $("input#hofiDiu").focus();
      return false;
    }
    var valueDiurno = $("input#valueDiurno").val();
    if (valueDiurno == "") {
      $("label#valueDiurno_error").show();
      $("input#valueDiurno").focus();
      return false;
    }

    var hoinNoc = $("input#hoinNoc").val();
    if (hoinNoc == "") {
      $("label#hoinNoc_error").show();
      $("input#hoinNoc").focus();
      return false;
    }

    var hofiNoc = $("input#hofiNoc").val();
    if (hofiNoc == "") {
      $("label#hofiNoc_error").show();
      $("input#hofiNoc").focus();
      return false;
    }

    var valueNocturno = $("input#valueNocturno").val();
    if (valueNocturno == "") {
      $("label#valueNocturno_error").show();
      $("input#valueNocturno").focus();
      return false;
    }

     user=1;
      updateReceandr(user,arrReceandr());
      
  });
});
//********************** */

//********************SELECCIONAR ITEMS DE RECEANDR Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectReceandr(){
  var codeOper = $("select#codeOperator").val();
  var receptivo = $("input#receptivo").val();
  var codeHotel = $("select#codeHotel").val();
  var zona = $("input#zona").val();
  var hoinDiu = $("input#hoinDiu").val();
  var hofiDiu = $("input#hofiDiu").val();
  var valueDiurno = $("input#valueDiurno").val();
  var hoinNoc = $("input#hoinNoc").val();
  var hofiNoc = $("input#hofiNoc").val();
  var valueNocturno = $("input#valueNocturno").val();

  if (codeOper == "") {
    $("label#codeOperator_error").show();
    $("select#codeOperator").focus();
    return false;
  }

    else if (receptivo == "") {
      $("label#receptivo_error").show();
      $("input#receptivo").focus();
      return false;
    }

    else if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }
 
    else if (zona == "") {
      $("label#zona_error").show();
      $("input#zona").focus();
      return false;
    }

    else if (hoinDiu == "") {
      $("label#hoinDiu_error").show();
      $("input#hoinDiu").focus();
      return false;
    }

    else if (hofiDiu == "") {
      $("label#hofiDiu_error").show();
      $("input#hofiDiu").focus();
      return false;
    }
    
    else if (valueDiurno == "") {
      $("label#valueDiurno_error").show();
      $("input#valueDiurno").focus();
      return false;
    }
    
    else if (hoinNoc == "") {
      $("label#hoinNoc_error").show();
      $("input#hoinNoc").focus();
      return false;
    }

    else if (hofiNoc == "") {
      $("label#hofiNoc_error").show();
      $("input#hofiNoc").focus();
      return false;
    }

    else if (valueNocturno == "") {
      $("label#valueNocturno_error").show();
      $("input#valueNocturno").focus();
      return false;
    }

  else{
     /* Para obtener el valor */
     var user=1;
      var hotel = document.getElementById("codeHotel");
      var selectedH = hotel.options[hotel.selectedIndex].text;

      var operator = document.getElementById("codeOperator");
      var selectedO = operator.options[operator.selectedIndex].text;
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("codeOperator_error").style.display="none";
    document.getElementById("receptivo_error").style.display="none";
    document.getElementById("codeHotel_error").style.display="none";
    document.getElementById("zona_error").style.display="none";
    document.getElementById("hoinDiu_error").style.display="none";
    document.getElementById("hofiDiu_error").style.display="none";
    document.getElementById("valueDiurno_error").style.display="none";
    document.getElementById("hoinNoc_error").style.display="none";
    document.getElementById("hofiNoc_error").style.display="none";
    document.getElementById("valueNocturno_error").style.display="none";
    addReceandr(codeOper,selectedO,receptivo,codeHotel,selectedH,zona,hoinDiu,hofiDiu,valueDiurno,hoinNoc,hofiNoc,valueNocturno,user);  
  }
 
}
//**************FIN ADD receandr***************************** */


//*** FIN RECEANDR***

//*** RECECART ***
//***Fomr insert rececart***
$(function() {
  $('.error').hide();
  $("#btnSaveRececart").click(function() {
      //validate fields

      var codeOper = $("select#codeOperator").val();
    if (codeOper == "") {
      $("label#codeOperator_error").show();
      $("select#codeOperator").focus();
      return false;
    }

      var receptivo = $("input#receptivo").val();
    if (receptivo == "") {
      $("label#receptivo_error").show();
      $("input#receptivo").focus();
      return false;
    }

      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var zona = $("input#zona").val();
    if (zona == "") {
      $("label#zona_error").show();
      $("input#zona").focus();
      return false;
    }

    var hoinDiu = $("input#hoinDiu").val();
    if (hoinDiu == "") {
      $("label#hoinDiu_error").show();
      $("input#hoinDiu").focus();
      return false;
    }

    var hofiDiu = $("input#hofiDiu").val();
    if (hofiDiu == "") {
      $("label#hofiDiu_error").show();
      $("input#hofiDiu").focus();
      return false;
    }
    var valueDiurno = $("input#valueDiurno").val();
    if (valueDiurno == "") {
      $("label#valueDiurno_error").show();
      $("input#valueDiurno").focus();
      return false;
    }

    var hoinNoc = $("input#hoinNoc").val();
    if (hoinNoc == "") {
      $("label#hoinNoc_error").show();
      $("input#hoinNoc").focus();
      return false;
    }

    var hofiNoc = $("input#hofiNoc").val();
    if (hofiNoc == "") {
      $("label#hofiNoc_error").show();
      $("input#hofiNoc").focus();
      return false;
    }

    var valueNocturno = $("input#valueNocturno").val();
    if (valueNocturno == "") {
      $("label#valueNocturno_error").show();
      $("input#valueNocturno").focus();
      return false;
    }

     user=1;
    insertRececart(user,arrRececart());
    
      
  });
});
//********************** */

//***Fomr update rececart***
$(function() {
  $('.error').hide();
  $("#btnUpdateRececart").click(function() {
      //validate fields
      var codeOper = $("select#codeOperator").val();
    if (codeOper == "") {
      $("label#codeOperator_error").show();
      $("select#codeOperator").focus();
      return false;
    }

      var receptivo = $("input#receptivo").val();
    if (receptivo == "") {
      $("label#receptivo_error").show();
      $("input#receptivo").focus();
      return false;
    }

      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var zona = $("input#zona").val();
    if (zona == "") {
      $("label#zona_error").show();
      $("input#zona").focus();
      return false;
    }

    var hoinDiu = $("input#hoinDiu").val();
    if (hoinDiu == "") {
      $("label#hoinDiu_error").show();
      $("input#hoinDiu").focus();
      return false;
    }

    var hofiDiu = $("input#hofiDiu").val();
    if (hofiDiu == "") {
      $("label#hofiDiu_error").show();
      $("input#hofiDiu").focus();
      return false;
    }
    var valueDiurno = $("input#valueDiurno").val();
    if (valueDiurno == "") {
      $("label#valueDiurno_error").show();
      $("input#valueDiurno").focus();
      return false;
    }

    var hoinNoc = $("input#hoinNoc").val();
    if (hoinNoc == "") {
      $("label#hoinNoc_error").show();
      $("input#hoinNoc").focus();
      return false;
    }

    var hofiNoc = $("input#hofiNoc").val();
    if (hofiNoc == "") {
      $("label#hofiNoc_error").show();
      $("input#hofiNoc").focus();
      return false;
    }

    var valueNocturno = $("input#valueNocturno").val();
    if (valueNocturno == "") {
      $("label#valueNocturno_error").show();
      $("input#valueNocturno").focus();
      return false;
    }

     user=1;
      updateRececart(user,arrRececart());
      
  });
});
//********************** */

//********************SELECCIONAR ITEMS DE RECECART Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectRececart(){
  var codeOper = $("select#codeOperator").val();
  var receptivo = $("input#receptivo").val();
  var codeHotel = $("select#codeHotel").val();
  var zona = $("input#zona").val();
  var hoinDiu = $("input#hoinDiu").val();
  var hofiDiu = $("input#hofiDiu").val();
  var valueDiurno = $("input#valueDiurno").val();
  var hoinNoc = $("input#hoinNoc").val();
  var hofiNoc = $("input#hofiNoc").val();
  var valueNocturno = $("input#valueNocturno").val();

  if (codeOper == "") {
    $("label#codeOperator_error").show();
    $("select#codeOperator").focus();
    return false;
  }

    else if (receptivo == "") {
      $("label#receptivo_error").show();
      $("input#receptivo").focus();
      return false;
    }

    else if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }
 
    else if (zona == "") {
      $("label#zona_error").show();
      $("input#zona").focus();
      return false;
    }

    else if (hoinDiu == "") {
      $("label#hoinDiu_error").show();
      $("input#hoinDiu").focus();
      return false;
    }

    else if (hofiDiu == "") {
      $("label#hofiDiu_error").show();
      $("input#hofiDiu").focus();
      return false;
    }
    
    else if (valueDiurno == "") {
      $("label#valueDiurno_error").show();
      $("input#valueDiurno").focus();
      return false;
    }
    
    else if (hoinNoc == "") {
      $("label#hoinNoc_error").show();
      $("input#hoinNoc").focus();
      return false;
    }

    else if (hofiNoc == "") {
      $("label#hofiNoc_error").show();
      $("input#hofiNoc").focus();
      return false;
    }

    else if (valueNocturno == "") {
      $("label#valueNocturno_error").show();
      $("input#valueNocturno").focus();
      return false;
    }

  else{
     /* Para obtener el valor */
     var user=1;
      var hotel = document.getElementById("codeHotel");
      var selectedH = hotel.options[hotel.selectedIndex].text;

      var operator = document.getElementById("codeOperator");
      var selectedO = operator.options[operator.selectedIndex].text;
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("codeOperator_error").style.display="none";
    document.getElementById("receptivo_error").style.display="none";
    document.getElementById("codeHotel_error").style.display="none";
    document.getElementById("zona_error").style.display="none";
    document.getElementById("hoinDiu_error").style.display="none";
    document.getElementById("hofiDiu_error").style.display="none";
    document.getElementById("valueDiurno_error").style.display="none";
    document.getElementById("hoinNoc_error").style.display="none";
    document.getElementById("hofiNoc_error").style.display="none";
    document.getElementById("valueNocturno_error").style.display="none";
    addRececart(codeOper,selectedO,receptivo,codeHotel,selectedH,zona,hoinDiu,hofiDiu,valueDiurno,hoinNoc,hofiNoc,valueNocturno,user);  
  }
 
}
//**************FIN ADD rececart***************************** */


//*** FIN RECECART***

//*** RECESAMA ***
//***Fomr insert recesama***
$(function() {
  $('.error').hide();
  $("#btnSaveRecesama").click(function() {
      //validate fields

      var codeOper = $("select#codeOperator").val();
    if (codeOper == "") {
      $("label#codeOperator_error").show();
      $("select#codeOperator").focus();
      return false;
    }

      var receptivo = $("input#receptivo").val();
    if (receptivo == "") {
      $("label#receptivo_error").show();
      $("input#receptivo").focus();
      return false;
    }

      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var zona = $("input#zona").val();
    if (zona == "") {
      $("label#zona_error").show();
      $("input#zona").focus();
      return false;
    }

    var hoinDiu = $("input#hoinDiu").val();
    if (hoinDiu == "") {
      $("label#hoinDiu_error").show();
      $("input#hoinDiu").focus();
      return false;
    }

    var hofiDiu = $("input#hofiDiu").val();
    if (hofiDiu == "") {
      $("label#hofiDiu_error").show();
      $("input#hofiDiu").focus();
      return false;
    }
    var valueDiurno = $("input#valueDiurno").val();
    if (valueDiurno == "") {
      $("label#valueDiurno_error").show();
      $("input#valueDiurno").focus();
      return false;
    }

    var hoinNoc = $("input#hoinNoc").val();
    if (hoinNoc == "") {
      $("label#hoinNoc_error").show();
      $("input#hoinNoc").focus();
      return false;
    }

    var hofiNoc = $("input#hofiNoc").val();
    if (hofiNoc == "") {
      $("label#hofiNoc_error").show();
      $("input#hofiNoc").focus();
      return false;
    }

    var valueNocturno = $("input#valueNocturno").val();
    if (valueNocturno == "") {
      $("label#valueNocturno_error").show();
      $("input#valueNocturno").focus();
      return false;
    }

     user=1;
    insertRecesama(user,arrRecesama());
    
      
  });
});
//********************** */

//***Fomr update recesama***
$(function() {
  $('.error').hide();
  $("#btnUpdateRecesama").click(function() {
      //validate fields
      var codeOper = $("select#codeOperator").val();
    if (codeOper == "") {
      $("label#codeOperator_error").show();
      $("select#codeOperator").focus();
      return false;
    }

      var receptivo = $("input#receptivo").val();
    if (receptivo == "") {
      $("label#receptivo_error").show();
      $("input#receptivo").focus();
      return false;
    }

      var codeHotel = $("select#codeHotel").val();
    if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }

    var zona = $("input#zona").val();
    if (zona == "") {
      $("label#zona_error").show();
      $("input#zona").focus();
      return false;
    }

    var hoinDiu = $("input#hoinDiu").val();
    if (hoinDiu == "") {
      $("label#hoinDiu_error").show();
      $("input#hoinDiu").focus();
      return false;
    }

    var hofiDiu = $("input#hofiDiu").val();
    if (hofiDiu == "") {
      $("label#hofiDiu_error").show();
      $("input#hofiDiu").focus();
      return false;
    }
    var valueDiurno = $("input#valueDiurno").val();
    if (valueDiurno == "") {
      $("label#valueDiurno_error").show();
      $("input#valueDiurno").focus();
      return false;
    }

    var hoinNoc = $("input#hoinNoc").val();
    if (hoinNoc == "") {
      $("label#hoinNoc_error").show();
      $("input#hoinNoc").focus();
      return false;
    }

    var hofiNoc = $("input#hofiNoc").val();
    if (hofiNoc == "") {
      $("label#hofiNoc_error").show();
      $("input#hofiNoc").focus();
      return false;
    }

    var valueNocturno = $("input#valueNocturno").val();
    if (valueNocturno == "") {
      $("label#valueNocturno_error").show();
      $("input#valueNocturno").focus();
      return false;
    }

     user=1;
      updateRecesama(user,arrRecesama());
      
  });
});
//********************** */

//********************SELECCIONAR ITEMS DE RECESAMA Y AÑADIR A TABLA DINAMICA VALIDANDO CAMPOS VACIOS *****************/
function addSelectRecesama(){
  var codeOper = $("select#codeOperator").val();
  var receptivo = $("input#receptivo").val();
  var codeHotel = $("select#codeHotel").val();
  var zona = $("input#zona").val();
  var hoinDiu = $("input#hoinDiu").val();
  var hofiDiu = $("input#hofiDiu").val();
  var valueDiurno = $("input#valueDiurno").val();
  var hoinNoc = $("input#hoinNoc").val();
  var hofiNoc = $("input#hofiNoc").val();
  var valueNocturno = $("input#valueNocturno").val();

  if (codeOper == "") {
    $("label#codeOperator_error").show();
    $("select#codeOperator").focus();
    return false;
  }

    else if (receptivo == "") {
      $("label#receptivo_error").show();
      $("input#receptivo").focus();
      return false;
    }

    else if (codeHotel == "") {
      $("label#codeHotel_error").show();
      $("select#codeHotel").focus();
      return false;
    }
 
    else if (zona == "") {
      $("label#zona_error").show();
      $("input#zona").focus();
      return false;
    }

    else if (hoinDiu == "") {
      $("label#hoinDiu_error").show();
      $("input#hoinDiu").focus();
      return false;
    }

    else if (hofiDiu == "") {
      $("label#hofiDiu_error").show();
      $("input#hofiDiu").focus();
      return false;
    }
    
    else if (valueDiurno == "") {
      $("label#valueDiurno_error").show();
      $("input#valueDiurno").focus();
      return false;
    }
    
    else if (hoinNoc == "") {
      $("label#hoinNoc_error").show();
      $("input#hoinNoc").focus();
      return false;
    }

    else if (hofiNoc == "") {
      $("label#hofiNoc_error").show();
      $("input#hofiNoc").focus();
      return false;
    }

    else if (valueNocturno == "") {
      $("label#valueNocturno_error").show();
      $("input#valueNocturno").focus();
      return false;
    }

  else{
     /* Para obtener el valor */
     var user=1;
      var hotel = document.getElementById("codeHotel");
      var selectedH = hotel.options[hotel.selectedIndex].text;

      var operator = document.getElementById("codeOperator");
      var selectedO = operator.options[operator.selectedIndex].text;
    //var cod = document.getElementById("codFlight").value;
    document.getElementById("codeOperator_error").style.display="none";
    document.getElementById("receptivo_error").style.display="none";
    document.getElementById("codeHotel_error").style.display="none";
    document.getElementById("zona_error").style.display="none";
    document.getElementById("hoinDiu_error").style.display="none";
    document.getElementById("hofiDiu_error").style.display="none";
    document.getElementById("valueDiurno_error").style.display="none";
    document.getElementById("hoinNoc_error").style.display="none";
    document.getElementById("hofiNoc_error").style.display="none";
    document.getElementById("valueNocturno_error").style.display="none";
    addRecesama(codeOper,selectedO,receptivo,codeHotel,selectedH,zona,hoinDiu,hofiDiu,valueDiurno,hoinNoc,hofiNoc,valueNocturno,user);  
  }
 
}
//**************FIN ADD recesama***************************** */


//*** FIN RECESAMA***
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
//********************CONSULTAR VIAJEROS DINAMICAMENTE SEGUN NUMERO DE IDENTIFICACION PARA LIQUIDACION *****************/
$(document).ready(function () {
  $("#idTraveler").keyup(function () {
      var value = $(this).val();
      var numCharacter= value.length;

      if(numCharacter>1){
        showTraveler(value,"liquidacTraveler");
        //alert(value);
      }
      
  });
});
//***************************************************************************************************** */
//PARA DETALLE DE BLOQUEO
//********************CONSULTAR VIAJEROS DINAMICAMENTE SEGUN NUMERO DE IDENTIFICACION PARA DETALLE BLOQUEO *****************/
$(document).ready(function () {
  $("#idTravelerlock").keyup(function () {
      var value = $(this).val();
      var numCharacter= value.length;

      if(numCharacter>1){
        //showTraveler(value,"bloqdeta");
        alert(value);
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
//******** remove rows from pivot table containing items (destination) */
$(document).on('click', '.deleteDest', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
});
//****************************************************************************** */
//******** remove rows from pivot table containing items (Tariandr) */
$(document).on('click', '.deleteTariandr', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
  //alert('Hola');
});
//****************************************************************************** */
//******** remove rows from pivot table taricart items (Tariandr) */
$(document).on('click', '.deleteTaricart', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
  //alert('Hola');
});
//****************************************************************************** */
//******** remove rows from pivot table taricart items (Tariandr) */
$(document).on('click', '.deleteTarisama', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
  //alert('Hola');
});
//****************************************************************************** */
//******** remove rows from pivot table containing items (Netoandr) */
$(document).on('click', '.deleteNetoandr', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
  //alert('Hola');
});
//****************************************************************************** */
//******** remove rows from pivot table containing items (NETOCART) */
$(document).on('click', '.deleteNetocart', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
  //alert('Hola');
});
//****************************************************************************** */
/******** remove rows from pivot table containing items (Netosama) */
$(document).on('click', '.deleteNetosama', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
  //alert('Hola');
});
//****************************************************************************** */
//******** remove rows from pivot table containing items (BLOQDETA) */
$(document).on('click', '.deleteBloqdeta', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
  //alert('Hola');
});
//****************************************************************************** */
/******** remove rows from pivot table containing items (RECEANDR) */
$(document).on('click', '.deleteReceandr', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
  //alert('Hola');
});
//****************************************************************************** */
/******** remove rows from pivot table containing items (RECECART) */
$(document).on('click', '.deleteRececart', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
  //alert('Hola');
});
//****************************************************************************** */
/******** remove rows from pivot table containing items (RECESAMA) */
$(document).on('click', '.deleteRecesama', function (event) {
  event.preventDefault();
  $(this).closest('tr').remove();
  //alert('Hola');
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

  //*************** Añadir elementos de la tabla dinamica viajero a un array */
function arrDestination(){
  let destination = [];
  document.querySelectorAll('.table-Destination tbody tr').forEach(function(e){
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
    destination.push(fila);
  });
  //console.log(flight);
  return destination;
  }
  //**************************************************************************** */

  //*************** Añadir elementos de la tabla dinamica tariandr a un array */
function arrTariandr(){
  let tariandr = [];
  document.querySelectorAll('.table-tariAndr tbody tr').forEach(function(e){
    let fila = {
      codeHotel: e.querySelector('.codeHotel').innerText,
      alim: e.querySelector('.alim').innerText,
      sencilla: e.querySelector('.sencilla').innerText,
      doble: e.querySelector('.doble').innerText,
      triple: e.querySelector('.triple').innerText,
      cuadruple: e.querySelector('.cuadruple').innerText,
      nino: e.querySelector('.nino').innerText,
      dateInVi: e.querySelector('.dateInVi').innerText,
      dateFiVi: e.querySelector('.dateFiVi').innerText,
      dateInEx: e.querySelector('.dateInEx').innerText,
      dateFiEx: e.querySelector('.dateFiEx').innerText
      
    };
    tariandr.push(fila);
  });
  console.log(tariandr);
  return tariandr;
  }
  //**************************************************************************** */
   //*************** Añadir elementos de la tabla dinamica taricart a un array */
function arrTaricart(){
  let taricart = [];
  document.querySelectorAll('.table-tariCart tbody tr').forEach(function(e){
    let fila = {
      codeHotel: e.querySelector('.codeHotel').innerText,
      alim: e.querySelector('.alim').innerText,
      sencilla: e.querySelector('.sencilla').innerText,
      doble: e.querySelector('.doble').innerText,
      triple: e.querySelector('.triple').innerText,
      cuadruple: e.querySelector('.cuadruple').innerText,
      nino: e.querySelector('.nino').innerText,
      dateInVi: e.querySelector('.dateInVi').innerText,
      dateFiVi: e.querySelector('.dateFiVi').innerText,
      dateInEx: e.querySelector('.dateInEx').innerText,
      dateFiEx: e.querySelector('.dateFiEx').innerText
      
    };
    taricart.push(fila);
  });
  console.log(taricart);
  return taricart;
  }
  //**************************************************************************** */
  //*************** Añadir elementos de la tabla dinamica tarisama a un array */
function arrTarisama(){
  let tarisama = [];
  document.querySelectorAll('.table-tariSama tbody tr').forEach(function(e){
    let fila = {
      codeHotel: e.querySelector('.codeHotel').innerText,
      alim: e.querySelector('.alim').innerText,
      sencilla: e.querySelector('.sencilla').innerText,
      doble: e.querySelector('.doble').innerText,
      triple: e.querySelector('.triple').innerText,
      cuadruple: e.querySelector('.cuadruple').innerText,
      nino: e.querySelector('.nino').innerText,
      dateInVi: e.querySelector('.dateInVi').innerText,
      dateFiVi: e.querySelector('.dateFiVi').innerText,
      dateInEx: e.querySelector('.dateInEx').innerText,
      dateFiEx: e.querySelector('.dateFiEx').innerText
      
    };
    tarisama.push(fila);
  });
  console.log(tarisama);
  return tarisama;
  }
  //**************************************************************************** */

   //*************** Añadir elementos de la tabla dinamica netoandr a un array */
function arrNetoandr(){
  let netoandr = [];
  document.querySelectorAll('.table-netoAndr tbody tr').forEach(function(e){
    let fila = {
      codeHotel: e.querySelector('.codeHotel').innerText,
      alim: e.querySelector('.alim').innerText,
      sencilla: e.querySelector('.sencilla').innerText,
      doble: e.querySelector('.doble').innerText,
      triple: e.querySelector('.triple').innerText,
      cuadruple: e.querySelector('.cuadruple').innerText,
      nino: e.querySelector('.nino').innerText,
      dateInVi: e.querySelector('.dateInVi').innerText,
      dateFiVi: e.querySelector('.dateFiVi').innerText,
      dateInEx: e.querySelector('.dateInEx').innerText,
      dateFiEx: e.querySelector('.dateFiEx').innerText
      
    };
    netoandr.push(fila);
  });
  console.log(netoandr);
  return netoandr;
  }
  //**************************************************************************** */

  //*************** Añadir elementos de la tabla dinamica netocart a un array */
function arrNetocart(){
  let netocart = [];
  document.querySelectorAll('.table-netoCart tbody tr').forEach(function(e){
    let fila = {
      codeHotel: e.querySelector('.codeHotel').innerText,
      alim: e.querySelector('.alim').innerText,
      sencilla: e.querySelector('.sencilla').innerText,
      doble: e.querySelector('.doble').innerText,
      triple: e.querySelector('.triple').innerText,
      cuadruple: e.querySelector('.cuadruple').innerText,
      nino: e.querySelector('.nino').innerText,
      dateInVi: e.querySelector('.dateInVi').innerText,
      dateFiVi: e.querySelector('.dateFiVi').innerText,
      dateInEx: e.querySelector('.dateInEx').innerText,
      dateFiEx: e.querySelector('.dateFiEx').innerText
      
    };
    netocart.push(fila);
  });
  console.log(netocart);
  return netocart;
  }
  //**************************************************************************** */

   //*************** Añadir elementos de la tabla dinamica netosama a un array */
function arrNetosama(){
  let netosama = [];
  document.querySelectorAll('.table-netoSama tbody tr').forEach(function(e){
    let fila = {
      codeHotel: e.querySelector('.codeHotel').innerText,
      alim: e.querySelector('.alim').innerText,
      sencilla: e.querySelector('.sencilla').innerText,
      doble: e.querySelector('.doble').innerText,
      triple: e.querySelector('.triple').innerText,
      cuadruple: e.querySelector('.cuadruple').innerText,
      nino: e.querySelector('.nino').innerText,
      dateInVi: e.querySelector('.dateInVi').innerText,
      dateFiVi: e.querySelector('.dateFiVi').innerText,
      dateInEx: e.querySelector('.dateInEx').innerText,
      dateFiEx: e.querySelector('.dateFiEx').innerText
      
    };
    netosama.push(fila);
  });
  console.log(netosama);
  return netosama;
  }
  //**************************************************************************** */

//*************** Añadir elementos de la tabla dinamica receandr a un array */
function arrReceandr(){
  let receandr = [];
  document.querySelectorAll('.table-receAndr tbody tr').forEach(function(e){
    let fila = {
      codeOperator: e.querySelector('.codeOperator').innerText,
      receptivo: e.querySelector('.receptivo').innerText,
      codeHotel: e.querySelector('.codeHotel').innerText,
      zona: e.querySelector('.zona').innerText,
      hoinDiu: e.querySelector('.hoinDiu').innerText,
      hofiDiu: e.querySelector('.hofiDiu').innerText,
      valueDiurno: e.querySelector('.valueDiurno').innerText,
      hoinNoc: e.querySelector('.hoinNoc').innerText,
      hofiNoc: e.querySelector('.hofiNoc').innerText,
      valueNocturno: e.querySelector('.valueNocturno').innerText
    };
    receandr.push(fila);
  });
  console.log(receandr);
  return receandr;
  }
  //**************************************************************************** */

  //*************** Añadir elementos de la tabla dinamica rececart a un array */
function arrRececart(){
  let rececart = [];
  document.querySelectorAll('.table-receCart tbody tr').forEach(function(e){
    let fila = {
      codeOperator: e.querySelector('.codeOperator').innerText,
      receptivo: e.querySelector('.receptivo').innerText,
      codeHotel: e.querySelector('.codeHotel').innerText,
      zona: e.querySelector('.zona').innerText,
      hoinDiu: e.querySelector('.hoinDiu').innerText,
      hofiDiu: e.querySelector('.hofiDiu').innerText,
      valueDiurno: e.querySelector('.valueDiurno').innerText,
      hoinNoc: e.querySelector('.hoinNoc').innerText,
      hofiNoc: e.querySelector('.hofiNoc').innerText,
      valueNocturno: e.querySelector('.valueNocturno').innerText
    };
    rececart.push(fila);
  });
  console.log(rececart);
  return rececart;
  }
  //**************************************************************************** */

  //*************** Añadir elementos de la tabla dinamica recesama a un array */
function arrRecesama(){
  let recesama = [];
  document.querySelectorAll('.table-receSama tbody tr').forEach(function(e){
    let fila = {
      codeOperator: e.querySelector('.codeOperator').innerText,
      receptivo: e.querySelector('.receptivo').innerText,
      codeHotel: e.querySelector('.codeHotel').innerText,
      zona: e.querySelector('.zona').innerText,
      hoinDiu: e.querySelector('.hoinDiu').innerText,
      hofiDiu: e.querySelector('.hofiDiu').innerText,
      valueDiurno: e.querySelector('.valueDiurno').innerText,
      hoinNoc: e.querySelector('.hoinNoc').innerText,
      hofiNoc: e.querySelector('.hofiNoc').innerText,
      valueNocturno: e.querySelector('.valueNocturno').innerText
    };
    recesama.push(fila);
  });
  console.log(recesama);
  return recesama;
  }
  //**************************************************************************** */
  //*************** Añadir elementos de la tabla dinamica bloqdeta a un array */
function arrBloqdeta(){
  let bloqdeta = [];
  document.querySelectorAll('.table-bloqdeta tbody tr').forEach(function(e){
    let fila = {
      code: e.querySelector('.code').innerText,
      liquidac: e.querySelector('.liquidac').innerText,
      id: e.querySelector('.id').innerText,
      name: e.querySelector('.name').innerText,
      lastName: e.querySelector('.lastName').innerText,
      dateN: e.querySelector('.dateN').innerText,
    };
    bloqdeta.push(fila);
  });
  console.log(bloqdeta);
  return bloqdeta;
  }
  //**************************************************************************** */

//****************FORMATO DE MONEDA  */
const formatter = new Intl.NumberFormat('es-CO', {
  style: 'currency',
  currency: 'COP',
  minimumFractionDigits: 0
});
//****************************************** */

