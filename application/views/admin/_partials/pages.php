<?php if ($this->uri->segment(2) == '' || $this->uri->segment(2) == null) { ?>
	<li class="nav-item active">
<?php } else { ?>
	<li class="nav-item">
<?php } ?>
	<a class="nav-link" href="<?php echo site_url('admin_pages/') ?>">
		<i class="mdi mdi-grid-large menu-icon"></i>
		<span class="menu-title">Dashboard</span>
	</a>
</li>

<li class="nav-item nav-category">Konfigurasi Produk</li>

<li class="nav-item ">

	<a class="nav-link" href="<?php echo site_url('admin_pages/produk') ?>">
		<i class="mdi mdi-format-list-bulleted menu-icon"></i>
		<span class="menu-title">Produk</span>
	</a>
</li>

<li class="nav-item ">

	<a class="nav-link" href="<?php echo site_url('admin_pages/event') ?>">
		<i class="mdi mdi-cart menu-icon"></i>
		<span class="menu-title">Event</span>
	</a>
</li>

<li class="nav-item nav-category">Pengaturan</li>

<li class="nav-item ">
	<a class="nav-link" href="<?php echo site_url('admin_pages/pengaturan') ?>">
		<i class="mdi mdi-settings menu-icon"></i>
		<span class="menu-title">Pengaturan</span>
	</a>
</li>


