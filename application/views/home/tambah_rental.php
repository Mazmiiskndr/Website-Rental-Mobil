<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title><?= $title; ?></title>
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
                        <li><a href="<?= base_url('') ?>" >Home</a></li>
                        <li><a href="<?= base_url('mobil') ?>">Data Mobil</a></li>
                        <li><a href="<?= base_url('team') ?>" >Team</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                            
                            <div class="dropdown-menu">
                                <a class="dropdown-item"  href="<?= base_url('about') ?>">About Us</a>
                                
                                <a class="dropdown-item" href="<?= base_url('team') ?>">Team</a>
                                <a class="dropdown-item" href="<?= base_url('testimonial') ?>">Testimonials</a>
                                
                            </div>
                        </li>
                        
                        <?php if(!$this->session->userdata('email')) { ?>

                            <li><a href="<?= base_url('auth/login') ?>">Login</a></li>
                        <?php }else{ ?>

                            <li><a href="<?= base_url('transaksi') ?>" class="active">Transaksi</a></li>
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

<section class="section section-bg" id="call-to-action" style="background-image: url(<?= base_url('assets/car_rental_template/') ?>assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Tambah <em>Rental</em></h2>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Features Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3 mt-3">
                
                <div class="cta-content">
                    <br>
                    <br>
                    <h2 style="color: black">Rental <em>Mobil</em></h2>
                    
                </div>
                
            </div>
            
        </div>
    </div>

</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Contact Us Area Starts ***** -->

<section class="section" id="features">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 ">
                
             <?php foreach($detail as $row) { ?>
                <form action="<?= base_url('rental/tambah_rental_aksi') ?>" method="POST">

                   <div class="row mb-3">
                    <div class="col">
                        <label for="">Harga Rental / Hari</label>
                        <input type="hidden" class="form-control" value="<?= $row->id_mobil ?>" readonly name="id_mobil">
                        <input type="hidden" class="form-control" value="<?= $this->session->userdata('id_users') ?>" readonly name="id_users">
                        <input type="text" class="form-control" value="<?= $row->harga ?>" readonly name="harga">
                    </div>
                    <div class="col">
                        <label for="">Denda / Hari</label>
                        <input type="text" class="form-control" value="<?= $row->denda ?>" readonly name="denda">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Tanggal Rental</label>
                        <input type="date" class="form-control" name="tanggal_rental" required>
                    </div>
                    <div class="col">
                        <label for="">Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tanggal_kembali" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Pakai Supir?</label>
                        <select name="supir" id="" class="form-control">
                            <option value="Ya"> Ya</option>
                            
                            <option value="Tidak">Tidak</option>
                            
                        </select>
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Lokasi Pengambilan</label>
                        <input type="text" class="form-control" name="pengambilan" required>
                    </div>
                    <div class="col">
                        <label for="">Lokasi Pengembalian</label>
                        <input type="text" class="form-control" name="pengembalian" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <button class="btn btn-primary btn-sm" type="submit">Rental</button>
                        
                    </div>
                    <div class="col">
                        <a class="btn btn-danger btn-sm ml-1" href="<?= base_url('') ?>">Back</a>
                    </div>
                </div>
                

                
            </form>
        <?php } ?>
        
    </div>
    
</div>

</div>
</div>

</section>



    <!-- ***** Contact Us Area Ends ***** -->