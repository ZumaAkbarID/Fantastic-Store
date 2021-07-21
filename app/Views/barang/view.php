<?= $this->extend('templates/AdminLayout'); ?>
<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>

        <div class="section-body">
            <div class="card card-info">
                <div class="card-header">
                    <h4><?= $barang->nama; ?></h4>
                    <div class="card-header-action">
                        <a href="<?= base_url('barang'); ?>" class="btn btn-primary">Lihat Semua List</a>
                        <a href="<?= base_url('barang/update/' . $barang->id); ?>" class="btn btn-warning">Update</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="chocolat-parent">
                                <a href="<?= base_url(); ?>/uploads/barang/img/<?= $barang->gambar; ?>"
                                    class="chocolat-image" title="<?= $barang->nama; ?>">
                                    <div data-crop-image="500">
                                        <img alt="image"
                                            src="<?= base_url(); ?>/uploads/barang/img/<?= $barang->gambar; ?>"
                                            class="img-fluid" width="400px">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <dl class="row">
                                <dt class="col-3"><b class="text-info">Nama Barang :</b></dt>
                                <dd class="col-9"><b class="text-info"><?= $barang->nama; ?></b></dd>
                                <dt class="col-3">Harga :</dt>
                                <dd class="col-9">Rp.<?= $barang->harga; ?></dd>
                                <dt class="col-3">Stok :</dt>
                                <dd class="col-9"><?= $barang->stok; ?></dd>
                                <dt class="col-3">Tipe :</dt>
                                <dd class="col-9"><?= $barang->tipe; ?></dd>
                                <dt class="col-3">Status :</dt>
                                <dd class="col-9">
                                    <?= ($barang->status == 1) ? 'Public' : 'Private'; ?>
                                </dd>
                                <dt class="col-3">Deskripsi :</dt>
                                <dd class="col-9"><?= $barang->deskripsi; ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>