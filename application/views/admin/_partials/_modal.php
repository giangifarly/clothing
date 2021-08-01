<!-- START Modal Kategori -->
<div class="modal fade" id="modelKategori" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= site_url('c_kategori/addKategori') ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Kategori</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Kategori Produk</label>
						<input type="text" class="form-control" name="kategori" aria-describedby="inputKategori" placeholder="Masukkan Kategori Produk">
						<small id="inputKategori" class="form-text text-muted"></small>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- END Modal Kategori -->

<!-- START Modal Edit Kategori -->
<?php
foreach ($list_kategori as $k) :
	$id = $k->id;
	$kategori = $k->kategori;
?>
	<div class="modal fade" id="modelEditKategori<?= $id ?>" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form action="<?= site_url('c_kategori/updateKategori') ?>" method="post">
					<div class="modal-header">
						<h5 class="modal-title">Edit Kategori</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<input type="hidden" name="id" id="id" value="<?= $id ?>">
							<label for="">Kategori Produk</label>
							<input type="text" class="form-control" name="kategori" id="kategori" value="<?= $kategori ?>" placeholder="Masukkan Kategori Produk">
							<small id="inputKategori" class="form-text text-muted"></small>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<!-- END Modal Edit Kategori -->

<!-- START Modal Edit Event -->
<?php
foreach ($list_event as $e) :
	$id = $e->id;
	$event = $e->event;
	$deskripsi = $e->deskripsi;
	$diskon = $e->diskon;
	$event_status = $e->event_status;
	$image = $e->image;
?>
	<div class="modal fade" id="modelEditEvent<?= $id ?>" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form action="<?= site_url('c_event/update') ?>" method="post" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Edit Event</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							<input type="hidden" value="<?= $id ?>" name="id">
							<input type="hidden" value="<?= $event_status ?>" name="event_status">
						</button>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label class="bmd-label-floating">Nama Event</label>
							<input type="text" class="form-control" name="event" value="<?= $event ?>">
						</div>
						<div class="form-group">
							<label class="bmd-label-floating">Jumlah Diskon (Dalam Persen)</label>
							<input type="number" class="form-control" name="diskon" placeholder="Contoh : 50 (untuk 50%)" value="<?= $diskon ?>">
						</div>
						<div class="form-group">
							<div class="form-group">
								<label>Deskripsi Event</label>
								<label class="bmd-label-floating"></label>
								<textarea class="form-control" rows="5" name="deskripsi" style="height: 150px;"><?= $deskripsi ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<img class="form-control" id="image-preview" alt="image preview" class="img-thumbnail">
							<input type="hidden" name="old_image" value="<?= $image ?>">
						</div>
						<div class="form-group">
							<label for="event_status">Status Event</label>
							<select class="form-control" name="event_status">
								<?php if ($event_status == 0) : ?>
									<option value="0" selected>Tidak Aktif</option>
									<option value="1">Aktif</option>
								<?php elseif ($event_status == 1) : ?>
									<option value="0">Tidak Aktif</option>
									<option value="1" selected>Aktif</option>
								<?php endif ?>
							</select>
						</div>
						<div class="form-group">
							<div class="form-group">
								<label>Tambah Gambar Event</label>
								<label class="bmd-label-floating"></label>
								<div class="input-group">
									<input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" id="image-source">
								</div>
								<small id="helpId" class="text-muted"></small>
							</div>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<!-- END Modal Edit Event -->

<!-- START Modal Kategori -->
<?php foreach ($list_event as $e) :
	$id = $e->id;
	$diskon = $e->diskon;
?>
<div class="modal fade" id="modelEventProduk" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= site_url('c_event/addProductEvent') ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Kategori</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="">Masukkan Produk yang akan masuk dalam event</label>
						<select class="form-control" name="id_produk">
							<option>Pilih Produk</option>
							<?php foreach ($list_produk as $p) { ?>
								<option value="<?php echo $p->id ?>"><?php echo $p->nama_produk ?></option>
							<?php } ?>
						</select>
						<input type="hidden" name="id_event" value="<?= $id ?>">
						<input type="hidden" name="diskon" value="<?= $diskon ?>">
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php endforeach; ?>
<!-- END Modal Kategori -->
