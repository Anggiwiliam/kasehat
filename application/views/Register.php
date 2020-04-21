


<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-7 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            <div class="col-lg-12">

                <div class="p-5">
                   
                  <div class="text-left">
                    <h1 class="h4 text-gray-900 mb-4">User Register</h1>
                  </div>
                  
                  <form action="<?php  echo base_url().'register/daftar' ?>" method="post" enctype="multipart/form-data">
                     <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="nama" placeholder="Isikan Nama">
                        </div>
                         </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NoNpwp</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" name="nonpwp" placeholder="Isikan No Npwp">
                        </div>
                         </div>
                          <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Foto</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control form-control-sm" id="colFormLabelSm" name="foto" placeholder="Isikan No Npwp">
                        </div>
                         </div>        
                                        
                        <fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-label col-sm-3 pt-0">Jenis Layanan</legend>
                          <div class="col-sm-8">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_layanan" id="gridRadios1" value="normal" checked>
                              <label class="form-check-label" for="gridRadios1">
                                Normal
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_layanan" id="gridRadios2" value="gold">
                              <label class="form-check-label" for="gridRadios2">
                                Gold
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jenis_layanan" id="gridRadios3" value="platinum" checked="">
                              <label class="form-check-label" for="gridRadios3">
                                Platinum
                              </label>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                       <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control form-control-sm" id="colFormLabelSm" name="password" placeholder="password">
                        </div>
                         </div>
                      <div class="col-sm-5 ml-auto">
                         <button type="submit" class="btn btn-primary form-control">Register</button>
                      </div>
                
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  

</body>

</html>
