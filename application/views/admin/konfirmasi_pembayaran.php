<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fa fa-credit-card"></i> Konfirmasi Pembayaran</h2>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">

                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <div class="customize-input float-right">
                    <a href="<?= base_url('admin/transaksi') ?>" class="btn text-center custom-select-set form-control btn-danger border-0 custom-shadow custom-radius"><i class="fa fa-backward"></i> Kembali</a>

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
        <?php foreach($pembayaran as $row) { ?>


            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Konfirmasi Pembayaran</h4>
                        <form class="mt-3" action="<?= base_url('admin/transaksi/konfirmasi_pembayaran_aksi') ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="form-control-label">Status Pembayaran</label>
                                <input type="hidden" name="id_transaksi" value="<?= $row->id_transaksi ?>">

                                <select name="status_pembayaran" class="custom-select text-dark" id="inputGroupSelect01">
                                    <option selected><?= $row->status_pembayaran ?></option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Belum Bayar">Belum Bayar</option>

                                </select>                   
                                <?= form_error('status_pembayaran', '<small class="text-danger" style="color: red;">','</small>'); ?>
                            </div>

                            <div class="form-group">

                                <a href="<?= base_url('admin/transaksi/download_bukti_pembayaran/'.$row->id_transaksi) ?>" class="btn btn-warning btn-rounded"><i class="fa fa-download"></i> Download Bukti Pembayaran</a>


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