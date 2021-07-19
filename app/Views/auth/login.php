<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= base_url(); ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                    <a href="">Login</a>
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
                        <h4>New to our website?</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this
                            is the</p>
                        <a class="primary-btn" href="<?= base_url(); ?>/auth/register">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Login ke Fantastic Store</h3>
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
                            text: '<?php foreach ($success as $succ) echo $succ; ?>',
                            showConfirmButton: False,
                            timer: 2000
                        }).then((result) => {
                            window.location.href = <?= base_url('home'); ?>
                        })

                        <?php } ?>
                    });
                    </script>
                    <form class="row login_form" action="<?= base_url('/auth/login'); ?>" method="post" id="contactForm"
                        novalidate="novalidate">
                        <?= csrf_field(); ?>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Ingat saya</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Log In</button>
                            <a href="#">Lupa Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->

<?= $this->endSection(); ?>