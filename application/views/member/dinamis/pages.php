<div class="u-custom-menu u-nav-container">
    <ul class="u-nav u-unstyled">
        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('member_pages') ?>">HOME</a>
        </li>
        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('member_pages/shop') ?>">SHOP</a>
        </li>
        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('member_pages/event') ?>">EVENT</a>
        </li>
        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('member_pages/store') ?>">STORE</a>
        </li>
        <li class="u-nav-item"><a class="u-button-style u-nav-link">ABOUT</a>
        </li>
        <li class="u-nav-item">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b><?php echo $this->session->userdata('username'); ?></b>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?php echo site_url('member_pages/profile') ?>">Profil</a>
                    <a class="dropdown-item btn-outline-danger" href="<?php echo site_url('user_control/logout') ?>">Log Out</a>
                </div>
            </div>
        </li>
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
                <li class="u-nav-item"><a class="u-button-style u-nav-link"href="<?php echo site_url('') ?>">ABOUT</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="<?php echo site_url('member_pages/profile') ?>"><b><?php echo $this->session->userdata('username'); ?></b></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
</div>