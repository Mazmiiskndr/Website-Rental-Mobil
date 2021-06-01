<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-user-circle"></i> Data Supir</h2>
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
                            <th scope="col">Nama Supir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Lembur</th>
                            <th scope="col">Tgl Lahir</th>
                            <th scope="col">No. KTP</th>
                            <th scope="col">No. HP</th>


                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($supir as $row){
                            ?>
                            <tr class="text-dark">
                                <th scope="row"><?= $no++ ?>.</th>
                                <td><img src="<?= base_url(). 'assets/uploads/supir/'.$row->gambar ?>" width="30px"></td>
                                <td><?= $row->nama_supir ?></td>
                                <td><?= $row->alamat ?></td>
                                <td><?= $row->lembur ?></td>
                                <td><?= $row->tgl_lahir ?></td>
                                <td><?= $row->no_ktp ?></td>
                                <td><?= $row->no_hp ?></td>
                                <td>
                                    <?= anchor('admin/supir/edit_supir/'.$row->id_supir,'<div class="btn btn-circle btn-rounded btn-primary"><i class="fas fa-edit"></i></div>') ?>
                                    <?= anchor('admin/supir/delete_supir/'.$row->id_supir,'<div class="btn btn-circle btn-rounded btn-danger"><i class="fas fa-trash"></i></div>') ?>
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
                <h4 class="card-title">Tambah Data Supir</h4>
                <form class="mt-3" action="<?= base_url('admin/supir/tambah_supir') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-control-label">Nama Supir</label>
                        <input type="text" class="form-control" name="nama_supir" aria-describedby="name"
                        placeholder="Nama Supir">
                        <?= form_error('nama_supir', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" aria-describedby="name"
                        placeholder="Alamat">


                        <?= form_error('alamat', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Lembur</label>
                        </div>
                        <select name="lembur" class="custom-select" id="inputGroupSelect01">
                            <option selected>Pilih Lembur...</option>

                            <option value="Lembur">Lembur</option>
                            <option value="Tidak Lembur">Tidak Lembur</option>


                        </select>

                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Tgl Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" aria-describedby="name"
                        >


                        <?= form_error('tgl_lahir', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">No. KTP</label>
                        <input type="text" class="form-control" name="no_ktp" aria-describedby="name"
                        placeholder="No. KTP">


                        <?= form_error('no_ktp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">No. HP</label>
                        <input type="text" class="form-control" name="no_hp" aria-describedby="name"
                        placeholder="No. HP">


                        <?= form_error('no_hp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    

                    <div class="form-group">
                        <label class="form-control-label">Gambar Supir</label>
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