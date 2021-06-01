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
                        <li><a href="<?= base_url('mobil') ?>" class="active">Data Mobil</a></li>
                        
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
                    <h2>Data <em>Mobil</em></h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
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
            <?php foreach($mobil as $row){ ?>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb ">
                            <img src="<?= base_url(). 'assets/uploads/mobil/'.$row->gambar ?>"  width="70px">
                        </div>
                        <div class="down-content">
                            <span>Rp. <?= number_format($row->harga,0,',','.'); ?></span>
                            <h4><?= $row->merk ?></h4>
                            
                            <p><i class="fa fa-asterisk"></i> AC : <?php 
                            if($row->ac == "0"){
                                echo "Tidak Tersedia";
                            }else{
                                echo "Tersedia";
                            }
                            ?> &nbsp; &nbsp; <i class="fa fa-cog"></i> Gear : <?= $row->gear ?> &nbsp; &nbsp; <i class="fa fa-car"></i> Bahan Bakar : <?= $row->bahan_bakar ?> &nbsp; &nbsp; <i class="fa fa-tachometer"></i> Mesin : <?= $row->mesin ?></p>
                            <?php if($row->status == "Tersedia"){ ?>
                                <a href="<?= base_url('rental/tambah_rental/'.$row->id_mobil) ?>" class="btn btn-success" > Rental</a>
                                
                            <?php }else{ ?>
                                <button class="btn btn-danger"> Tidak Tersedia</button>
                            <?php } ?>
                            <a href="<?= base_url('mobil/detail_mobil/'.$row->id_mobil) ?>" class="btn btn-info"> Detail</a>
                            
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <br>
    
     <?= $pagination ?>

</div>
</section>
    <!-- ***** Fleet Ends ***** -->