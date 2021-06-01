<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-edit"></i> Update Users</h2>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">

                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <div class="customize-input float-right">
                    <a href="<?= base_url('admin/users') ?>" class="btn text-center custom-select-set form-control btn-danger border-0 custom-shadow custom-radius"><i class="fa fa-backward"></i> Kembali</a>

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

        </div>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Data Users</h4>
                    <form class="mt-3" action="<?= base_url('admin/users/update_users_aksi') ?>" method="post" enctype="multipart/form-data"> 
                         <div class="form-group">
                        
                            <input type="hidden" name="id_users" value="<?= $row->id_users ?>">
                           
            
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="text" class="form-control" name="email" aria-describedby="name" value="<?= $row->email ?>" readonly>                        
                            <?= form_error('email', '<small class="text-danger" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nama</label>
                            <input type="text" class="form-control" name="nama" aria-describedby="name" value="<?= $row->nama ?>">                        
                            <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">No. HP</label>
                            <input type="text" class="form-control" name="no_hp" aria-describedby="name" value="<?= $row->no_hp ?>">                        
                            <?= form_error('no_hp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">No. KTP</label>
                            <input type="text" class="form-control" name="no_ktp" aria-describedby="name" value="<?= $row->no_ktp ?>">                        
                            <?= form_error('no_ktp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" aria-describedby="name" value="<?= $row->alamat ?>">                        
                            <?= form_error('alamat', '<small class="text-danger" style="color: red;">','</small>'); ?>
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