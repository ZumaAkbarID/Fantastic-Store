<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Register</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= base_url(); ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                    <a href="">Register</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="<?= base_url(); ?>/assets/img/login.jpg" alt="">
                    <div class="hover">
                        <h4>Sudah punya akun?</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this
                            is the</p>
                        <a class="primary-btn" href="<?= base_url(); ?>/auth/login">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Register Akun Fantastic Store</h3>
                    <?php
                    $session = session();
                    $errors = $session->getFlashdata('errors');
                    $success = $session->getFlashdata('success');
                    ?>

                    <script>
                    $(function() {

                        <?php if ($errors !== null) { ?>
                        Swal.fire({
                            icon: 'error',
                            title: 'Terjadi Kesalahan',
                            text: '<?php foreach ($errors as $err) echo $err . ", " ?>',
                            footer: '<a href="<?= base_url('/contact'); ?>">Kesalahan sistem? klik disini</a>'
                        })
                        <?php } ?>


                        <?php if ($success !== null) { ?>
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: '<?= $success; ?>'
                        })
                        <?php } ?>
                    });
                    </script>

                    <form class="row login_form" action="<?= base_url('/auth/register'); ?>" method="post"
                        id="contactForm" novalidate="novalidate">
                        <?= csrf_field(); ?>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Password'">
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="repeatPassword" name="repeatPassword"
                                placeholder="Ulangi Password" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Ulangi Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

<?= $this->endSection(); ?>