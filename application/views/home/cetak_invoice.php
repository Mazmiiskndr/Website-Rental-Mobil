<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<head>
	<link rel="shortcut icon" href="<?= base_url()?>/assets/assets_shop/img/iconcar3.png" type="image/x-icon" />
	<title><?= $title; ?></title>
</head>
<div class="container mt-5 mb-5 mx-auto">
	<div class="row">

		<div class="col-md-12">
			  <?php foreach($transaksi as $dt){ ?>
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



  
                </thead>
                <tbody>
                </tbody>

            </table>

        <?php } ?>
			</div>
		</div>
	</div>

<script>
	window.print();
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
