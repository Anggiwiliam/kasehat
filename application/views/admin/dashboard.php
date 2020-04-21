   <!DOCTYPE html>
   <html>
   <head>
     <title></title>
     <style>
       .card {border-radius: 10px;
            }
     </style>
   </head>
   <body>
    <!--  <div class="container-fluid col-md-12">
          
          <div class="row ml-auto">
            <div class="col-md-6 mt-3">
            <div class="card">
               <a href="<?php echo base_url('Rutin') ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-fw fa-money-check-alt" width="100px"></i><br>RUTIN</a> </a>
            </div>
          </div>
           <div class="col-md-6 mt-3">
                <div class="card">
             <a href="<?php echo base_url('Non_rutin')?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class="fas fas-fw fa-tachometer-alt" width="100px"></i><br>NON RUTIN</a> </a>
              </div>
           </div>
           <div class="col-md-6 mt-3">
              <div class="card">
                <a href="<?php echo base_url('info') ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-fw fas fa-info-circle" width="100px"></i><br>JADWAL</a> </a>
              </div>   
            </div>
             <div class="col-md-6 mt-3">
              <div class="card">
                <a href="<?php echo base_url('info') ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-fw fas fa-info-circle" width="100px"></i><br>JOB DESK</a> </a>
              </div>   
            </div>   
   </div> -->
    <div class="row col-md-12">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?php echo base_url('Rutin') ?>" role="button" aria-pressed="true">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="text-center">
                     <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                      <div class="text-xs text-center font-weight-bold text-primary text-uppercase mb-1">Job Desk</div>
                       <div class="h5 text-center mb-0 font-weight-bold text-gray-800">RUTIN</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
             </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="<?php echo base_url('Non_rutin') ?>" role="button" aria-pressed="true">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="text-center">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs text-center font-weight-bold text-success text-uppercase mb-1">Job Desk</div>
                        <div class="h5 mb-0 text-center font-weight-bold text-gray-800">NON RUTIN</div>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="" data-toggle="modal" data-target="#exampleModal" role="button" aria-pressed="true" >
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="text-center">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs text-center font-weight-bold text-info text-uppercase mb-1">Report</div>
                          <div class="h5 mb-0 text-center font-weight-bold text-gray-800">JADWAL</div>
                           <div class="col">
                           </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

             <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="" data-toggle="modal" data-target="#exampleModall" role="button" aria-pressed="true">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="text-center">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs text-center font-weight-bold text-warning text-uppercase mb-1">Report</div>
                        <div class="h5 mb-0 text-center font-weight-bold text-gray-800">JOB DESK</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
   </body>
   </html>
  