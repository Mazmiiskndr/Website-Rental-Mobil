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
                        <li><a href="<?= base_url('') ?>" class="active">Home</a></li>
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

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
  
        <img src="<?= base_url('assets/car_rental_template/') ?>assets/images/car3.jpg"/>
    

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Layanan Rental Mobil Terbaik</h6>
                <h2><em>Rental Mobil </em>Tasikmalaya</h2>
                <div class="main-button">
                    <a href="<?= base_url('contact') ?>">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Offers Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <?= $this->session->flashdata('pesan') ?>
                        
                        <h2>Data <em>Mobil</em></h2>
                        <img src="<?= base_url('assets/car_rental_template/') ?>assets/images/line-dec.png" alt="">
                        <p>Butuh Jasa Rental Mobil Untuk Daerah Tasikmalaya & Sekitarnya? Rental Mobil Tasikmalaya adalah solusi terbaik</p>
                    </div>
                </div>
            </div>
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

            <br>

                <?= $pagination ?>
                <div class="main-button text-center mt-3" >
                <a href="<?= base_url('mobil') ?>">Data Mobil</a>
            </div>
            
        </div>
    </section>
    <!-- ***** Offers Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(<?= base_url('assets/car_rental_template/') ?>assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="<?= base_url('assets/car_rental_template/') ?>assets/images/line-dec.png" alt="">
                        <p>Butuh Jasa Rental Mobil Untuk Daerah Tasikmalaya & Sekitarnya? Rental Mobil ini Solusinya</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Rental Mobil Tasikmalaya merupakan salah satu penyedia jasa rental mobil yang sudah profesional dan terpercaya dengan berbagai armada yang tersedia untuk Anda. Rental Mobil berlokasi di Kawalu Tasikmalaya Perum Griya Mitra Batik, Tasikmalaya. Rental Mobil Tasikmalaya berkomitmen untuk selalu menyediakan pelayanan terbaik untuk para konsumen sehingga kami bisa menjadi salah satu jasa rental mobil terbaik di Tasikmalaya dan sekitarnya.</p>

                        <p>Rental Mobil Tasikmalaya memiliki driver yang sudah berpengalaman sehingga siap mengantarkan Anda berkeliling Tasikmalaya dengan nyaman dan aman. Selain itu mobil dari Rental Mobil Tasikmalaya sudah pasti dirawat dengan baik sehingga selalu dalam kondisi prima. Untuk Anda yang ingin menyewa mobil bisa segera menghubungi kami, kami siap melayani Anda dengan sepenuh hati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src="<?= base_url('assets/car_rental_template/') ?>assets/images/line-dec.png" alt="waves">
                        <p>Testimonial ini adalah Customer kami yang telah memakai jasa Rental Mobil Tasikmalaya. Dan memberikan penilaian tentang Jasa Kami</p>
                    </div>
                </div>
                <?php foreach($testimonial as $row){ ?>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?= base_url('assets/car_rental_template/') ?>assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4><?= $row->nama ?></h4>
                                <p style="color: black"><?= $row->email ?></p>
                                <p><em>"<?= $row->deskripsi ?>"</em></p>
                            </div>
                        </li>
        
                    </ul>
                </div>
                <?php } ?>
                
            </div>

            <br>

            <div class="main-button text-center">
                <a href="<?= base_url('testimonial') ?>">Testimonial</a>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->

<!-- ***** Features Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>contact <em> info</em></h2>
                    <img src="<?= base_url('assets/car_rental_template/') ?>assets/images/line-dec.png" alt="waves">
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>

                <h5><a href="https://api.whatsapp.com/send?phone=6282295153183">+62 822 9515 3183</a></h5>

                <br>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>

                <h5><a href="#">azmiiskandar0@gmail.com</a></h5>

                <br>
            </div>

            <div class="col-md-4">
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>

                <h5>Tasikmalaya, Karsamenak, Kec. Kawalu 46182</h5>

                <br>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us" style="margin-top: 0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div id="map">
                  <iframe src="https://maps.google.com/maps?q=jalan%20batik%20keris%20IV&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="1" style="border:1" allowfullscreen></iframe>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="contact-form section-bg" style="background-image: url(<?= base_url('assets/car_rental_template/') ?>assets/images/contact-1-720x480.jpg)">
                <form id="contact" action="<?= base_url('contact/tambah_contact_aksi') ?>" method="post">
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <fieldset>
                        <input name="nama" type="text" id="name" placeholder="Your Name*" required="">
                    </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                </fieldset>
            </div>
            <div class="col-md-12 col-sm-12">
              <fieldset>
                <input name="subject" type="text" id="subject" placeholder="Subject">
            </fieldset>
        </div>
        <div class="col-lg-12">
          <fieldset>
            <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
        </fieldset>
    </div>
    <div class="col-lg-12">
      <fieldset>
        <button type="submit" id="form-submit" class="main-button">Send Message</button>
    </fieldset>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
    <!-- ***** Contact Us Area Ends ***** -->