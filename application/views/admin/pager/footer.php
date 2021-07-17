<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
        <!-- your footer here -->
    </div>
</footer>
</div>
</div>

<script src="<?php echo base_url('assets/bower_components') ?>/jquery/dist/jquery.min.js"></script>
<script>
	$(document).ready(function() {

		load_data();
		<?php
		if ($this->uri->segment(2) == 'produk') {
			$site = site_url('admin_pages/fetch_produk');
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
</body>

</html>
