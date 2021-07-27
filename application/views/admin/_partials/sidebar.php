<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- Material Kit CSS -->
	<link href="<?php echo base_url('') ?>/assets/dashboard/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
	
	<title><?php echo $judul ?> | Clothing Admin</title>
</head>


<body>
	<div class="wrapper ">
		<div class="sidebar" data-color="purple" data-background-color="white">
			<!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text logo-normal">
					Creative Tim
				</a>
			</div>

			<div class="sidebar-wrapper">
				<ul class="nav">
					<?php include 'pages.php' ?>
				</ul>
			</div>
		</div>
		<!-- End Navbar -->
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
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('') ?>">
									<i class="material-icons"></i> Go To Webpage
								</a>
							</li>
							<!-- your navbar here -->
						</ul>
					</div>
				</div>
			</nav>
