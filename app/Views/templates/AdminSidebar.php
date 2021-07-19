<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown <?= (@$page == 'dashboard') ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="<?= (@$subpage == 'general dashboard') ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?= base_url('admin'); ?>">General Dashboard</a></li>
                    <li class="<?= (@$subpage == 'ecommerce dashboard') ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?= base_url('admin/ecommerce'); ?>">Ecommerce Dashboard</a></li>
                </ul>
            </li>
            <li class="menu-header">Barang</li>
            <li class="dropdown <?= (@$page == 'barang') ? 'active' : ''; ?>">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Barang</span></a>
                <ul class="dropdown-menu">
                    <li class="<?= (@$subpage == 'list barang') ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?= base_url('barang'); ?>">List Barang</a></li>
                    <li class="<?= (@$subpage == 'tambah barang') ? 'active' : ''; ?>"><a class="nav-link"
                            href="<?= base_url('barang/create'); ?>">Tambah Barang</a></li>
                </ul>
            </li>
            <hr>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>