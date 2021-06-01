<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-edit"></i> Update Rental</h2>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">

                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <div class="customize-input float-right">
                    <a href="<?= base_url('admin/rental') ?>" class="btn text-center custom-select-set form-control btn-danger border-0 custom-shadow custom-radius"><i class="fa fa-backward"></i> Kembali</a>

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
        <?php foreach($rental as $row) { ?>

        </div>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Data Rental</h4>
                    <form class="mt-3" action="<?= base_url('admin/rental/update_rental_aksi') ?>" method="post" enctype="multipart/form-data"> 
                         <div class="form-group">
                        
                            <input type="hidden" name="id_rental" value="<?= $row->id_rental ?>">
                            <input type="hidden" name="tanggal_kembali" value="<?= $row->tanggal_kembali ?>">
                            <input type="hidden" name="denda" value="<?= $row->denda ?>">
                
            
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" name="tanggal_pengembalian" aria-describedby="name" value="<?= $row->tanggal_pengembalian ?>">                        
                            <?= form_error('tanggal_pengembalian', '<small class="text-danger" style="color: red;">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Status Pengembalian</label>
                            <select name="status_pengembalian" class="custom-select" id="inputGroupSelect01">
                                <option selected><?= $row->status_pengembalian ?></option>
                                <option value="Kembali">Kembali</option>
                                <option value="Belum Kembali">Belum Kembali</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Status Rental</label> 
                            <select name="status_rental" class="custom-select" id="inputGroupSelect01">
                                <option selected><?= $row->status_rental ?></option>
                                <option value="Selesai">Selesai</option>
                                <option value="Belum Selesai">Belum Selesai</option>

                            </select>
                        </div>
                        <div class="form-group">
                             <label class="form-control-label">Status Pembayaran</label>
                            <select name="status_pembayaran" class="custom-select" id="inputGroupSelect01">
                                <option selected><?= $row->status_pembayaran ?></option>
                                <option value="Lunas">Lunas</option>
                                <option value="Pending">Pending</option>
                                <option value="Belum Bayar">Belum Bayar</option>
                            </select>
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