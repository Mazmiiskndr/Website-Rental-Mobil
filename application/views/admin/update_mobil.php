<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-edit"></i> Update Mobil</h2>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                
            </nav>
        </div>
    </div>
    <div class="col-5 align-self-center">
        <div class="customize-input float-right">
            <div class="customize-input float-right">
            <a href="<?= base_url('admin/mobil') ?>" class="btn text-center custom-select-set form-control btn-danger border-0 custom-shadow custom-radius"><i class="fa fa-backward"></i> Kembali</a>
            
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
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="img-fluid"
                                    src="<?= base_url(). 'assets/uploads/mobil/'.$row->gambar ?>" alt="First slide"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= anchor('admin/mobil/delete_mobil/'.$row->id_mobil,'<div class="btn btn-circle btn-rounded btn-danger mb-3"><i class="fas fa-trash"></i></div>')?>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Data Mobil</h4>
                            <form class="mt-3" action="<?= base_url('admin/mobil/update_mobil_aksi') ?>" method="post" enctype="multipart/form-data"> 
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Kode Type</label>
                                    </div>
                                    <input type="hidden" name="id_mobil" value="<?= $row->id_mobil ?>">
                                    <select name="kode_type" class="custom-select" id="inputGroupSelect01">
                                        <option selected><?= $row->kode_type ?></option>
                                        <?php foreach($type as $tp) { ?>
                                        <option value="<?= $tp->kode_type ?>"><?= $tp->kode_type ?></option>
                                        <?php } ?>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Merk Mobil</label>
                                    <input type="text" class="form-control" name="merk" aria-describedby="name" value="<?= $row->merk ?>">                        
                                     <?= form_error('merk', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Warna Mobil</label>
                                    <input type="text" class="form-control" name="warna" aria-describedby="name"
                                        value="<?= $row->warna ?>">
                                     <?= form_error('warna', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                  <label class="sr-only" for="inlineFormInputGroup">Harga Mobil</label>
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">Rp.</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" value="<?= $row->harga ?>" name="harga">
                                  </div>
                                    <?= form_error('harga', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                  <label class="sr-only" for="inlineFormInputGroup">Denda Mobil</label>
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">Rp.</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" value="<?= $row->denda ?>" name="denda">
                                  </div>
                                    <?= form_error('denda', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Bahan Bakar Mobil</label>
                                    <input type="text" class="form-control" name="bahan_bakar" aria-describedby="name"
                                        value="<?= $row->bahan_bakar ?>">
                                     <?= form_error('bahan_bakar', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Transmisi Mobil</label>
                                    <input type="text" class="form-control" name="gear" aria-describedby="name"
                                        value="<?= $row->gear ?>">
                                     <?= form_error('gear', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">AC</label>
                                        </div>
                                        <select name="ac" class="custom-select" id="inputGroupSelect01">
                                           <option value="<?= $row->ac ?>">
                                                <?php if($row->ac == "0"){ ?>
                                                    Tidak Tersedia
                                                <?php }else{ ?>
                                                    Tersedia
                                                <?php } ?>

                                            </option>
                                            
                                            <option value="1">Tersedia</option>
                                            <option value="0">Tidak Tersedia</option>
                                        
                                            
                                        </select>
                                        
                                    </div>

                                    <div class="form-group">
                                    <label class="form-control-label">Mesin Mobil</label>
                                    <input type="text" class="form-control" name="mesin" aria-describedby="name"
                                        value="<?= $row->mesin ?>">
                                     <?= form_error('mesin', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Kursi Mobil</label>
                                    <input type="text" class="form-control" name="kursi" aria-describedby="name"
                                        value="<?= $row->kursi ?>">
                                     <?= form_error('kursi', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Tahun Mobil</label>
                                    <input type="text" class="form-control" name="tahun" aria-describedby="name"
                                        value="<?= $row->tahun ?>">
                                     <?= form_error('tahun', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Status</label>
                                        </div>
                                        <select name="status" class="custom-select" id="inputGroupSelect01">
                                            <option selected>
                                                <?php if($row->status == "0"){ ?>
                                                    Tidak Tersedia
                                                <?php }else{ ?>
                                                    Tersedia
                                                <?php } ?>

                                            </option>
                                            
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