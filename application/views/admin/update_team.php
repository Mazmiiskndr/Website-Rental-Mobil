<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-edit"></i> Update Team</h2>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <div class="customize-input float-right">
                    <a href="<?= base_url('admin/team') ?>" class="btn text-center custom-select-set form-control btn-danger border-0 custom-shadow custom-radius"><i class="fa fa-backward"></i> Kembali</a>
                    
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
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active"> <img class="img-fluid"
                                    src="<?= base_url(). 'assets/uploads/team/'.$row->gambar ?>" > </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= anchor('admin/team/delete_team/'.$row->id_team,'<div class="btn btn-circle btn-rounded btn-danger mb-3"><i class="fas fa-trash"></i></div>')?>
                </div>

                <div class="col-sm-8 col-md-6 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Data Team</h4>
                            <form class="mt-3" action="<?= base_url('admin/team/update_team_aksi') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-control-label">Nama Team</label>
                                    <input type="hidden" name="id_team" value="<?= $row->id_team ?>">
                                    <input type="text" class="form-control" name="nama" aria-describedby="name" value="<?= $row->nama ?>">                        
                                    <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" aria-describedby="name" value="<?= $row->jabatan ?>">                        
                                    <?= form_error('jabatan', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="text" class="form-control" name="email" aria-describedby="name" value="<?= $row->email ?>">                        
                                    <?= form_error('email', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Deskripsi" ><?= $row->deskripsi ?></textarea>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="form-control-label">Gambar Team</label>
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
