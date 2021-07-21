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
                <form method="post" action="<?= base_url('barang/create'); ?>" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="card-header">
                        <h4>Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nama" id="nama" class="form-control" required="">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        Rp.
                                    </div>
                                </div>
                                <input type="number" name="harga" id="harga" class="form-control currency" min="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" required min="0">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tipe Barang</label>
                            <select name="tipe" id="tipe" required class="form-control">
                                <?php
                                foreach ($tipebarang as $tipe) {
                                    echo '<option value="' . $tipe->tipe . '">' . $tipe->tipe . '</option>';
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control" required>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label>Deskripsi</label>
                            <textarea class="summernote" name="deskripsi" id="deskripsi" required></textarea>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button name="submit" id="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>