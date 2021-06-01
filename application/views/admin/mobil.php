<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-car"></i> Data Mobil</h2>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">

                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            
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
     <div class="col-8">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="card">

            <div class="table-responsive shadow-sm">
                <table class="table table-hover table-borderless">
                    <thead>
                        <tr class="table-dark text-dark">
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama Type</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                        foreach($mobil as $row){
                            ?>
                            <tr class="text-dark">
                                <th scope="row"><?= $no++ ?>.</th>
                                <td><img src="<?= base_url(). 'assets/uploads/mobil/'.$row->gambar ?>" width="70px"></td>
                                <td><?= $row->nama_type ?></td>
                                <td><?= $row->merk ?></td>
                                <td>Rp. <?= number_format($row->harga,0,',','.'); ?></td>

                                <td>
                                    <?= anchor('admin/mobil/detail_mobil/'.$row->id_mobil,'<div class="btn btn-circle btn-rounded btn-dark"><i class="fas fa-eye"></i></div>') ?>
                                    <?= anchor('admin/mobil/edit_mobil/'.$row->id_mobil,'<div class="btn btn-circle btn-rounded btn-primary"><i class="fas fa-edit"></i></div>') ?>
                                    <?= anchor('admin/mobil/delete_mobil/'.$row->id_mobil,'<div class="btn btn-circle btn-rounded btn-danger"><i class="fas fa-trash"></i></div>') ?>
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
                <h4 class="card-title">Tambah Data Mobil</h4>
                <form class="mt-3" action="<?= base_url('admin/mobil/tambah_data_mobil') ?>" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Kode Type</label>
                        </div>
                        <select name="kode_type" class="custom-select" id="inputGroupSelect01">
                            <option selected>Pilih Type...</option>
                            <?php foreach($type as $row) { ?>
                                <option value="<?= $row->kode_type ?>"><?= $row->nama_type ?></option>
                            <?php } ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Merk Mobil</label>
                        <input type="text" class="form-control" name="merk" aria-describedby="name"
                        placeholder="Nama Type">                        
                        <?= form_error('merk', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Warna Mobil</label>
                        <input type="text" class="form-control" name="warna" aria-describedby="name"
                        placeholder="Warna Mobil">
                        <?= form_error('warna', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="inlineFormInputGroup">Harga Mobil</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Rp.</div>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Harga Mobil" name="harga">
                  </div>
                  <?= form_error('harga', '<small class="text-danger" style="color: red;">','</small>'); ?>
              </div>
              <div class="form-group">
                  <label class="sr-only" for="inlineFormInputGroup">Denda Mobil</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Denda Mobil" name="denda">
              </div>
              <?= form_error('denda', '<small class="text-danger" style="color: red;">','</small>'); ?>
          </div>
          <div class="form-group">
            <label class="form-control-label">Bahan Bakar Mobil</label>
            <input type="text" class="form-control" name="bahan_bakar" aria-describedby="name"
            placeholder="Bahan Bakar Mobil">
            <?= form_error('bahan_bakar', '<small class="text-danger" style="color: red;">','</small>'); ?>
        </div>
        <div class="form-group">
            <label class="form-control-label">Transmisi Mobil</label>
            <input type="text" class="form-control" name="gear" aria-describedby="name"
            placeholder="Transmisi Mobil">
            <?= form_error('gear', '<small class="text-danger" style="color: red;">','</small>'); ?>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">AC</label>
            </div>
            <select name="ac" class="custom-select" id="inputGroupSelect01">
                <option selected>AC...</option>

                <option value="1">Tersedia</option>
                <option value="0">Tidak Tersedia</option>


            </select>

        </div>

        <div class="form-group">
            <label class="form-control-label">Mesin Mobil</label>
            <input type="text" class="form-control" name="mesin" aria-describedby="name"
            placeholder="Mesin Mobil">
            <?= form_error('mesin', '<small class="text-danger" style="color: red;">','</small>'); ?>
        </div>
        <div class="form-group">
            <label class="form-control-label">Kursi Mobil</label>
            <input type="text" class="form-control" name="kursi" aria-describedby="name"
            placeholder="Kursi Mobil">
            <?= form_error('kursi', '<small class="text-danger" style="color: red;">','</small>'); ?>
        </div>
        <div class="form-group">
            <label class="form-control-label">Tahun Mobil</label>
            <input type="text" class="form-control" name="tahun" aria-describedby="name"
            placeholder="Tahun Mobil">
            <?= form_error('tahun', '<small class="text-danger" style="color: red;">','</small>'); ?>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Status</label>
            </div>
            <select name="status" class="custom-select" id="inputGroupSelect01">
                <option selected>Pilih Status...</option>

                <option value="Tersedia">Tersedia</option>
                <option value="Tidak Tersedia">Tidak Tersedia</option>


            </select>
        </div>
        <div class="form-group">
            <label class="form-control-label">Gambar Mobil</label>
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