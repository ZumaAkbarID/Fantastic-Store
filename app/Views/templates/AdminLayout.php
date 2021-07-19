<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/stisla/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/stisla/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- JS Need in Upsite -->
    <script src="<?= base_url(); ?>/stisla/assets/modules/jquery.min.js"></script>

    <?php
    if (isset($cssLibraries)) {
        echo $cssLibraries;
    }
    ?>

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/stisla/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/stisla/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <?= $this->include('templates/AdminNavbar'); ?>

            <?= $this->include('templates/AdminSidebar'); ?>

            <?= $this->renderSection('content'); ?>

            <?= $this->include('templates/AdminFooter'); ?>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url(); ?>/stisla/assets/modules/popper.js"></script>
    <script src="<?= base_url(); ?>/stisla/assets/modules/tooltip.js"></script>
    <script src="<?= base_url(); ?>/stisla/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/stisla/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url(); ?>/stisla/assets/modules/moment.min.js"></script>
    <script src="<?= base_url(); ?>/stisla/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <?php
    if (isset($jsLibraries)) {
        echo $jsLibraries;
    }
    ?>

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url(); ?>/stisla/assets/js/scripts.js"></script>
    <script src="<?= base_url(); ?>/stisla/assets/js/custom.js"></script>
</body>

</html>