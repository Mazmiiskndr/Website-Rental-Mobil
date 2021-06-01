<div class="page-breadcrumb">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><i class="fas fa-clipboard-list"></i> Data Laporan</h2>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">

                </nav>
            </div>
        </div>
        <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <div class="customize-input float-right">
                    <a href="<?= base_url().'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>" class="btn text-center custom-select-set form-control btn-success border-0 custom-shadow custom-radius"><i class="fa fa-print"></i> Print Laporan</a>

                </div>
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
                            <th scope="col">Customer</th>
                            <th scope="col">Mobil</th>
                            <th scope="col">Harga / Hari</th>
                            <th scope="col">Total Denda</th>
                            <th scope="col">Tgl. Rental</th>
                            <th scope="col">Tgl. Kembali</th>
                            <th scope="col">Tgl. Pengembalikan</th>
                            <th scope="col">Status Pengembalian</th>
                            <th scope="col">Status Rental</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($laporan as $row){
                            ?>
                            <tr class="text-dark">
                                <th scope="row"><?= $no++ ?>.</th>
                                
                                <td><?= $row->nama ?></td>
                                <td><?= $row->merk ?></td>
                                <td>Rp. <?= number_format($row->harga,0,',','.'); ?></td>
                                <td>Rp. <?= number_format($row->total_denda,0,',','.'); ?></td>
                                <td><?= $row->tanggal_rental ?></td>
                                <td><?= $row->tanggal_kembali ?></td>
                                <td><?= $row->tanggal_pengembalian ?></td>

                                <?php if($row->status_pengembalian == "Belum Kembali"){ ?>
                                    <td style="color: red"><?= $row->status_pengembalian ?></td>
                                <?php }else{ ?>
                                    <td style="color: green"><?= $row->status_pengembalian ?></td>
                                <?php } ?>
                                <?php if($row->status_rental == "Belum Selesai"){ ?>
                                    <td style="color: red"><?= $row->status_rental ?></td>
                                <?php }else{ ?>
                                    <td style="color: green"><?= $row->status_rental ?></td>
                                <?php } ?>
                    
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