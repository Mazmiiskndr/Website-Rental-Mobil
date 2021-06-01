
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url('assets/template_login/') ?>images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="<?= base_url('auth/login/proses_login') ?>" method="post">
					<span class="login100-form-title p-b-53">
						Halaman Login
					</span>

					<div class="col-md-12"><?= $this->session->flashdata('pesan'); ?></div>

					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Email tidak boleh kosong">
						<input class="input100" type="text" name="email" value="<?= set_value('email') ?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="<?= base_url('auth/lupa_password') ?>" class="txt2 bo1 m-l-5">
							Lupa Password?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password tidak boleh kosong">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Belum punya akun?
						</span>

						<a href="<?= base_url('auth/register') ?>" class="txt2 bo1">
							Register sekarang
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>