<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-eye"></i> Detail Rental</h2>
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
                    <?= anchor('admin/rental/edit_rental/'.$row->id_rental,'<div class="btn btn-circle btn-rounded btn-primary mb-3"><i class="fas fa-edit"></i></div>') ?>
                    <?= anchor('admin/rental/delete_rental/'.$row->id_rental,'<div class="btn btn-circle btn-rounded btn-danger mb-3"><i class="fas fa-trash"></i></div>')?>
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
                                    <th scope="col">Pengambilan</th>
                                    <th> : </th>
                                    <td><?= $row->pengambilan ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Pengembalian </th>
                                    <th> : </th>
                                    <td><?= $row->pengembalian ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Tanggal Rental</th>
                                    <th> : </th>
                                    <td><?= $row->tanggal_rental ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kembali</th>
                                    <th>:</th>
                                    <td><?= $row->tanggal_kembali ?></td>
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
                                <tr>
                                    <th>Harga Rental / Hari</th>
                                    <th>:</th>
                                    <td>Rp. <?= number_format($row->harga,0,',','.'); ?></td>
                                </tr>
                                <?php 
                                if($row->supir == "Ya"){
                                    ?>

                                    <tr>
                                        <th>Harga Supir / Hari</th>
                                        <th>:</th>
                                        <td>Rp. <?= number_format(50000,0,',','.') ?></td>
                                    </tr>

                                <?php }else{ ?>
                                <?php } ?>
                                <tr>
                                    <th>Denda / Hari</th>
                                    <th>:</th>
                                    <td>Rp. <?= number_format($row->denda,0,',','.'); ?></td>
                                </tr>
                                <?php if(!$row->total_denda){ ?>

                                <?php }else{ ?>
                                    <tr>
                                        <th>Total Denda</th>
                                        <th>:</th>
                                        <td>Rp. <?= number_format($row->total_denda,0,',','.'); ?></td>
                                    </tr>
                                <?php } ?>
                                <?php if($row->tanggal_pengembalian == "0000-00-00"){ ?>

                                <?php }else{ ?>
                                    <tr>
                                        <th>Tanggal Pengembalian</th>
                                        <th>:</th>
                                        <td><?= $row->tanggal_pengembalian ?></td>
                                    </tr>
                                <?php } ?>
                                <tr> 



                                 <!-- <?php 

                                    $x = strtotime($row->tanggal_mulai);
                                    $y = strtotime($row->durasi);
                                    $jmlHari = abs(($x - $y)/(24*24*12));

                                    ?> -->
                                    <th>Jumlah Hari Sewa</th>
                                    <th>:</th>
                                    <td>
                                        <?php 
                                        $jmlHari = abs((strtotime($row->tanggal_kembali) - strtotime($row->tanggal_rental)) / (60*60*24));

                                        ?>
                                        <?= $jmlHari ?> Hari
                                    </td>
                                </tr>
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



                   <?php 
                   $harga_supir = 50000;
                   if($row->supir == "Ya"){
                    ?>
                    <tr class="text-primary">
                        <th>Jumlah Pembayaran</th>
                        <th>:</th>
                        <?php if($row->total_denda == null) { ?>

                            <td><button class="btn btn-sm btn-success">Rp. <?= number_format(($row->harga * $jmlHari) + ($harga_supir * $jmlHari ) ,0,',','.') ?></button></td>

                        <?php }else{ ?>

                            <td><button class="btn btn-sm btn-success">Rp. <?= number_format(($row->harga * $jmlHari) + ($harga_supir * $jmlHari ) + ($row->total_denda) ,0,',','.') ?></button></td>

                        <?php } ?>
                    </tr>


                <?php }else{ ?>
                 <tr class="text-success">
                    <th>Jumlah Pembayaran</th>
                    <th>:</th>
                    <td><button class="btn btn-sm btn-success">Rp. <?= number_format($row->harga * $jmlHari,0,',','.') ?></button></td>
                </tr>
            <?php } ?>



            <tr>
                <td><a href="<?= base_url('admin/transaksi/') ?>" class="btn btn-rounded btn-info"><i class="fa fa-eye"></i> Lihat Data Transaksi</a></td>
             
            
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