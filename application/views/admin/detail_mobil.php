<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-eye"></i> Detail Mobil</h2>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                
            </nav>
        </div>
    </div>
    <div class="col-5 align-self-center">
        <div class="customize-input float-right">
            <div class="customize-input float-right">
            <a href="<?= base_url('admin/mobil') ?>" class="btn text-center custom-select-set form-control btn-danger border-0 custom-shadow custom-radius"><i class="fa fa-backward"></i> Kembali</a>
            
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
            <?= anchor('admin/mobil/edit_mobil/'.$row->id_mobil,'<div class="btn btn-circle btn-rounded btn-primary mb-3"><i class="fas fa-edit"></i></div>') ?>
            <?= anchor('admin/mobil/delete_mobil/'.$row->id_mobil,'<div class="btn btn-circle btn-rounded btn-danger mb-3"><i class="fas fa-trash"></i></div>')?>
        </div>

        <div class="col-lg-6">
        <div class="card">
                        
            <div class="table-responsive shadow-sm">
                <table class="table table-responsive-lg table-hover text-dark">
                
                        <tr>
                            <th scope="col">Kode Type</th>
                            <th> : </th>
                            <td><?= $row->kode_type ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Merk Mobil</th>
                             <th> : </th>
                            <td><?= $row->merk ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Warna Mobil</th>
                             <th> : </th>
                            <td><?= $row->warna ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Transmisi </th>
                             <th> : </th>
                            <td><?= $row->gear ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Bahan Bakar</th>
                             <th> : </th>
                            <td><?= $row->bahan_bakar ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Mesin Mobil</th>
                             <th> : </th>
                            <td><?= $row->mesin ?></td>
                        </tr>
                        <tr>
                            <th scope="col">AC Mobil</th>
                            <th> : </th>
                            <?php if ($row->ac == "1"){ ?>
                                <td><p style="color: green">Tersedia</p></td>
                            <?php }else{ ?>
                                <td><p style="color: red">Tidak Tersedia</p></td>
                            <?php } ?>
                            
                        </tr>
                        <tr>
                            <th scope="col">Status Mobil</th>
                            <th> : </th>
                            <?php if ($row->status == "Tersedia"){ ?>
                                <td><p style="color: green"><?= $row->status ?></p></td>
                            <?php }else{ ?>
                                <td><p style="color: red"><?= $row->status ?></p></td>
                            <?php } ?>
                            
                        </tr>
                        <tr>
                            <th scope="col">Kursi Mobil</th>
                             <th> : </th>
                            <td><?= $row->kursi ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Tahun Mobil</th>
                             <th> : </th>
                            <td><?= $row->tahun ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Harga Mobil</th>
                             <th> : </th>
                            <td>Rp. <?= number_format($row->harga,0,',','.'); ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Denda Mobil</th>
                             <th> : </th>
                            <td>Rp. <?= number_format($row->denda,0,',','.'); ?></td>
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