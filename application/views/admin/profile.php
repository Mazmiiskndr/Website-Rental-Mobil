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

<?= $this->session->flashdata('pesan'); ?>
<!-- Start Sales Charts Section -->
<!-- *************************************************************** -->
<div class="row">
    

        <?php foreach($profile as $row) { ?>
        <div class="col-lg-4 ">
            <div class="card d-flex justify-content-center">
                <div class="card-body d-flex justify-content-center">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                             <img class="img-fluid"
                                    src="<?= base_url('assets/uploads/') ?>default.png" width="300">
                        </div>
                    </div>
                </div>
            </div>
            <?= anchor('admin/profile/setting/'.$this->session->userdata('id_users'),'<div class="btn btn-rounded btn-primary mb-3 mr-3"><i class="fas fa-cog"></i> Account Setting</div>') ?>
            <?= anchor('admin/profile/ganti_password/','<div class="btn btn-rounded btn-danger mb-3"><i class="fas fa-key"></i> Change Password</div>') ?>
    
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
                            <th scope="col">Email</th>
                             <th> : </th>
                            <td><?= $row->email ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Alamat</th>
                             <th> : </th>
                            <td><?= $row->alamat ?></td>
                        </tr>
                        <tr>
                            <th scope="col">No. HP</th>
                             <th> : </th>
                            <td><?= $row->no_hp ?></td>
                        </tr>
                        <tr>
                            <th scope="col">No. KTP</th>
                             <th> : </th>
                            <td><?= $row->no_ktp ?></td>
                        </tr>
                        <tr>
                            <th scope="col">Role ID</th>
                             <th> : </th>
                            <td><?= $row->role_id ?></td>
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