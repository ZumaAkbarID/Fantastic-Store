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
                <form method="post" action="<?= base_url('barang/update/' . $barang->id); ?>"
                    enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="card-header">
                        <h4>Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nama" id="nama" class="form-control" required=""
                                value="<?= $barang->nama; ?>">
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
                                <input type="number" name="harga" id="harga" class="form-control currency" min="0"
                                    value="<?= $barang->harga; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" required min="0"
                                value="<?= $barang->stok; ?>">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tipe Barang</label>
                            <select name="tipe" id="tipe" required class="form-control">
                                <?php
                                foreach ($tipebarang as $tipe) :
                                ?>
                                <option <?= ($barang->tipe == $tipe->tipe) ? 'selected' : ''; ?>
                                    value="<?= $tipe->tipe; ?>"><?= $tipe->tipe; ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <div class="chocolat-parent">
                                <a href="<?= base_url(); ?>/uploads/barang/img/<?= $barang->gambar; ?>"
                                    class="chocolat-image" title="<?= $barang->nama; ?>">
                                    <div data-crop-image="100">
                                        <img alt="image"
                                            src="<?= base_url(); ?>/uploads/barang/img/<?= $barang->gambar; ?>"
                                            class="img-fluid" width="100px">
                                    </div>
                                </a>
                            </div>
                            <p class="text-warning">Upload gambar lagi jika ingin mengganti.<br>Jika gambar sama, tidak
                                perlu upload lagi.</p>
                            <input type="file" name="gambar" id="gambar" class="form-control">
                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" required=""
                                rows="10"><?= $barang->deskripsi; ?></textarea>
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