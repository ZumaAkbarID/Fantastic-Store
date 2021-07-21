<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>Hai, <br>Selamat Datang!</h1>
                                <p>Kamu iri sama temenmu karena ga punya skin divalorant?. Tenang saja kawan. di
                                    Fantastic Store kamu bisa membeli valorant point dengan harga murah lohh...
                                    ga percaya? buktikan sendiri</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href="<?= base_url('etalase/view/valorant-point'); ?>"><span
                                            class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Lihat Harga Valorant Point</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="<?= base_url(); ?>/assets/img/banner/phoenix.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
                    <div class="row single-slide">
                        <div class="col-lg-5">
                            <div class="banner-content">
                                <h1>Hai, Kamu<br>Baca Ini!</h1>
                                <p>Kamu merasa ga punya skill?, malu dikatain sama temen sebagai noob?, capek jadi beban
                                    tim?. Cheat kami solusinya! aman anti banned!!</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href="<?= base_url(); ?>/etalase/view/cheat-valorant"><span
                                            class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Lihat Harga Cheat</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="<?= base_url(); ?>/assets/img/banner/jett.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- start features Area -->
<section class="features-area section_gap">
    <div class="container">
        <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?= base_url(); ?>/assets/img/features/pajak.png" alt="" width="32" height="26">
                    </div>
                    <h6>Bebas Pajak</h6>
                    <p>Pajak Ditanggung Fantastic Store</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?= base_url(); ?>/assets/img/features/f-icon2.png" alt="">
                    </div>
                    <h6>Kebijakan pengembalian</h6>
                    <p>Dapat melakukan pengembalian, jika kesalahan kami</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?= base_url(); ?>/assets/img/features/f-icon3.png" alt="">
                    </div>
                    <h6>Dukungan 24 Jam</h6>
                    <p>Kami siap membantu jika terjadi masalah</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="<?= base_url(); ?>/assets/img/features/f-icon4.png" alt="">
                    </div>
                    <h6>Pembayaran Aman</h6>
                    <p>Pembayaran terintegrasi dengan ipaymu.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end features Area -->

<!-- Start category Area -->
<section class="category-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100"
                                src="<?= base_url(); ?>/assets/img/category/valorant-banner.jpg" alt="">
                            <a href="<?= base_url(); ?>/assets/img/category/valorant-banner.jpg" class="img-pop-up"
                                target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Valorant</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="<?= base_url(); ?>/assets/img/category/social-media.jpg"
                                alt="">
                            <a href="<?= base_url(); ?>/assets/img/category/social-media.jpg" class="img-pop-up"
                                target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Kebutuhan Sosial Media</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="<?= base_url(); ?>/assets/img/category/program.png"
                                alt="">
                            <a href="<?= base_url(); ?>/assets/img/category/program.png" class="img-pop-up"
                                target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Source Code</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="<?= base_url(); ?>/assets/img/category/csgo-banner.png"
                                alt="">
                            <a href="<?= base_url(); ?>/assets/img/category/csgo-banner.png" class="img-pop-up"
                                target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">CS:GO</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-deal">
                    <div class="overlay"></div>
                    <img class="img-fluid w-100" src="<?= base_url(); ?>/assets/img/category/cheats.jpg" alt="">
                    <a href="<?= base_url(); ?>/assets/img/category/cheats.jpg" class="img-pop-up" target="_blank">
                        <div class="deal-details">
                            <h6 class="deal-title">Sneaker for Sports</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End category Area -->

<!-- Start brand Area -->
<section class="brand-area section_gap">
    <div class="container">
        <div class="row">
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>/assets/img/brand/dana.jpg" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>/assets/img/brand/qris.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>/assets/img/brand/bri.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>/assets/img/brand/rekber.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>/assets/img/brand/codashop.png" alt="">
            </a>
        </div>
    </div>
</section>
<!-- End brand Area -->

<?= $this->endSection(); ?>