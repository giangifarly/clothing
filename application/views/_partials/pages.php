<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

<div class="u-custom-menu u-nav-container">
	<ul class="u-nav u-unstyled">
		<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('') ?>">HOME</a>
		</li>
		<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('pages/shop') ?>">SHOP</a>
		</li>
		<?php if ($this->session->userdata('id') > 0) { ?>
			<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('pages/event') ?>">EVENT</a>
		<?php } ?>

		</li>
		<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('pages/store') ?>">STORE</a>
		</li>
		<li class="u-nav-item"><a class="u-button-style u-nav-link">ABOUT</a>
		</li>
		<?php if ($this->session->userdata('id') > 0) { ?>
			<li class="u-nav-item">
				<div class="dropdown">
					<button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<b><?php echo $this->session->userdata('username'); ?></b>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="<?php echo site_url('member_pages/profile') ?>">Profil</a>
						<a class="dropdown-item btn-outline-danger" href="<?php echo site_url('user_control/logout') ?>">Log Out</a>
					</div>
				</div>
			</li>

			<?php if ($this->session->userdata('level') == 1) { ?>
				<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('admin_pages') ?>"><button class="btn btn-outline-info">Admin Dashboard</button></a>
				</li>
			<?php } ?>

		<?php } else { ?>
			<li class="u-nav-item">
				<a class="btn btn-outline-dark btn-lg" href="<?php echo site_url('pages/login') ?>">LOG IN</a>
				<a class="btn btn-dark btn-lg" href="<?php echo site_url('pages/login') ?>">REGISTER</a>
			</li>
		<?php } ?>

	</ul>
</div>
<div class="u-custom-menu u-nav-container-collapse">
	<div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
		<div class="u-sidenav-overflow">
			<div class="u-menu-close"></div>
			<ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
				<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('') ?>">HOME</a>
				</li>
				<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('pages/shop') ?>">SHOP</a>
				</li>
				<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('pages/event') ?>">EVENT</a>
				</li>
				<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('pages/store') ?>">STORE</a>
				</li>
				<li class="u-nav-item"><a class="u-button-style u-nav-link">ABOUT</a>
				</li>
				<li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('pages/login') ?>"><button class="btn btn-dark">LOG IN</button></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
</div>
