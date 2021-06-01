<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-university"></i> Data Bank</h2>
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
                            <h4 class="card-title">Data Bank</h4>
                            <form class="mt-3" action="<?= base_url('admin/bank/update_bank_aksi') ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label class="form-control-label">Nama Bank</label>
                                    <input type="text" class="form-control" name="nama_bank" aria-describedby="name"
                                        value="<?= $nama_bank ?>">
                                     <?= form_error('nama_bank', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Nama Rekening</label>
                                    <input type="hidden" name="id_bank" value="<?= $id_bank ?>">
                                    <input type="text" class="form-control" name="nama_rekening" aria-describedby="name" value="<?= $nama_rekening ?>">                        
                                     <?= form_error('nama_rekening', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Nomor Rekening</label>
                                    <input type="text" class="form-control" name="nomor_rekening" aria-describedby="name"
                                        value="<?= $nomor_rekening ?>">
                                     <?= form_error('nomor_rekening', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                
                                
                                

                                
                                <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info btn-rounded">Update</button>
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
