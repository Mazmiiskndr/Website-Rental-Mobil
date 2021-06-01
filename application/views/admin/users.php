<div class="page-breadcrumb">
<div class="row">
    <div class="col-7 align-self-center">
        <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-users"></i> Data Users</h2>
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
     <div class="col-8">
        <?= $this->session->flashdata('pesan'); ?>
                    <div class="card">
                        
                        <div class="table-responsive shadow-sm">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr class="table-dark text-dark">
                                        <th scope="col">No</th>
                                     
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        
                                        <th scope="col">Role ID</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($users as $row){
                                    ?>
                                    <tr class="text-dark">
                                        <th scope="row"><?= $no++ ?>.</th>

                                        <td><?= $row->nama ?></td>
                                        <td><?= $row->email ?></td>
                                        
                                        <?php if($row->role_id == "1"){ ?>
                                            <td>Administrator</td>
                                        <?php }else{ ?>
                                            <td>Member</td>
                                        <?php } ?>
                                
                                    
                            
                                        <td>
                                           
                                            <?= anchor('admin/users/edit_users/'.$row->id_users,'<div class="btn btn-circle btn-rounded btn-primary"><i class="fas fa-edit"></i></div>') ?>
                                            <?= anchor('admin/users/delete_users/'.$row->id_users,'<div class="btn btn-circle btn-rounded btn-danger"><i class="fas fa-trash"></i></div>') ?>
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
                            <h4 class="card-title">Tambah Data Users</h4>
                            <form class="mt-3" action="<?= base_url('admin/users/tambah_users') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-control-label">Nama User</label>
                                    <input type="text" class="form-control" name="nama" aria-describedby="name"
                                        placeholder="Nama User">
                                        <?= form_error('nama', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="text" class="form-control" name="email" aria-describedby="name"
                                        placeholder="Email">
                                    
                                    
                                     <?= form_error('email', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <input type="password" class="form-control" name="password" aria-describedby="name"
                                        placeholder="Password">
                                    
                                    
                                     <?= form_error('password', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" aria-describedby="name"
                                        placeholder="Alamat">
                                    
                                    
                                     <?= form_error('alamat', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                        
                            
                                <div class="form-group">
                                    <label class="form-control-label">No. KTP</label>
                                    <input type="text" class="form-control" name="no_ktp" aria-describedby="name"
                                        placeholder="No. KTP">
                                    
                                    
                                     <?= form_error('no_ktp', '<small class="text-danger" style="color: red;">','</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">No. HP</label>
                                    <input type="text" class="form-control" name="no_hp" aria-describedby="name"
                                        placeholder="No. HP">
                                    
                                    
                                     <?= form_error('no_hp', '<small class="text-danger" style="color: red;">','</small>'); ?>
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