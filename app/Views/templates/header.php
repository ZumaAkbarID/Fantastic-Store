<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="<?= base_url(); ?>/assets/img/logo.png"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Beranda</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Store</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="category.html">Top Up Game</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-product.html">Beli Akun</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Testimoni</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('admin'); ?>">Menu Admin</a></li>
                        <?php if (!session()->get('isLoggedIn')) : ?>
                        <li class="nav-item" title="Login/Register"><a href="<?= base_url('/auth/login'); ?>"
                                class="nav-link"><span class="far fa-user"></span></a></li>
                        <?php else : ?>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false"><?= session('username'); ?></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="login.html">Settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="tracking.html">Riwayat</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->