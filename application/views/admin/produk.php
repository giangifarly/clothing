<!-- End Navbar -->
<title><?php echo $judul ?> | Clothing Admin</title>
<div class="main-panel">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
		<div class="container-fluid">
			<div class="navbar-wrapper">
				<a class="navbar-brand" href="javascript:;"><?php echo $judul ?></a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
				<span class="sr-only">Toggle navigation</span>
				<span class="navbar-toggler-icon icon-bar"></span>
				<span class="navbar-toggler-icon icon-bar"></span>
				<span class="navbar-toggler-icon icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="javascript:;">
							<i class="material-icons">notifications</i> Notifications
						</a>
					</li>
					<!-- your navbar here -->
				</ul>
			</div>
		</div>
	</nav>


	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header card-header-primary">
					<h4 class="card-title ">Data Produk</h4>
					<p class="card-category"></p>
				</div>
				<div class="card-body">
					<div id="result"></div>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
