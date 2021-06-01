<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title><?= $title; ?> </title>
    <link href="<?= base_url('') ?>assets/favicon/icon.png" rel="icon">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/car_rental_template/') ?>assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/car_rental_template/') ?>assets/css/font-awesome.css">

    <link rel="stylesheet" href="<?= base_url('assets/car_rental_template/') ?>assets/css/style.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
      </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?= base_url('') ?>" class="logo">Rental<em> Mobil</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="<?= base_url('') ?>">Home</a></li>
                        <li><a href="<?= base_url('mobil') ?>">Data Mobil</a></li>


                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                            
                            <div class="dropdown-menu">
                                <a class="dropdown-item"  href="<?= base_url('about') ?>">About Us</a>
                                
                                <a class="dropdown-item" href="<?= base_url('team') ?>">Team</a>
                                <a class="dropdown-item" href="<?= base_url('testimonial') ?>">Testimonials</a>
                                
                            </div>
                        </li>
                        <li><a href="<?= base_url('contact') ?>" >Contact</a></li>
                        <?php if(!$this->session->userdata('email')) { ?>

                            <li><a href="<?= base_url('auth/login') ?>">Login</a></li>
                        <?php }else{ ?>

                            <li><a href="<?= base_url('transaksi') ?>">Transaksi</a></li>
                            <li><a href="<?= base_url('auth/login/logout') ?>">Logout</a></li>
                        <?php } ?> 
                        
                    </ul>         
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(<?= base_url('assets/car_rental_template/') ?>assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Detail  <em>Transaksi </em></h2>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->


<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <br>
        <br>
        <div class="row">


            <div class="col-md-12">
                <?php foreach($detail as $dt){ ?>
                    <div class="card">
                        <h4 class="card-header text-center"><strong>Detail Transaksi</strong></h4>
                        <table class="table table-hover table-borderless p-3 bg-white rounded">
                            <thead>

                                <tr>
                                    <th>Nama</th>
                                    <th>:</th>
                                    <td><?= $dt->nama ?></td>
                                </tr>
                                <tr>
                                    <th>Merk Mobil</th>
                                    <th>:</th>
                                    <td><?= $dt->merk ?></td>
                                </tr>
                                <tr>
                                    <th>Pengambilan</th>
                                    <th>:</th>
                                    <td><?= $dt->pengambilan ?></td>
                                </tr>
                                <tr>
                                    <th>Pengembalian</th>
                                    <th>:</th>
                                    <td><?= $dt->pengembalian ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Rental</th>
                                    <th>:</th>
                                    <td><?= $dt->tanggal_rental ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Kembali</th>
                                    <th>:</th>
                                    <td><?= $dt->tanggal_kembali ?></td>
                                </tr>
                                <tr>
                                    <th>Harga Rental / Hari</th>
                                    <th>:</th>
                                    <td>Rp. <?= number_format($dt->harga,0,',','.'); ?></td>
                                </tr>
                                <?php 
                                if($dt->supir == "Ya"){
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
                                    <td>Rp. <?= number_format($dt->denda,0,',','.'); ?></td>
                                </tr>
                                <?php if(!$dt->total_denda){ ?>

                                <?php }else{ ?>
                                    <tr>
                                        <th>Total Denda</th>
                                        <th>:</th>
                                        <td>Rp. <?= number_format($dt->total_denda,0,',','.'); ?></td>
                                    </tr>
                                <?php } ?>
                                <?php if($dt->tanggal_pengembalian == "0000-00-00"){ ?>

                                <?php }else{ ?>
                                    <tr>
                                        <th>Tanggal Pengembalian</th>
                                        <th>:</th>
                                        <td><?= $dt->tanggal_pengembalian ?></td>
                                    </tr>
                                <?php } ?>
                                <tr> 



                                 <!-- <?php 

                                    $x = strtotime($dt->tanggal_mulai);
                                    $y = strtotime($dt->durasi);
                                    $jmlHari = abs(($x - $y)/(24*24*12));

                                    ?> -->
                                    <th>Jumlah Hari Sewa</th>
                                    <th>:</th>
                                    <td>
                                        <?php 
                                        $jmlHari = abs((strtotime($dt->tanggal_kembali) - strtotime($dt->tanggal_rental)) / (60*60*24));

                                        ?>
                                        <?= $jmlHari ?> Hari
                                    </td>
                                </tr>

                                <tr>
                                    <th>Status Rental</th>
                                    <th>:</th>
                                    
                                    <?php if($dt->status_rental == "Belum Selesai"){ ?>
                                        <td style="color: red"><?= $dt->status_rental ?></td>

                                    <?php }else{ ?>
                                     <td style="color: green"><?= $dt->status_rental ?></td>
                                 <?php } ?>
                             </tr>
                             <tr>
                                <th>Status Pembayaran</th>
                                <th>:</th>

                                <?php if($dt->status_pembayaran == "Belum Bayar"){ ?>
                                    <td style="color: red"><?= $dt->status_pembayaran ?></td>

                                <?php }elseif($dt->status_pembayaran == "Pending"){ ?>
                                    <td style="color: orange"><?= $dt->status_pembayaran ?></td>
                                <?php }else{ ?>
                                 <td style="color: green"><?= $dt->status_pembayaran ?></td>
                             <?php } ?>
                         </tr>



                         <?php 
                         $harga_supir = 50000;
                         if($dt->supir == "Ya"){
                            ?>
                            <tr class="text-success">
                                <th>Jumlah Pembayaran</th>
                                <th>:</th>
                                <?php if($dt->total_denda == null) { ?>

                                    <td><button class="btn btn-sm btn-success">Rp. <?= number_format(($dt->harga * $jmlHari) + ($harga_supir * $jmlHari ) ,0,',','.') ?></button></td>

                                <?php }else{ ?>

                                    <td><button class="btn btn-sm btn-success">Rp. <?= number_format(($dt->harga * $jmlHari) + ($harga_supir * $jmlHari ) + ($dt->total_denda) ,0,',','.') ?></button></td>
                                    
                                <?php } ?>
                            </tr>


                        <?php }else{ ?>
                           <tr class="text-success">
                            <th>Jumlah Pembayaran</th>
                            <th>:</th>
                            <td><button class="btn btn-sm btn-success">Rp. <?= number_format($dt->harga * $jmlHari,0,',','.') ?></button></td>
                        </tr>
                    <?php } ?>



                    <tr>
                        <td><a href="<?= base_url('transaksi/cetak_invoice/'.$dt->id_rental) ?>" class="btn btn-sm btn-primary"><i class="fa fa-file-pdf-o"></i> Print Invoice</a></td>
                        <th></th>
                        <td><a href="<?= base_url('transaksi') ?>" class="btn btn-sm btn-danger"><i class="fa fa-backward"></i> Kembali</a></td>
                    </tr>
                </thead>
                <tbody>
                </tbody>

            </table>

        <?php } ?>
    </div>


</div>  





</div>
<br>

</div>
</section>
    <!-- ***** Fleet Ends ***** -->