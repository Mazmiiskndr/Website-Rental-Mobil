<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-edit"></i> Update Type Mobil</h2>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                
            </nav>
        </div>
    </div>
    <div class="col-5 align-self-center">
        <div class="customize-input float-right">
            <div class="customize-input float-right">
            <a href="<?= base_url('admin/mobil/type_mobil') ?>" class="btn text-center custom-select-set form-control btn-danger border-0 custom-shadow custom-radius"><i class="fa fa-backward"></i> Kembali</a>
            
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

<!-- Start Sales Charts Section -->
<!-- *************************************************************** -->
<div class="row">
    
        <?= $this->session->flashdata('pesan'); ?>
        <?php foreach($detail as $row) { ?>
        

        <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Data Type Mobil</h4>
                            <form class="mt-3" action="<?= base_url('admin/mobil/update_type_mobil_aksi') ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label class="form-control-label">Kode Type</label>
                                    <input type="hidden" name="id_type" value="<?= $row->id_type ?>">
                                    <input type="text" class="form-control" name="kode_type" aria-describedby="name" value="<?= $row->kode_type ?>">                        
                                     <?= form_error('kode_type', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Nama Type</label>
                                    <input type="text" class="form-control" name="nama_type" aria-describedby="name"
                                        value="<?= $row->nama_type ?>">
                                     <?= form_error('nama_type', '<small class="text-danger" style="color: red;">','</small>'); ?>
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
        <?php } ?>
    
</div>

                


</div>
<!-- *************************************************************** -->
<!-- End Sales Charts Section -->

</div>