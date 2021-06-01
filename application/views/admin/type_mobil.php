<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-bars"></i> Type Mobil</h2>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                
            </nav>
        </div>
    </div>
    <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <div class="customize-input float-right">
                    <form action="<?= base_url('admin/mobil/search') ?>" class="form-inline my-2 my-lg-0" method="post">
                    <input class="form-control custom-shadow custom-radius border-0 bg-white"
                    type="search" placeholder="Search" aria-label="Search" type="text" name="keyword">
                    <button class="btn btn-info my-2 my-sm-0 ml-2 btn-rounded" type="submit"><i class="fa fa-search"></i></button>
   
                    </form>
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
     <div class="col-8">
        <?= $this->session->flashdata('pesan'); ?>
                    <div class="card">
                        
                        <div class="table-responsive shadow-sm">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr class="table-dark text-dark">
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Type</th>
                                        <th scope="col">Nama Type</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($type as $row){
                                    ?>
                                    <tr class="text-dark">
                                        <th scope="row"><?= $no++ ?>.</th>
                                        <td><?= $row->kode_type ?></td>
                                        <td><?= $row->nama_type ?></td>
                            
                                        <td>
                                            <?= anchor('admin/mobil/edit_type/'.$row->id_type,'<div class="btn btn-circle btn-rounded btn-primary"><i class="fas fa-edit"></i></div>') ?>
                                            <?= anchor('admin/mobil/delete_type/'.$row->id_type,'<div class="btn btn-circle btn-rounded btn-danger"><i class="fas fa-trash"></i></div>') ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Data Type Mobil</h4>
                            <form class="mt-3" action="<?= base_url('admin/mobil/tambah_type_mobil') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-control-label">Kode Type</label>
                                    <input type="text" class="form-control" name="kode_type" aria-describedby="name"
                                        placeholder="Kode Type">
                                        <?= form_error('kode_type', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Nama Type</label>
                                    <input type="text" class="form-control" name="nama_type" aria-describedby="name"
                                        placeholder="Nama Type">
                                    
                                    
                                     <?= form_error('nama_type', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info btn-rounded">Tambah</button>
                                        <button type="reset" class="btn btn-dark btn-rounded">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


</div>
<!-- *************************************************************** -->
<!-- End Sales Charts Section -->

</div>