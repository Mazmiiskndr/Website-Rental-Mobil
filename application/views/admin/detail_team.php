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
            <a href="<?= base_url('admin/team') ?>" class="btn text-center custom-select-set form-control btn-danger border-0 custom-shadow custom-radius"><i class="fa fa-backward"></i> Kembali</a>
            
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
        <div class="col-lg-4 ">
            <div class="card d-flex justify-content-center">
                <div class="card-body d-flex justify-content-center">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                             <img class="img-fluid"
                                    src="<?= base_url(). 'assets/uploads/team/'.$row->gambar ?>" width="400">
                        </div>
                    </div>
                </div>
            </div>
            <?= anchor('admin/team/edit_team/'.$row->id_team,'<div class="btn btn-circle btn-rounded btn-primary mb-3"><i class="fas fa-edit"></i></div>') ?>
            <?= anchor('admin/team/delete_team/'.$row->id_team,'<div class="btn btn-circle btn-rounded btn-danger mb-3"><i class="fas fa-trash"></i></div>')?>
        </div>

        <div class="col-lg-8">
        <div class="card">
                        
            <div class="table-responsive shadow-sm">
                <table class="table table-responsive-lg table-hover text-dark">
                
                        <tr>
                            <th scope="col">Nama</th>
                            <th> : </th>
                            <td><?= $row->nama ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Jabatan</th>
                             <th> : </th>
                            <td><?= $row->jabatan ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Email</th>
                             <th> : </th>
                            <td><?= $row->email ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Deskripsi</th>
                             <th> : </th>
                            <td><?= $row->deskripsi ?></td>
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