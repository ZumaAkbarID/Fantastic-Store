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
                    <a href="<?= base_url('etalase'); ?>">Store<span class="lnr lnr-arrow-right"></span></a>
                    <a href="">Detail Produk</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area mb-5">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_Product_carousel">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="<?= base_url(); ?>/uploads/barang/img/<?= $barang->gambar; ?>"
                            alt="">
                    </div>
                    <div class="single-prd-item">
                        <img class="img-fluid" src="<?= base_url(); ?>/uploads/barang/img/<?= $barang->gambar; ?>"
                            alt="">
                    </div>
                    <div class="single-prd-item">
                        <img class="img-fluid" src="<?= base_url(); ?>/uploads/barang/img/<?= $barang->gambar; ?>"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3><?= $barang->nama; ?></h3>
                    <h2>Rp.<?= number_format($barang->harga, 2, ',', '.'); ?></h2>
                    <ul class="list">
                        <li><a class="active"
                                href="<?= base_url('etalase/view/' . $barang->tipe); ?>"><span>Kategori</span> :
                                <?= $barang->tipe; ?></a></li>
                        <?php if ($barang->updated_date == null) : ?>
                        <li><a href="#"><span>Dipublikasikan Pada</span> :
                                <?= date('D d-m-Y H:i:s', strtotime($barang->created_date)); ?></a></li>
                        <li><a href=""><span>Dipublikasikan Oleh</span> : <?= $seller; ?></a></li>
                        <?php else : ?>
                        <li><a href="#"><span>Diperbarui Pada</span> :
                                <?= date('D d-m-Y H:i:s', strtotime($barang->updated_date)); ?></a></li>
                        <li><a href=""><span>Diperbarui Oleh</span> : <?= $seller; ?></a></li>
                        <?php endif; ?>
                        <li><a href="#"><span>Ketersediaan</span> : <?= $barang->stok; ?></a></li>
                        <li><a href="#"><span>Desrkipsi</span> :</a></li>
                    </ul>
                    <div class="text">
                        <?= $barang->deskripsi; ?>
                    </div>
                    <div class="card_area d-flex align-items-center">
                        <a class="primary-btn" href="<?= base_url(); ?>/etalase/beli/<?= $barang->id; ?>">Beli</a> |
                        | <a class="primary-btn ml-2" href="<?= base_url('etalase'); ?>">Kembali ke list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->


<?= $this->endSection(); ?>