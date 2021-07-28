<div class="main-panel">
	<div class="content-wrapper">
		<div class="row flex-grow">
			<div class="col-sm-9 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title ">Tambah Produk</h4>
						<p class="card-category"></p>
						<?php echo form_open_multipart('admin_pages/addProduk', 'post'); ?>
						<div class="row">
							<div class="col-sm-8">
								<div class="row">
									<div class="col-md-7">
										<div class="form-group">
											<label class="bmd-label-floating">Nama Produk</label>
											<input type="text" class="form-control" name="nama_produk">
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<label class="bmd-label-floating">Harga</label>
											<input type="number" class="form-control" name="harga">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="bmd-label-floating">Kategori Produk</label>
											<select class="form-control" name="kategori_list">
												<option value="0">Pilih Kategori</option>
												<?php foreach ($list_kategori as $s) { ?>
													<option value="<?php echo $s->kategori ?>"><?php echo $s->kategori ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="bmd-label-floating">Tambah Kategori (jika kategori yang diinginkan tidak ada)</label>
											<input type="text" class="form-control" name="kategori_input" disabled>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Deskripsi Produk</label>
											<div class="form-group">
												<label class="bmd-label-floating"></label>
												<textarea class="form-control" rows="5" name="deskripsi" style="height: 150px;"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Tambah Gambar Produk</label>
									<div class="form-group">
										<label class="bmd-label-floating"></label>
										<div class="input-group">
											<input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" id="image-source" onchange="previewImage();">
										</div>
										<small id="helpId" class="text-muted"></small>
									</div>
								</div>
								<div class="form-group">
									<img class="form-control" id="image-preview" alt="image preview" class="img-thumbnail">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary pull-right">Tambah Produk</button>
						<div class="clearfix"></div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="col-sm-3 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title ">Filter Produk</h4>
						<p class="card-category"></p>
						<form action="produk" method="post">
							<div class="form-group">
								<select class="form-control" name="id">
									<option value=''>Pilih Kategori</option>
									<?php foreach ($list_kategori as $s) { ?>
										<option value="<?php echo $s->kategori ?>"><?php echo $s->kategori ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<input type="submit" value="Filter" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-sm-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<div class="d-sm-flex justify-content-between align-items-start">
							<div>
								<h4 class="card-title ">List Produk</h4>
								<p class="card-description">Data Produk yang telah tersimpan</p>
							</div>
							<div>
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="search_text" id="search_text" placeholder="Cari Berdasarkan Nama Produk" class="form-control" />
									</div>
								</div>
							</div>
						</div>

						<div id="result"></div>
					</div>
					<div style="clear:both"></div>
				</div>
			</div>
		</div>
	</div>
	<?php include "_partials/footer.php" ?>
</div>
