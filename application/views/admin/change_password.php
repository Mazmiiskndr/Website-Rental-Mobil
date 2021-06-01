<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-unlock-alt"></i> Change Password</h2>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                
            </nav>
        </div>
    </div>
    <div class="col-5 align-self-center">
        <div class="customize-input float-right">
            <div class="customize-input float-right">
          
            
        </div>
        </div>
    </div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
     <div class="col-md-6">
         <?= $this->session->flashdata('pesan'); ?>
     </div>

<!-- Start Sales Charts Section -->
<!-- *************************************************************** -->
<div class="row">
    
       
     
        

        <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Change Password</h4>
                            <form class="mt-3" action="<?= base_url('admin/profile/ganti_password_aksi') ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label class="form-control-label">New Password</label>
                                    <input type="password" class="form-control" name="pass_baru" aria-describedby="name"
                                        >
                                     <?= form_error('pass_baru', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Repeat Password</label>
                                
                                    <input type="password" class="form-control" name="ulang_pass" aria-describedby="name" >                        
                                     <?= form_error('ulang_pass', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                               
                                
                                
                                

                                
                                <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info btn-rounded">Change</button>
                                        <button type="reset" class="btn btn-dark btn-rounded">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        
    </div>
       
    
</div>

                


</div>
<!-- *************************************************************** -->
<!-- End Sales Charts Section -->

</div>
