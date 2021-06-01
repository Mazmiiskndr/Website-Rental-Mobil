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
								
								<li><a href="<?= base_url('transaksi') ?>" class="active">Transaksi</a></li>
								<li><a href="<?= base_url('auth/login/logout') ?>" >Logout</a></li>
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
						<h2>Data <em>Transaksi </em></h2>
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
				<div class="col-lg-12">
					<?= $this->session->flashdata('pesan') ?>
					<div class="card">
						
						<div class="table-responsive shadow-sm">
							<table class="table table-hover table-borderless">
								<thead>
									<tr class="table-dark text-dark">
										<th>No</th>
										<th scope="col">Gambar</th>
										<th scope="col">Nama</th>
										<th scope="col">Merk Mobil</th>
										<th scope="col">Tanggal Rental</th>
										<th scope="col">Tanggal Kembali</th>
										<th scope="col">Harga</th>
										<th scope="col">Aksi</th>
										<th scope="col">Batal</th>
									</tr>
								</thead>
								<tbody>
									<?php  
									$no = 1;
									foreach($rental as $row){
										?>
										<tr>
											<th scope="row"><?= $no++ ?>.</th>
											<td><img src="<?= base_url(). 'assets/uploads/mobil/'.$row->gambar ?>" width="70px"></td>
											<td><?= $row->nama ?></td>
											<td><?= $row->merk ?></td>
											<td><?= $row->tanggal_rental ?></td>
											<td><?= $row->tanggal_kembali ?></td> 
											<td>Rp. <?= number_format($row->harga,0,',','.'); ?></td>
											<?php if($row->status_pembayaran == "Lunas") {?>
												<td>
													<button class="btn btn-dark">Lunas</button> 
													
												</td>
												
											<?php }elseif($row->status_pembayaran == "Pending"){ ?>
												<td>
													<div class="btn btn-circle btn-rounded btn-warning"> Pending</div>

												</td>
												
											<?php }else{ ?>
												<td>
													<?= anchor('transaksi/pembayaran/'.$row->id_rental,'<div class="btn btn-circle btn-rounded btn-success"> Pembayaran</div>') ?>
													
													
												</td>
											<?php } ?>

											<td>

												<?php  
												if($row->status_pembayaran == 'Belum Bayar') { ?>
													<a onclick="return confirm('Yakin?')" class="btn btn-danger" href="<?= base_url('rental/batal_rental/'.$row->id_rental) ?>">Batal</a>
												<?php }else{ ?>
													<?= anchor('transaksi/detail_transaksi/'.$row->id_rental,'<div class="btn btn-circle btn-rounded btn-info"> Detail</div>') ?>
													
												<?php } ?>

												
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>

			<br>

		</div>
	</section>
	<!-- ***** Fleet Ends ***** -->


	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Maaf transaksi anda sudah selesai dan tidak bisa dibatalkan!
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>