<section class="skrollable u-align-center u-black u-clearfix u-section-1" id="sec-beef">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h1 class="u-custom-font u-font-ubuntu u-text u-text-default u-text-1">Edit Your Profile</h1>
		<div class="u-form u-form-1">
			<form action="<?= site_url('user_control/updateProfile') ?>" method="post">
				<div class="profile-pic">
					<label class="-label" for="file">
						<span class="glyphicon glyphicon-camera"></span>
						<span>Change Image</span>
					</label>
					<input id="file" type="file" name="image" onchange="loadFile(event)" />
					<img src="<?= base_url('upload/profile/').$this->session->userdata('image') ?>" id="output" width="200" />
					<input type="hidden" name="old_image" value="<?= $this->session->userdata('image') ?>">
				</div>
				<div class="u-form-group u-form-name u-form-group-1">
					<label for="name-558c" class="u-label u-text-body-alt-color">Nama Lengkap</label>
					<input type="text" placeholder="Masukkan Nama Lengkap Anda" id="name-558c" value="<?= $this->session->userdata('nama_lengkap') ?>" name="name" class="u-border-2 u-border-white u-input u-input-rectangle u-text-body-alt-color" required="">
				</div>
				<div class="u-form-group u-form-name u-form-group-1">
					<label for="name-558c" class="u-label u-text-body-alt-color">Username</label>
					<input type="text" placeholder="Masukkan Nama Lengkap Anda" id="name-558c" value="<?= $this->session->userdata('username') ?>" name="username" class="u-border-2 u-border-white u-input u-input-rectangle u-text-body-alt-color" required="">
				</div>
				<div class="u-form-group u-form-name u-form-group-1">
					<label for="name-558c" class="u-label u-text-body-alt-color">E-mail</label>
					<input type="text" placeholder="Masukkan Email Anda" id="email-bf1e" value="<?= $this->session->userdata('email') ?>" name="email" class="u-border-2 u-border-white u-input u-input-rectangle u-text-body-alt-color" required="">
				</div>
				<div class="u-form-group u-form-name u-form-group-1">
					<label for="name-558c" class="u-label u-text-body-alt-color">Verifikasi Password Anda</label>
					<input type="password" placeholder="Verifikasi Password Anda" name="password" class="u-border-2 u-border-white u-input u-input-rectangle u-text-body-alt-color" required="">
				</div>
				<div class="u-form-group u-form-name u-form-group-1">
					<input type="submit" value="Ubah Profil" class="u-border-2 u-border-white u-btn u-btn-submit u-button-style u-hover-white u-none u-text-body-alt-color u-text-hover-grey-80 u-btn-1">
				</div>
			</form>
		</div>
	</div>
</section>
</body>

</html>
