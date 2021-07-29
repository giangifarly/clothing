<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title "><?= $judul ?></h4>
				<p class="card-category"></p>
				<?php echo form_open_multipart('admin_pages/produkUpdate', 'post'); ?>
				<input type="hidden" name="id" value="<?php echo $product->id ?>">
				<div class="row">
					<div class="col-lg-8">
						<div class="row">
							<div class="col-md-7">
								<div class="form-group">
									<label class="bmd-label-floating">Nama Produk</label>
									<input type="text" class="form-control" name="nama_produk" value="<?php echo $product->nama_produk ?>">
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label class="bmd-label-floating">Harga</label>
									<input type="number" class="form-control" name="harga" value="<?php echo $product->harga ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Kategori Produk</label>
									<input type="hidden" name="old_kategori" value="<?php echo $product->kategori ?>">
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
										<textarea class="form-control" rows="5" name="deskripsi" style="height: 150px;"><?php echo $product->deskripsi ?></textarea>
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
								<div class="input-group">
									<input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" id="image-source" onchange="previewImage();">
								</div>
								<small id="helpId" class="text-muted"></small>
							</div>
						</div>
						<div class="form-group">
							<img class="form-control" id="image-preview" alt="image preview" class="img-thumbnail">
						</div>
						<input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
					</div>
				</div>
				<button type="submit" class="btn btn-primary pull-right"><?php echo $judul ?></button>
				<div class="clearfix"></div>
				<?php echo form_close(); ?>
			</div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>
