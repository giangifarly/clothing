<div class="main-panel">
	<?php
	$event_status = $event->event_status;
	if ($event_status == 1) {
		$status = "Aktif";
	} else {
		$status = "Tidak Aktif";
	}
	?>
	<div class="content-wrapper">
		<div class="row flex-grow">
			<div class="col-sm-8 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title "><?= $judul ?></h4>
						<p class="card-category"></p>
						<div class="row">
							<div class="col-sm-9">
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label class="bmd-label-floating">Nama Event</label>
											<input type="text" class="form-control" name="event" value="<?= $event->event ?>" disabled>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="bmd-label-floating">Jumlah Diskon (Dalam Persen)</label>
											<input type="number" class="form-control" name="diskon" placeholder="Contoh : 50 (untuk 50%)" value="<?= $event->diskon ?>" disabled>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label class="bmd-label-floating">Status Event</label>
											<input type="text" class="form-control" name="diskon" value="<?= $status ?>" disabled>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-group">
										<label>Deskripsi Event</label>
										<label class="bmd-label-floating"></label>
										<textarea class="form-control" rows="5" name="deskripsi" style="height: 150px;" disabled><?= $event->deskripsi ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<button class="btn btn-success pull-right" data-toggle="modal" data-target="#modelEditEvent<?= $event->id ?>">Edit Event</button>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<img class="form-control" src="<?= base_url('upload/event/') . $event->image ?>" alt="Logo Event" style="display: block;" id="image-preview">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="d-sm-flex justify-content-between align-items-start">
							<div>
								<h4 class="card-title">List Produk</h4>
								<p class="card-text">List Produk yang masuk dalam event <?= $event->event ?></p>
							</div>
							<div>
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="search_text" id="search_text" placeholder="Cari Berdasarkan Nama Produk" class="form-control" />
									</div>
								</div>
							</div>
							<div>
								<div class="form-group">
									<div class="input-group">
										<button class="btn btn-primary" data-toggle="modal" data-target="#modelEventProduk">Tambah Event Produk</button>
									</div>
								</div>
							</div>
						</div>
						<div id="result"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
