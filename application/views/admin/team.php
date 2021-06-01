<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-user-secret"></i> Data Team</h2>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">

                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">

            </div>
        </div>
    </div>
</div><!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <!-- Start Sales Charts Section -->
    <!-- *************************************************************** -->
    <div class="row">
     <div class="col-8">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="card">

            <div class="table-responsive shadow-sm">
                <table class="table table-hover table-borderless">
                    <thead>
                        <tr class="table-dark text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($team as $row){
                            ?>
                            <tr class="text-dark">
                                <th scope="row"><?= $no++ ?>.</th>
                                <td><img src="<?= base_url(). 'assets/uploads/team/'.$row->gambar ?>" width="30px"></td>
                                <td><?= $row->nama?></td>
                                <td><?= $row->jabatan ?></td>
                                <td><?= $row->email ?></td>
                                <td>
                                    <?= anchor('admin/team/detail_team/'.$row->id_team,'<div class="btn btn-circle btn-rounded btn-dark"><i class="fas fa-eye"></i></div>') ?>
                                    <?= anchor('admin/team/edit_team/'.$row->id_team,'<div class="btn btn-circle btn-rounded btn-primary"><i class="fas fa-edit"></i></div>') ?>
                                    <?= anchor('admin/team/delete_team/'.$row->id_team,'<div class="btn btn-circle btn-rounded btn-danger"><i class="fas fa-trash"></i></div>') ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Team</h4>
                <form class="mt-3" action="<?= base_url('admin/team/tambah_team') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-control-label">Nama Team</label>
                        <input type="text" class="form-control" name="nama" aria-describedby="name"
                        placeholder="Nama Team">
                        <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" aria-describedby="name"
                        placeholder="Jabatan">


                        <?= form_error('jabatan', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="text" class="form-control" name="email" aria-describedby="name"
                        placeholder="Email">


                        <?= form_error('email', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                
                    <div class="form-group">
                        <label class="form-control-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" placeholder="Deskripsi"></textarea>

                    </div>
                    

                    <div class="form-group">
                        <label class="form-control-label">Gambar Team</label>
                        <input type="file" id="file-input" name="gambar" class="form-control-file" value="<?= set_value('gambar') ?>">     
                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <button type="submit" class="btn btn-info btn-rounded">Tambah</button>
                            <button type="reset" class="btn btn-dark btn-rounded">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
<!-- *************************************************************** -->
<!-- End Sales Charts Section -->

</div>