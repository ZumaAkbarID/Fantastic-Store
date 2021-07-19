<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title><?= $title; ?></title>
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/nouislider.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/magnific-popup.css">
    <script src="<?= base_url(); ?>/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main.css">
</head>

<body>

    <?= $this->include('templates/header'); ?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('templates/footer'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="<?= base_url(); ?>/assets/js/vendor/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e0dce4af03.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.sticky.js"></script>
    <script src="<?= base_url(); ?>/assets/js/nouislider.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/countdown.js"></script>
    <script src="<?= base_url(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/vendor/jquery.pwstrength.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/auth-register.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?= base_url(); ?>/assets/js/gmaps.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>
</body>

</html>