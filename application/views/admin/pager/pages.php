
<?php if ($this->uri->segment(2) == '' || $this->uri->segment(2) == '#0') { ?>
    <li class="nav-item active">
<?php } else {?>
    <li class="nav-item ">
<?php } ?>
    <a class="nav-link" href="<?php echo site_url('admin_pages') ?>">
        <i class="material-icons">dashboard</i>
        <p>Dashboard</p>
    </a>
</li>

<?php if ($this->uri->segment(2) == 'produk'){ ?>
    <li class="nav-item active">
<?php } else {?>
    <li class="nav-item ">
<?php } ?>
    <a class="nav-link" href="<?php echo site_url('admin_pages/produk') ?>">
        <i class="material-icons">list</i>
        <p>Produk</p>
    </a>
</li>

<!-- your sidebar here -->
<li class="nav-item active-pro ">
    <a class="nav-link" href="<?php echo site_url('user_control/logout') ?>">
        <i class="material-icons">logout</i>
        <p>Logout</p>
    </a>
</li>