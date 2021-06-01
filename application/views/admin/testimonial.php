<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-envelope"></i> Data Testimonial</h2>
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
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($testimonial as $row){
                            ?>
                            <tr class="text-dark">
                                <th scope="row"><?= $no++ ?>.</th>
                                
                                <td><?= $row->nama ?></td>
                                <td><?= $row->email ?></td>
                                <td><?= $row->deskripsi ?></td>
                                <td>
                                    
                                    <?= anchor('admin/testimonial/delete_testimonial/'.$row->id_testimonial,'<div class="btn btn-circle btn-rounded btn-danger"><i class="fas fa-trash"></i></div>') ?>
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