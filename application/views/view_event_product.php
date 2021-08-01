<section class="u-clearfix u-section-1" id="sec-d87a">
	<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-sheet-1">
		<div class="u-expanded-width-lg u-expanded-width-md u-list u-list-1">
			<div class="u-repeater u-repeater-1">

				<?php $no = 1;
				foreach ($products as $product) : 
					$harga_diskon = $product->harga * (100 - $product->diskon) / 100;
				?>
					<div class="u-align-left u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-valign-top u-container-layout-<?php echo $no ?>">
							<img alt="" class="u-image u-image-default u-image-1" data-image-width="1600" data-image-height="1600" src="<?php echo base_url('upload/' . $product->image . '') ?>" data-href="<?php echo site_url('pages/view_event_product_description/' . $product->id) ?>" data-page-id="<?php echo $product->id ?>" data-animation-name="swing" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
							<h3 class="u-text u-text-1"><?php echo $product->nama_produk ?></h3>
							<h6 class="u-text u-text-2"><del><?php echo ("Rp. " . number_format($product->harga, 2, ",", ".")) ?></del></h6>
							<h5 class="u-text u-text-2"><b><?php echo ("Rp. " . number_format($harga_diskon, 2, ",", ".")) ?></b></h5>
						</div>
					</div>
				<?php $no++;
				endforeach; ?>
			</div>
		</div>
	</div>
</section>
