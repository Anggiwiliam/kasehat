


<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            <div class="col-lg-12">

                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p>email atau Password anda salah</p>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');?>
                  <form method="post" action="<?php  echo base_url('auth/login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="email">
                      <?php echo form_error('email','<div class="text_danger small">','</div'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="Enter Password" placeholder="Password" name="password">
                      <?php echo form_error('password','<div class="text_danger small">','</div'); ?>
                    </div>
                    
                  <div class="col-sm-5 ml-auto">
                     <button type="submit" class="btn btn-primary form-control">Submit</button>
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