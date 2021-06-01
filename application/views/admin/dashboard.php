<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i data-feather="home" class="feather-icon"></i> Selamat Datang, <?= $this->session->userdata('nama') ?>!</h2>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
               <button type="button" class="btn btn-dark btn-rounded" data-toggle="modal"
               data-target="#dark-header-modal"><i class="fa fa-cogs"></i> Control Panel</button>
           </div>
       </div>
   </div>
</div>


<!-- Dark Header Modal -->
<div id="dark-header-modal" class="modal fade" tabindex="-1" role="dialog"
aria-labelledby="dark-header-modalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header modal-colored-header bg-dark">
            <h4 class="modal-title text-center" id="dark-header-modalLabel">Control Panel</h4>
            <button type="button" class="close" data-dismiss="modal"
            aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            <h4 class="mt-0 text-center">Control Panel</h4>
            <div class="row">
                <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/mobil') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-car"></i></a>

              </div>
              <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/mobil/type_mobil') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-bars"></i></a>

              </div>
              <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/supir') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-user-circle"></i></a>

              </div>
              <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/bank') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-university"></i></a>

              </div>
              <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/rental') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-shopping-cart"></i></a>

              </div>
              <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/transaksi') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-retweet"></i></a>

              </div>
              <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/users') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-users"></i></a>

              </div>
              <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/rental') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-user-secret"></i></a>

              </div>
              <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/testimonial') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-envelope"></i></a>

              </div>
              <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/contact') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-comments"></i></a>

              </div>
              <div class="col-md-3 text-center mt-3">
                    <a href="<?= base_url('admin/laporan') ?>" class="btn btn-lg btn-icon btn-rounded btn-warning"><i class="fa fa-clipboard-list"></i></a>

              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-rounded"
        data-dismiss="modal">Close</button>
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- *************************************************************** -->
    <!-- Start First Cards -->
    <!-- *************************************************************** -->
    <div class="card-group">
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"><?= $jumlah_mobil ?></h2>
                            
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Mobil</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i class="fa fa-car"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup></sup><?= $jumlah_type ?></h2>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Type
                        </h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i class="fa fa-bars"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-right">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <div class="d-inline-flex align-items-center">
                            <h2 class="text-dark mb-1 font-weight-medium"><?= $jumlah_transaksi ?></h2>
                            
                        </div>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Transaksi</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i class="fa fa-retweet"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                    <div>
                        <h3 class="text-success mb-1 font-weight-medium">Rp. <?= number_format($pendapatan,0,',','.'); ?></h3>
                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Pendapatan</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                        <span class="opacity-7 text-muted"><i class="fa fa-credit-card"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *************************************************************** -->
    <!-- End First Cards -->
    <!-- *************************************************************** -->
    <!-- *************************************************************** -->

    <!-- *************************************************************** -->
    <!-- *************************************************************** -->
    
    <!-- *************************************************************** -->
    <!-- *************************************************************** -->
    <!-- Start Top Leader Table -->
    <!-- *************************************************************** -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <h4 class="card-title"><i class="fa fa-car"></i> Data Mobil</h4>
                        <div class="ml-auto">
                            <div class="dropdown sub-dropdown">
                                <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i data-feather="more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                <a class="dropdown-item" href="<?= base_url('admin/mobil') ?>">Insert</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                        <thead>
                            <tr class="border-0 " >
                                <th class="border-0 font-14 font-weight-medium text-muted">Nama Type / Merk
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Warna Mobil
                                </th>
                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Transmisi
                                </th>

                                <th class="border-0 font-14 font-weight-medium text-muted">Harga</th>
                                <th class="border-0 font-14 font-weight-medium text-muted text-left">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($mobil as $row){
                                ?>
                                <tr>
                                    <td class="border-top-0 px-2 py-4">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="mr-3"><img
                                                src="<?= base_url(). 'assets/uploads/mobil/'.$row->gambar ?>"
                                                alt="user" class="rounded-circle" width="70"
                                                height="40" /></div>
                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium"><?= $row->nama_type ?></h5>
                                                    <span class="text-muted font-14"><?= $row->merk ?></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14"><?= $row->warna ?></td>
                                        <td class="border-top-0 text-muted px-2 py-4 font-14"><?= $row->gear ?></td>


                                        <td class="font-weight-medium text-dark border-top-0 px-2 py-4">Rp. <?= number_format($row->harga,0,',','.'); ?>
                                    </td>
                                    <td class="border-top-0 px-2 py-4">
                                        <div class="popover-icon">

                                            <a class="btn btn-dark text-white rounded-circle btn-circle font-20"
                                            href="<?= base_url('admin/mobil/detail_mobil/'.$row->id_mobil) ?>"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-primary text-white rounded-circle btn-circle font-20"
                                            href="<?= base_url('admin/mobil/edit_mobil/'.$row->id_mobil) ?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger text-white rounded-circle btn-circle font-20"
                                            href="<?= base_url('admin/mobil/delete_mobil/'.$row->id_mobil) ?>"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- *************************************************************** -->
<!-- End Top Leader Table -->
<!-- *************************************************************** -->
</div>