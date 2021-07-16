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
	
	<link rel="stylesheet" href="<?php echo base_url('assets/css') ?>/HOME.css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('assets/css') ?>/nicepage.css" media="screen">

	<script class="u-script" type="text/javascript" src="<?php echo base_url('assets/js') ?>/jquery.js" defer=""></script>
	<script class="u-script" type="text/javascript" src="<?php echo base_url('assets/js') ?>/nicepage.js" defer=""></script>

	<meta name="generator" content="Nicepage 3.19.4, nicepage.com">

	<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
	<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">


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

<?php
    if ($this->uri->segment(3) == '') {
        echo '<body class="u-body u-overlap">';
    }else{
        echo '<body class="u-body u-overlap">';
    }
?>
