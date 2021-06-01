
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50" > 
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Halaman Registrasi</h2> 
                </div>
                <div class="card-body" action="<?= base_url('auth/register') ?>">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Nama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama" placeholder="Masukan Nama Lengkap">
                                    <?= form_error('nama', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="email" placeholder="Masukan Email">
                                    <?= form_error('email', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" placeholder="Masukan Password">
                                    <?= form_error('password', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Nomor</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="no_hp" placeholder="Masukan No. HP" required>
                                           
                                            <label class="label--desc">HP</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="no_ktp" placeholder="Masukan No. KTP" required>
                                            
                                            <label class="label--desc">KTP</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="alamat" placeholder="Masukan Alamat">
                                    <?= form_error('alamat', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                            <a href="<?= base_url('auth/login') ?>" class="btn btn--radius-2 btn--blue" type="submit">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>