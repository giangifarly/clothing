<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="page_type" content="np-template-header-footer-from-plugin">

	<title><?php echo $judul; ?></title>

	<link rel="stylesheet" href="<?php echo base_url('assets/css') ?>/nicepage.css" media="screen">
	<?php
    if ($this->uri->segment(2) == "shop") {
        echo "<link rel='stylesheet' href='".base_url("assets/css")."/SHOP.css' media='screen'>";
    } elseif ($this->uri->segment(2)== "event") {
        echo "<link rel='stylesheet' href='".base_url("assets/css")."/Event1.css' media='screen'>";
    } elseif ($this->uri->segment(2) == "store") {
        echo "<link rel='stylesheet' href='".base_url("assets/css")."/Store.css' media='screen'>";
    } elseif ($this->uri->segment(2) == "") {
        echo "<link rel='stylesheet' href='".base_url("assets/css")."/HOME.css' media='screen'>";
    } elseif ($this->uri->segment(2) == "about") {
        echo "<link rel='stylesheet' href='".base_url("assets/css")."/About.css' media='screen'>";
    } elseif ($this->uri->segment(2) == "register") {
        echo "<link rel='stylesheet' href='".base_url("assets/css")."/Register.css' media='screen'>";
    } elseif ($this->uri->segment(2) == "profile") {
        echo "<link rel='stylesheet' href='".base_url("assets/css")."/Profile.css' media='screen'>";
    } elseif ($this->uri->segment(2) == "edit_profile") {
        echo "<link rel='stylesheet' href='".base_url("assets/css")."/Edit_profile.css' media='screen'>";
    } ?>

	

	<script class="u-script" type="text/javascript" src="<?php echo base_url('assets/plugins/picture-updated/dist') ?>/script.js" defer=""></script>
	<script class="u-script" type="text/javascript" src="<?php echo base_url('assets/js') ?>/jquery.js" defer=""></script>
	<script class="u-script" type="text/javascript" src="<?php echo base_url('assets/js') ?>/nicepage.js" defer=""></script>

	<meta name="generator" content="Nicepage 3.19.4, nicepage.com">

	<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
	<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
	<link rel="shortcut icon" href="<?php echo base_url('assets') ?>/images/xcvxcv.png" />


	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "",
			"logo": "images/xcvxcv.png",
			"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name",
				"https://instagram.com/name"
			]
		}
	</script>

	<meta name="theme-color" content="#478ac9">
	<meta name="twitter:site" content="@">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="HOME">
	<meta name="twitter:description" content="">
	<meta property="og:title" content="HOME">
	<meta property="og:type" content="website">
</head>


<?php if ($this->uri->segment(2) == '') { ?>
	<body data-home-page="" data-home-page-title="HOME" class="u-body u-overlap">
<?php } else { ?>
	<body class="u-body">
<?php } ?>

	<header class="u-clearfix u-header u-sticky u-header" id="sec-ab77">
		<nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
			<div class="menu-collapse">
				<a class="u-button-style u-nav-link" href="#">
					<svg>
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
					</svg>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<defs>
							<symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
								<rect y="1" width="16" height="2"></rect>
								<rect y="7" width="16" height="2"></rect>
								<rect y="13" width="16" height="2"></rect>
							</symbol>
						</defs>
					</svg>
				</a>
			</div>

			<?php include 'pages.php' ?>
		</nav><a href="<?php echo site_url('') ?>" class="u-image u-logo u-image-1" data-image-width="640" data-image-height="640" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down">
			<img src="<?php echo base_url('assets') ?>/images/xcvxcv.png" class="u-logo-image u-logo-image-1" data-image-width="64">
		</a>
	</header>
