<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-retweet"></i> Data Transaksi</h2>
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
       <div class="col-12">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="card">

            <div class="table-responsive shadow-sm">
                <table class="table table-hover table-borderless">
                    <thead>
                        <tr class="table-dark text-dark">
                            <th scope="col">No</th>

                            <th scope="col">Nama Customer</th>

                            <th scope="col">Bank</th>
                            <th scope="col">Nama Rekening</th>
                            <th scope="col">Nomor Rekening</th>
                            <th scope="col">Nominal Transfer</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col">Cek Pembayaran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($transaksi as $row){
                            ?>
                            <tr class="text-dark">
                                <th scope="row"><?= $no++ ?>.</th>

                                <td><?= $row->nama ?></td>
                                
                                <td><?= $row->bank ?></td>
                                <td><?= $row->nama_rekening ?></td>
                                <td><?= $row->nomor_rekening ?></td>
                                <td>Rp. <?= number_format($row->nominal_transfer,0,',','.'); ?></td>



                                <?php if($row->status_pembayaran == "Belum Bayar"){ ?>
                                    <td style="color: red"><?= $row->status_pembayaran ?></td>
                                <?php }elseif($row->status_pembayaran == "Pending"){ ?>
                                    <td style="color: orange"><?= $row->status_pembayaran ?></td>
                                <?php }else{ ?>
                                    <td style="color: green"><?= $row->status_pembayaran ?></td>
                                <?php } ?>
                                <td>
                                  
                                        <?php if(empty($row->bukti_pembayaran) ){ ?>
                                            <button class="btn btn-danger btn-rounded"><i class="fas fa-times-circle"></i></button>
                                        <?php }else{ ?>
                                            <a class="btn btn-success btn-rounded" href="<?= base_url('admin/transaksi/pembayaran/'.$row->id_transaksi) ?>"><i class="fas fa-check-circle"></i></a>
                                        <?php } ?>
                                    
                                </td>   


                                <td>
                                    <?= anchor('admin/transaksi/detail_transaksi/'.$row->id_transaksi,'<div class="btn btn-circle btn-rounded btn-dark"><i class="fas fa-eye"></i></div>') ?>
    
                                    <?= anchor('admin/transaksi/delete_transaksi/'.$row->id_transaksi,'<div class="btn btn-circle btn-rounded btn-danger"><i class="fas fa-trash"></i></div>') ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>
<!-- *************************************************************** -->
<!-- End Sales Charts Section -->

</div>