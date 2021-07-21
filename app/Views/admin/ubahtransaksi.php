<?= $this->extend('templates/AdminLayout'); ?>
<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>

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

        <div class="section-body">
            <div class="card">
                <div class="col-3">
                    <a href="<?= base_url('barang'); ?>" class="btn btn-info">Batal Update</a>
                </div>
                <form method="post" action="<?= base_url('admin/ubahtransaksi/' . $transaksi->no_order); ?>"
                    enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="no_order" value="<?= $transaksi->no_order; ?>">
                    <div class="card-header">
                        <h4>Transaksi</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="status" required class="form-control">
                                <option value="0">Gagal</option>
                                <option value="1">Dibatalkan</option>
                                <option value="2" selected>Pending</option>
                                <option value="3">Sukses</option>
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button name="submit" id="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>