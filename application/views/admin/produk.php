<div class="content">
	<div class="container-fluid">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title ">Tambah Produk</h4>
				<p class="card-category"></p>
			</div>
			<div class="card-body">
				<form>
					<div class="row">
						<div class="col-lg-8">
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
										<input type="number" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Kategori Produk</label>
										<select class="form-control" name="kategori_list">
											<option value="0">Pilih Kategori</option>
											<?php foreach ($list_produk as $s) { ?>
												<option value="<?php echo $s->kategori ?>"><?php echo $s->kategori ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Tambah Kategori (jika kategori yang diinginkan tidak ada)</label>
										<input type="text" class="form-control" name="kategori_input">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Deskripsi Produk</label>
										<div class="form-group">
											<label class="bmd-label-floating"></label>
											<textarea class="form-control" rows="5"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label>Tambah Gambar Produk</label>
								<div class="form-group">
									<label class="bmd-label-floating"></label>
									<textarea class="form-control" rows="5"></textarea>
								</div>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary pull-right">Tambah Produk</button>
					<div class="clearfix"></div>
				</form>
			</div>
			<div style="clear:both"></div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Cari Produk</h4>
						<p class="card-category">Cari Berdasarkan Nama Produk</p>
					</div>
					<div class="card-body">
						<div class="form-group">
							<div class="input-group">
								<input type="text" name="search_text" id="search_text" placeholder="Cari Berdasarkan Nama Produk" class="form-control" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Filter Produk</h4>
						<p class="card-category"></p>
					</div>
					<div class="card-body">
						<form action="produk" method="post">
							<div class="form-group">
								<select class="form-control" name="id">
									<option value=''>Pilih Kategori</option>
									<?php foreach ($list_produk as $s) { ?>
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
		</div>

		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title ">List Produk</h4>
				<p class="card-category"></p>
			</div>
			<div class="card-body">
				<div id="result"></div>
			</div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>
