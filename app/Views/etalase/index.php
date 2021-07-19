<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1><?= $title; ?></h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= base_url(); ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Store</a>
                    <!-- <a href="category.html">Category</a> -->
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Kategori</div>
                <ul class="main-categories">
                    <li class="nav-main-list">
                        <p>Klik untuk membuka kategori</p>
                    </li>
                    <li class="main-nav-list">
                        <a data-toggle="collapse" href="#valorant" aria-expanded="false" aria-controls="valorant"><span
                                class="lnr lnr-arrow-right"></span>Valorant<span class="number"></span></a>
                        <ul class="collapse" id="valorant" data-toggle="collapse" aria-expanded="false"
                            aria-controls="fruitsVegetable">
                            <li class="main-nav-list child">
                                <a href="<?= base_url(); ?>/etalase/view/valorant-point">Valorant Point<span
                                        class="number"></span></a>
                            </li>
                            <li class="main-nav-list child">
                                <a href="<?= base_url(); ?>/etalase/view/akun-valorant">Akun Valorant<span
                                        class="number"></span></a>
                            </li>
                            <li class="main-nav-list child">
                                <a href="<?= base_url(); ?>/etalase/view/cheat-valorant">Cheat Valorant<span
                                        class="number"></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
                    <?php
                    foreach ($barang as $key) :
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="<?= base_url(); ?>/uploads/barang/img/<?= $key->gambar; ?>"
                                alt="" width="200px" height="300px">
                            <div class="product-details">
                                <h6><?= $key->nama; ?></h6>
                                <div class="price">
                                    <h6>Rp.<?= number_format($key->harga, 0, ',', '.'); ?></h6>
                                    <!-- <h6 class="l-through">210.00</h6> -->
                                </div>
                                <div class="prd-bottom">

                                    <a href="<?= base_url(); ?>/etalase/beli/<?= $key->id; ?>" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">Beli</p>
                                    </a>
                                    <a href="<?= base_url(); ?>/etalase/detail/<?= $key->id; ?>" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">Detail</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!-- endProduct -->
                    <?php if ($barang == null) : ?>
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-warning my-5 mx-5">Produk Belum Tersedia</h1>
                        </div>
                    </div>
                    <?php endif ?>
                </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>