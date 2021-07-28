<div class="main-panel">
	<div class="content-wrapper">
		<div class="row flex-grow">
			<div class="col-sm-4 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title ">Cari Produk</h4>
						<p class="card-category">Cari Berdasarkan Nama Produk</p>
						<div class="form-group">
							<div class="input-group">
								<input type="text" name="search_text" id="search_text" placeholder="Cari Berdasarkan Nama Produk" class="form-control" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Ganti Password</h4>
						<p class="card-description">
							Jangan keseringan ganti password. Nanti lupa :)
						</p>
						<form class="forms-sample" action="<?= site_url('user_control/updatePassword') ?>" method="post">
							<div class="form-group">
								<label for="exampleInputPassword1">Password Lama</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="old_password" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password Baru</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="new_password" required>
							</div>
							<div class="form-group">
								<label for="exampleInputConfirmPassword1">Ulangi Password Baru</label>
								<input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" name="retype_new_password" required>
							</div>
							<button type="submit" class="btn btn-primary me-2">Ganti Password</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "_partials/footer.php" ?>
</div>
