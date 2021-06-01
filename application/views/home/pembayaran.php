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
                    <h2>Silahkan lakukan <em>Pembayaran </em></h2>

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
        <?php foreach($transaksi as $tr) { ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="card" >
                      <div class="card-header text-center bg-light">
                        <h4><strong>Pembayaran</strong></h4>
                    </div>
                    <form method="post" action="<?= base_url('transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
                      <div class="form-row mt-3 ml-3 mb-3 mr-3">
                        <div class="col-md-6 form-group">
                            <label for="">Bank</label>
                            <select name="bank" class="form-control">
                                <option value="">- Pilih Bank -</option>

                                <option value="BCA">BCA</option>
                                <option value="MANDIRI">MANDIRI</option>
                                <option value="BRI">BRI</option>
                                <option value="BNI">BNI</option>
                                <option value="DANAMON">DANAMON</option>


                            </select>
                            <!-- <input type="text" class="form-control" placeholder="First name"> -->
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Nama Rekening</label>
                            <input type="hidden" class="form-control" name="id_users" value="<?= $this->session->userdata('id_users') ?>">
                            <input type="hidden" class="form-control" name="id_mobil" value="<?= $tr->id_mobil ?>">
                            <input type="hidden" class="form-control" name="id_rental" value="<?= $tr->id_rental ?>">
                            <input type="text" class="form-control" placeholder="Nama Rekening" name="nama_rekening">
                            <?= form_error('nama_rekening', '<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Nomor Rekening</label>
                            <input type="text" class="form-control" placeholder="Nomor Rekening" name="nomor_rekening">
                            <?= form_error('nomor_rekening', '<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Nominal Transfer</label>
                            <input type="text" class="form-control" placeholder="Nominal Transfer" name="nominal_transfer">
                            <?= form_error('nominal_transfer', '<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Upload Bukti Pembayaran</label>
                            <input type="file" class="form-control-file" name="bukti_pembayaran" value="<?= set_value('gambar') ?>">
                            <?= form_error('bukti_pembayaran', '<small class="text-danger pl-3">','</small>'); ?>
                        </div>
                        <div class="text-right col-md-12 form-group p-3">
                            <button class="btn btn-info" type="submit">Tranfer</button>
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
        <div class="col-md-6">
            <div class="card" >
              <div class="card-header text-center">
                <h4><strong>Invoice</strong></h4>
            </div>

            <table class="table table-hover table-borderless p-3 bg-white rounded">
                <thead>

                    <tr>
                        <th>Merk Mobil</th>
                        <th>:</th>
                        <td><?= $tr->merk ?></td>
                    </tr>

                    <tr>
                        <th>Tanggal Rental</th>
                        <th>:</th>
                        <td><?= $tr->tanggal_rental ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Kembali</th>
                        <th>:</th>
                        <td><?= $tr->tanggal_kembali ?></td>
                    </tr>
                    <tr>
                        <th>Biaya Rental/Hari</th>
                        <th>:</th>
                        <td>Rp. <?= number_format($tr->harga,0,',','.') ?></td>
                    </tr>
                    <?php 
                    if($tr->supir == "Ya"){
                        ?>

                        <tr>
                            <th>Harga Supir / Hari</th>
                            <th>:</th>
                            <td>Rp. <?= number_format(50000,0,',','.') ?></td>
                        </tr>

                    <?php }else{ ?>
                    <?php } ?>



                    <tr> 

                                 <!-- <?php 

                                    $x = strtotime($tr->tanggal_mulai);
                                    $y = strtotime($tr->durasi);
                                    $jmlHari = abs(($x - $y)/(24*24*12));

                                    ?> -->
                                    <th>Jumlah Hari Sewa</th>
                                    <th>:</th>
                                    <td>
                                        <?php 
                                        $jmlHari = abs((strtotime($tr->tanggal_kembali) - strtotime($tr->tanggal_rental)) / (60*60*24));

                                        ?>
                                        <?= $jmlHari ?> Hari
                                    </td>
                                </tr>

                                
                                <?php 
                                $harga_supir = 50000;
                                if($tr->supir == "Ya"){
                                    ?>
                                    <tr class="text-success">
                                        <th>Jumlah Pembayaran</th>
                                        <th>:</th>
                                        <td><button class="btn btn-sm btn-success">Rp. <?= number_format(($tr->harga * $jmlHari) + ($harga_supir * $jmlHari),0,',','.') ?></button></td>
                                    </tr>
                                    
                                    
                                <?php }else{ ?>
                                 <tr class="text-success">
                                    <th>Jumlah Pembayaran</th>
                                    <th>:</th>
                                    <td><button class="btn btn-sm btn-success">Rp. <?= number_format($tr->harga * $jmlHari,0,',','.') ?></button></td>
                                </tr>
                            <?php } ?>


                            <tr> 
                             
                             <td><a href="<?= base_url('transaksi') ?>" class="btn btn-sm btn-danger">Kembali</a></td>
                         </tr>

                     <?php } ?>
                 </thead>
                 <tbody>
                 </tbody>

             </table>

         </div>
     </div>

     <div class="col-md-12 mt-3">
        <div class="card" >
          <div class="card-header text-center">
            <h4><strong>Tujuan Tranfer</strong></h4>
        </div>

        <table class="table table-hover table-borderless p-3 bg-white rounded">
            <?php foreach($bank as $b){ ?>
                <thead>
                    <tr>
                       <th>Nama Bank</th>
                       <th> : </th>
                       <td><?= $b->nama_bank ?></td>
                   </tr>

                   <tr>
                       <th>Nama Rekening</th>
                       <th> : </th>
                       <td><?= $b->nama_rekening ?></td>
                   </tr>
                   <tr>
                       <th>Nomor Rekening</th>
                       <th> : </th>
                       <td><?= $b->nomor_rekening ?></td>
                   </tr>



               </thead>


           </table>
       <?php } ?>
   </div>
</div>


                <!-- <div class="card-body">
                     <div class="col-lg-12">
                        <div class="card-header alert alert-primary text-dark">
                        <h2 class="text-center"><i class="fa fa-money"></i> Pembayaran</h2>
                    </div>
                        
                    <table class="table table-hover table-bordered shadow-sm p-3 mb-5 bg-white rounded">
                        <?php foreach($transaksi as $tr) { ?>
                            <tr>
                                <th>Merk Mobil</th>
                                <td><?= $tr->merk ?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Rental</th>
                                <td><?= $tr->tanggal_rental ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Kembali</th>
                                <td><?= $tr->tanggal_kembali ?></td>
                            </tr>
                            <tr>
                                <th>Biaya Rental/Hari</th>
                                <td>Rp. <?= number_format($tr->harga,0,',','.') ?></td>
                            </tr>
                           
                            
                            <tr> -->

                                 <!-- <?php 

                                    $x = strtotime($tr->tanggal_mulai);
                                    $y = strtotime($tr->durasi);
                                    $jmlHari = abs(($x - $y)/(24*24*12));

                                    ?> -->
                                <!-- <th>Jumlah Hari Sewa</th>
                                <td>
                                    <?php 
                                    $jmlHari = abs((strtotime($tr->tanggal_kembali) - strtotime($tr->tanggal_rental)) / (60*60*24));

                                 ?>
                                 <?= $jmlHari ?> Hari
                                 </td>
                            </tr>

                            <tr class="text-success">
                        
                                
                                <th>Jumlah Pembayaran</th>
                                <td><button class="btn btn-sm btn-success">Rp. <?= number_format($tr->harga * $jmlHari,0,',','.') ?></button></td>
                            </tr>

                            <tr> -->
                                <!-- <td><a href="<?= base_url('transaksi/cetak_invoice/'.$tr->id_transaksi) ?>" class="btn btn-sm btn-primary"><i class="fa fa-file-pdf-o"></i> Print Invoice</a></td> -->

                                <!-- <td><a href="<?= base_url('transaksi') ?>" class="btn btn-sm btn-danger">Kembali</a></td>
                            </tr>



                        
                    </table>

                </div>
                </div>
                <?php } ?> -->

                <!-- ***** Contact Us Area Starts ***** -->
   <!--  <section class="section" id="contact-us" style="margin-top: 0">

            <div class="col-lg-12  col-xs-12">
                    <div class="contact-form section-bg" style="background-image: url(<?= base_url('assets/car_rental_template/') ?>assets/images/contact-1-720x480.jpg)">
            
                        <form id="contact" method="post" action="<?= base_url('transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <label for="" class="form-control-label"><p>Tranfer Lewat Bank</p></label>

                                <select name="bank" class="form-control">
                                    <option value="">- Pilih Bank -</option>
                                  
                                    <option value="BCA">BCA</option>
                                    <option value="MANDIRI">MANDIRI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BNI">BNI</option>
                                    <option value="DANAMON">DANAMON</option>
                                  
                      
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <label for="" class="form-control-label"><p>Nama Rekening</p></label>
                                <input type="hidden" name="id_rental" value="<?= $tr->id_rental  ?>">
                                <input name="nama_rekening" type="text" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <label for="" class="form-control-label"><p>Nomor Rekening</p></label>
                                
                                <input name="nomor_rekening" type="text" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <label for="" class="form-control-label"><p>Nominal Transfer</p></label>
                                
                                <input name="nominal_transfer" type="text" required="">
                              </fieldset>
                            </div>       
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <label for="" class="form-control-label"><p>Upload Bukti Pembayaran</p></label>
                                
                                <input name="bukti_pembayaran" type="file" required="" class="form-control-file">
                              </fieldset>
                            </div>   
                            <div class="col-md-6 col-sm-12">
                             
                            </div>                       
                           
                            <div class="col-md-6">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Bayar</button>

                              </fieldset>

                            </div>
                            <div class="col-md-6">
                              <fieldset>
                                <a href="<?= base_url('transaksi') ?>" class="btn btn-danger">Back</a>

                              </fieldset>

                            </div>
                            
                          </div>
                        </form>
            
                    </div>
                </div>
            
               
            </div>
        </section> -->
    </div>
    <br>

</div>
</section>
    <!-- ***** Fleet Ends ***** -->