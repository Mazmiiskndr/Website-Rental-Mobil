<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-shopping-cart"></i> Data Rental</h2>
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
                                       
                                        <th scope="col">Merk Mobil</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tgl Rental</th>
                                        <th scope="col">Tgl Kembali</th>
                                        <th scope="col">Tgl Pengembalian</th>
                                        <th scope="col">Denda / Hari</th>
                                        <th scope="col">Total Denda</th>
                                        <th scope="col">Status Rental</th>
                        
                                
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($rental as $row){
                                    ?>
                                    <tr class="text-dark">
                                        <th scope="row"><?= $no++ ?>.</th>
                                        
                                        <td><?= $row->merk ?></td>
                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->tanggal_rental ?></td>
                                        <td><?= $row->tanggal_kembali ?></td>
                                        <?php if($row->tanggal_pengembalian == "0000-00-00"){ ?>
                                            <td>-</td>
                                        <?php }else{ ?>
                                            <td><?= $row->tanggal_pengembalian ?></td>
                                        <?php } ?>
                                         <td>Rp. <?= number_format($row->denda,0,',','.'); ?></td>
                                         <?php if($row->total_denda == null){ ?>
                                            <td>Rp. -</td>
                                        <?php }else{ ?>
                                            <td>Rp. <?= number_format($row->total_denda,0,',','.'); ?></td>
                                        <?php } ?>
                                          
                                        
                                        
                                        <?php if($row->status_rental == "Belum Selesai"){ ?>
                                            <td style="color: red"><?= $row->status_rental ?></td>
                                        <?php }else{ ?>
                                            <td style="color: green"><?= $row->status_rental ?></td>
                                        <?php } ?>

                                        
                                        <td>
                                            <?= anchor('admin/rental/detail_rental/'.$row->id_rental,'<div class="btn btn-circle btn-rounded btn-dark"><i class="fas fa-eye"></i></div>') ?>
                                            <?= anchor('admin/rental/edit_rental/'.$row->id_rental,'<div class="btn btn-circle btn-rounded btn-primary"><i class="fas fa-edit"></i></div>') ?>
                                            <?= anchor('admin/rental/delete_rental/'.$row->id_rental,'<div class="btn btn-circle btn-rounded btn-danger"><i class="fas fa-trash"></i></div>') ?>
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