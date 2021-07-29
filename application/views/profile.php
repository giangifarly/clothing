<section class="u-align-left u-clearfix u-section-1" id="carousel_d1af">
	<div class="u-clearfix u-sheet u-sheet-1">
		<div class="u-align-center u-black u-container-style u-group u-radius-50 u-shape-round u-group-1">
			<div class="u-container-layout u-valign-middle-xs u-container-layout-1">
				<h2 class="u-custom-font u-font-arial u-text u-text-1">Your Profile</h2>
			</div>
		</div>
		<div class="u-image u-image-circle u-image-1" alt="" data-image-width="1280" data-image-height="1280" style="background-image: url(<?= base_url('upload/profile/').$this->session->userdata('image') ?>) ;">
		</div>
		<div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
			<div class="u-layout">
				<div class="u-layout-row">
					<div class="u-container-style u-layout-cell u-size-12 u-layout-cell-1">
						<div class="u-container-layout u-container-layout-2">
							<h2 class="u-custom-font u-font-oswald u-text u-text-2">&nbsp; &nbsp;Nama&nbsp; :</h2>
							<h2 class="u-custom-font u-font-oswald u-text u-text-3">&nbsp; &nbsp;E-mail :</h2>
						</div>
					</div>
					<div class="u-container-style u-layout-cell u-size-48 u-layout-cell-2">
						<div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xl u-container-layout-3">
							<h2 class="u-custom-font u-font-oswald u-text u-text-4"><?= $this->session->userdata('nama_lengkap') ?></h2>
							<h2 class="u-custom-font u-font-oswald u-text u-text-5"><?= $this->session->userdata('email') ?></h2>
							<a href="<?php echo site_url('pages/edit_profile') ?>" data-page-id="533293" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">edit profile</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="u-align-center u-black u-clearfix u-section-2" id="sec-07cd">
	<div class="u-clearfix u-sheet u-sheet-1">
		<h3 class="u-custom-font u-font-arial u-text u-text-default u-text-1">Ubah Password</h3>
		<div class="u-form u-form-1">
			<form action="<?= site_url('user_control/updatePassword') ?>" method="post" style="padding: 41px;">
				<div class="u-form-group">
					<label for="text-89c5" class="u-label">Password Lama</label>
					<input type="password" placeholder="Masukan password lama" name="old_password" class="u-border-1 u-border-white u-input u-input-rectangle" required="required">
				</div>
				<div class="u-form-group">
					<label for="text-eb5b" class="u-label">Password Baru</label>
					<input type="password" placeholder="Masukan password baru" name="new_password" class="u-border-1 u-border-white u-input u-input-rectangle" required="required">
				</div>
				<div class="u-form-group">
					<label for="text-b7ad" class="u-label">Ulangi Password Baru</label>
					<input type="password" placeholder="Masukan password baru" name="retype_new_password" class="u-border-1 u-border-white u-input u-input-rectangle" required="required">
				</div>
				<input type="submit" value="Ganti Password" class="u-border-2 u-border-active-black u-border-hover-white u-border-white u-btn u-btn-submit u-button-style u-hover-white u-none u-text-hover-black u-text-white u-btn-1">
			</form>
		</div>
	</div>
</section>
</body>

</html>
