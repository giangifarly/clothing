<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $judul ?> | Clothing Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/template') ?>/vendors/feather/feather.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/template') ?>/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/template') ?>/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/template') ?>/vendors/typicons/typicons.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/template') ?>/vendors/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/template') ?>/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/template') ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/template') ?>/js/select.dataTables.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/template') ?>/css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?php echo base_url('assets') ?>/images/xcvxcv.png" />

</head>

<body>
	<style type="text/css">
		#image-preview {
			display: none;
			width: 100%;
			height: 100%;
		}
	</style>

	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<?php include "navbar.php" ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_settings-panel.html -->
			<?php include "settings_panel.php" ?>
			<!-- partial -->
			<!-- partial:partials/_sidebar.html -->
			<?php include "sidebar.php" ?>
			<!-- partial -->
