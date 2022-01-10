
    

<!-- Formulario -->

                    <form  id="formNewCompany" method="post">
                      <div class="form-row contenidoPrincipal py-0">
                        <div class="form-group col-md-4  col-lg-10 col-md-12 col-sm-12 col-12 py-1 justify-content-center">
                          <label for="inputEmail4">Codigo</label>
                          <input type="text" class="form-control inputFomulario" id="code" placeholder="Codigo" name="txbCode">
                          <!--<label class="error" for="code" id="code_error">This field is required.</label>-->
                        </div>
                        <div class="form-group col-md-4 col-lg-10 col-md-12 col-sm-12 col-12 py-1 row justify-content-center">
                          <label for="inputPassword4">Nombre</label>
                          <input type="text" class="form-control inputFomulario" id="name" placeholder="nombre" name="txbName">
                          <!--<label class="error" for="name" id="name_error">This field is required.</label>-->
                        </div>
                      </div>
                      <div class="form-row contenidoPrincipal py-0">
                        <div class="form-group col-md-6 col-lg-10 col-md-12 col-sm-12 col-12 py-1 row justify-content-center">
                          <label for="inputEmail4">Nit</label>
                          <input type="text" class="form-control inputFomulario" id="nit" placeholder="nit" name="txbNit">
                          <!--<label class="error" for="nit" id="nit_error">This field is required.</label>-->
                        </div>
                        <div class="form-group col-md-6 row justify-content-center">
                          <label for="inputPassword4">Rent</label>
                          <input type="text" class="form-control inputFomulario" id="rent" placeholder="rent" name="txbRent">
                          <!--<label class="error" for="rent" id="rent_error">This field is required.</label>-->
                        </div>
                      </div>
                      <div class="form-row contenidoPrincipal py-0">
                        <div class="form-group col-md-6 row justify-content-center">
                          <label for="inputEmail4">Direccion</label>
                          <input type="text" class="form-control inputFomulario" id="address" placeholder="nit" name="txbAddress">
                          <!--<label class="error" for="address" id="address_error">This field is required.</label>-->
                        </div>
                        <div class="form-group col-md-6 row justify-content-center ">
                          <label for="inputPassword4">PBX</label>
                          <input type="text" class="form-control inputFomulario" id="pbx" placeholder="rent" name="txbPBX">
                         <!-- <label class="error" for="pbx" id="pbx_error">This field is required.</label>-->
                        </div>
                      </div>
                      <div class="form-row contenidoPrincipal py-0">
                        <div class="form-group col-md-6 row justify-content-center">
                          <label for="inputEmail4">Celular</label>
                          <input type="text" class="form-control inputFomulario" id="mobile" placeholder="nit" name="txbMobile">
                         <!-- <label class="error" for="address" id="address_error">This field is required.</label>-->
                        </div>
                      </div>

                      <button id="btnSaveCompany" type="button" class="btn btn-primary" name="saveCompany" onclick="insertCompany()" >Guardar</button>
                    </form>
                   
                
                <!-- Formulario -->

                <script src="JS/form.js">
                    valiFieldsCompany();
                </script>