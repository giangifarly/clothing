<?php include "_modal.php" ?>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?php echo base_url('assets/dashboard/template') ?>/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url('assets/dashboard/template') ?>/vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url('assets/dashboard/template') ?>/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url('assets/dashboard/template') ?>/vendors/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url('assets/dashboard/template') ?>/js/off-canvas.js"></script>
<script src="<?php echo base_url('assets/dashboard/template') ?>/js/hoverable-collapse.js"></script>
<script src="<?php echo base_url('assets/dashboard/template') ?>/js/template.js"></script>
<script src="<?php echo base_url('assets/dashboard/template') ?>/js/settings.js"></script>
<script src="<?php echo base_url('assets/dashboard/template') ?>/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo base_url('assets/dashboard/template') ?>/js/dashboard.js"></script>
<script src="<?php echo base_url('assets/dashboard/template') ?>/js/Chart.roundedBarCharts.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?= $this->session->flashdata('notif') ?>

<script src="<?php echo base_url('assets/bower_components') ?>/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
	function previewImage() {
		document.getElementById("image-preview").style.display = "block";
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

		oFReader.onload = function(oFREvent) {
			document.getElementById("image-preview").src = oFREvent.target.result;
		};
	};

	function previewImageEdit() {
		document.getElementById("image-preview").style.display = "block";
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

		oFReader.onload = function(oFREvent) {
			document.getElementById("image-preview").src = oFREvent.target.result;
		};
	};

	$(document).ready(function() {

		load_data();
		<?php
		$id_event = $this->uri->segment(3);

		if ($this->uri->segment(2) == 'produk') {
			$site = site_url('C_FetchData/fetch_produk');
		} elseif ($this->uri->segment(2) == 'event') {
			$site = site_url('C_FetchData/fetch_event');
		}elseif ($this->uri->segment(2) == 'view_event') {
			$site = site_url('C_FetchData/fetch_eventProduk/'.$id_event);
		}
		?>

		function load_data(query) {
			$.ajax({
				url: "<?php echo $site; ?>",
				method: "POST",
				data: {
					query: query
				},
				success: function(data) {
					$('#result').html(data);
				}
			})
		}

		$('#search_text').keyup(function() {
			var search = $(this).val();
			if (search != '') {
				load_data(search);
			} else {
				load_data();
			}
		});
	});
</script>
<!-- End custom js for this page-->
</body>

</html>
