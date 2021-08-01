<section class="u-clearfix u-section-1" id="sec-f7d4">
	<div class="u-clearfix u-sheet u-sheet-1">
		<div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
			<div class="u-layout">
				<?php foreach($products as $products): 
					$harga_diskon = $products->harga * (100 - $products->diskon) / 100;?>
					
				<div class="u-layout-row">
					<div class="u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-white u-layout-cell-1" src="" data-animation-name="rotateIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
						<div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-top-xs u-container-layout-1">
							<img class="u-expanded-width-xs u-image u-image-1" src="<?php echo base_url('upload/' . $products->image . '') ?>" data-image-width="1600" data-image-height="1600" data-animation-name="flipIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="X">
						</div>
					</div>
					<div class="u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-layout-cell-2" src="">
						<div class="u-container-layout u-container-layout-2" src="">
							<h2 class="u-align-center u-text u-text-1"><?php echo $products->nama_produk ?></h2>
							<h5 class="u-align-center u-text u-text-2"><del><?php echo ("Rp. " . number_format($products->harga, 2, ",", ".")) ?></del></h5>
							<h4 class="u-align-center u-text u-text-2"><?php echo ("Rp. " . number_format($harga_diskon, 2, ",", ".")) ?></h4>
							<h4 class="u-align-center u-text u-text-grey-50 u-text-3">TOXIC SHOCK</h4>
							<center>
								<p class="u-custom-font u-font-arial u-text u-text-4"><?php echo $products->deskripsi ?>
							</center>
							</p>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
