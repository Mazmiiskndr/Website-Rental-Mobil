<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-edit"></i> Update Supir</h2>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <div class="customize-input float-right">
                    <a href="<?= base_url('admin/supir') ?>" class="btn text-center custom-select-set form-control btn-danger border-0 custom-shadow custom-radius"><i class="fa fa-backward"></i> Kembali</a>
                    
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
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active"> <img class="img-fluid"
                                    src="<?= base_url(). 'assets/uploads/supir/'.$row->gambar ?>" alt="First slide"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= anchor('admin/supir/delete_supir/'.$row->id_supir,'<div class="btn btn-circle btn-rounded btn-danger mb-3"><i class="fas fa-trash"></i></div>')?>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Data Supir</h4>
                            <form class="mt-3" action="<?= base_url('admin/supir/update_supir_aksi') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-control-label">Nama Supir</label>
                                    <input type="hidden" name="id_supir" value="<?= $row->id_supir ?>">
                                    <input type="text" class="form-control" name="nama_supir" aria-describedby="name" value="<?= $row->nama_supir ?>">                        
                                    <?= form_error('nama_supir', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" aria-describedby="name" value="<?= $row->alamat ?>">                        
                                    <?= form_error('alamat', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Tgl Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" aria-describedby="name" value="<?= $row->tgl_lahir ?>">                        
                                    <?= form_error('tgl_lahir', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">No. KTP</label>
                                    <input type="text" class="form-control" name="no_ktp" aria-describedby="name" value="<?= $row->no_ktp ?>">                        
                                    <?= form_error('no_ktp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">No. HP</label>
                                    <input type="text" class="form-control" name="no_hp" aria-describedby="name" value="<?= $row->no_hp ?>">                        
                                    <?= form_error('no_hp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Lembur</label>
                                    </div>
                                    <select name="lembur" class="custom-select" id="inputGroupSelect01">
                                        <option selected><?= $row->lembur ?></option>
                                        
                                        <option value="Lembur">Lembur</option>
                                        <option value="Tidak Lembur">Tidak Lembur</option>
                                        
                                        
                                    </select>
                                    
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="form-control-label">Gambar Supir</label>
                                    <input type="file" id="file-input" name="gambar" class="form-control-file" value="<?= set_value('gambar') ?>">     
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
