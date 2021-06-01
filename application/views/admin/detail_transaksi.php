<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-eye"></i> Detail Transaksi</h2>
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
                  
                    <?= anchor('admin/transaksi/delete_transaksi/'.$row->id_transaksi,'<div class="btn btn-circle btn-rounded btn-danger mb-3"><i class="fas fa-trash"></i></div>')?>
                </div>

                <div class="col-lg-6">
                    <div class="card">

                        <div class="table-responsive shadow-sm">
                            <table class="table table-responsive-lg table-hover text-dark">

                                <tr>
                                    <th scope="col">Nama Customer</th>
                                    <th> : </th>
                                    <td><?= $row->nama ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Merk Mobil</th>
                                    <th> : </th>
                                    <td><?= $row->merk ?></td>
                                </tr>


                                
                                <tr>
                                    <th>Tanggal Pengembalian</th>
                                    <th>:</th>
                                    <?php if($row->tanggal_pengembalian == "0000-00-00"){ ?>
                                        <td> - </td>
                                    <?php }else{ ?>
                                        <td><?= $row->tanggal_pengembalian ?></td>
                                    <?php } ?>
                                    
                                </tr>





                                 <!-- <?php 

                                    $x = strtotime($row->tanggal_mulai);
                                    $y = strtotime($row->durasi);
                                    $jmlHari = abs(($x - $y)/(24*24*12));

                                    ?> -->
                                <tr>

                                        <th>Status Pengembalian</th>
                                        <th>:</th>

                                        <?php if($row->status_pengembalian == "Belum Kembali"){ ?>
                                            <td style="color: red"><?= $row->status_pengembalian ?></td>

                                        <?php }else{ ?>
                                         <td style="color: green"><?= $row->status_pengembalian ?></td>
                                     <?php } ?>
                                 </tr>

                                 <tr>
                                    <th>Status Rental</th>
                                    <th>:</th>

                                    <?php if($row->status_rental == "Belum Selesai"){ ?>
                                        <td style="color: red"><?= $row->status_rental ?></td>

                                    <?php }else{ ?>
                                     <td style="color: green"><?= $row->status_rental ?></td>
                                 <?php } ?>
                             </tr>
                             <tr>
                                <th>Status Pembayaran</th>
                                <th>:</th>

                                <?php if($row->status_pembayaran == "Belum Bayar"){ ?>
                                    <td style="color: red"><?= $row->status_pembayaran ?></td>

                                <?php }elseif($row->status_pembayaran == "Pending"){ ?>
                                    <td style="color: orange"><?= $row->status_pembayaran ?></td>
                                <?php }else{ ?>
                                 <td style="color: green"><?= $row->status_pembayaran ?></td>
                             <?php } ?>
                         </tr>



                        
                           <tr class="text-success">
                            <th>Nominal Transfer</th>
                            <th>:</th>
                            <td><button class="btn btn-sm btn-success">Rp. <?= number_format($row->nominal_transfer ,0,',','.') ?></button></td>
                        </tr>
                   



                    <tr>
                        <td><a href="<?= base_url('admin/transaksi/download_bukti_pembayaran/'.$row->id_transaksi) ?>" class="btn btn-warning btn-rounded"><i class="fa fa-download"></i> Download Bukti Pembayaran</a></td>
                        <th></th>
                        <td><a href="<?= base_url('admin/transaksi/pembayaran/'.$row->id_transaksi) ?>" class="btn btn-rounded btn-success"><i class="fa fa-check-circle"></i> Cek Pembayaran</a></td>
                    </tr>

                </table>


            </div>


        </div>

    </div>
<?php } ?>

</div>




</div>
<!-- *************************************************************** -->
<!-- End Sales Charts Section -->

</div>