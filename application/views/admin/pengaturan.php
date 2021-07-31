<div class="main-panel">
	<div class="content-wrapper">
		<div class="row flex-grow">
			<div class="col-md-3 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Ganti Password</h4>
						<p class="card-description">
							Jangan keseringan ganti password. Nanti lupa :)
						</p>
						<form class="forms-sample" action="<?= site_url('user_control/updatePassword') ?>" method="post">
							<div class="form-group">
								<label for="exampleInputPassword1">Password Lama</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password Lama" name="old_password" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password Baru</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password Baru" name="new_password" required>
							</div>
							<div class="form-group">
								<label for="exampleInputConfirmPassword1">Ulangi Password Baru</label>
								<input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Masukkan Ulan Password Baru" name="retype_new_password" required>
							</div>
							<button type="submit" class="btn btn-primary me-2">Ganti Password</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-4 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<div class="d-sm-flex justify-content-between align-items-start">
							<div>
								<h4 class="card-title">List Kategori</h4>
								<p class="card-description"></p>
							</div>
							<div>
								<div class="form-group">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelKategori">
										Tambah Kategori
									</button>
								</div>
							</div>
						</div>

						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Kategori</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($list_kategori as $k) { ?>
										<tr>
											<td><?= $no ?></td>
											<td><?= $k->kategori ?></td>
											<td>
												<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#modelEditKategori<?= $k->id ?>">Edit</button>
												<a href="<?= site_url('c_kategori/delete/') . $k->id ?>"><button class="btn btn-outline-danger btn-sm">Hapus</button></a>
											</td>
										</tr>
									<?php $no++;
									} ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "_partials/footer.php" ?>
</div>
