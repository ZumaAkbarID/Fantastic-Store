<?= $this->extend('templates/AdminLayout'); ?>
<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>

        <div class="section-body">
            <!--================Single Product Area =================-->
            <div class="product_image_area mb-5">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h4>Total : <span><?= $testimoniCount; ?></span></h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                    <tr>
                                        <th>Pembeli</th>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Pembayaran</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                    <?php
                                    foreach ($testimoni as $riw) : ?>
                                    <tr>
                                        <td>
                                            <?php foreach ($allUser as $AU) : ?>
                                            <?php if ($AU->id == $riw->id_pembeli) : ?>
                                            <?= $AU->username; ?>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($allBarang as $AB) : ?>
                                            <?php if ($AB->id == $riw->id_barang) : ?>
                                            <?= $AB->nama; ?>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>Rp.<?= number_format($riw->total_harga, 2, ',', '.'); ?></td>
                                        <td><?= $riw->pembayaran; ?></td>
                                        <!-- Status [0 => 'failed', 1 => 'canceled', 2 => 'pending', 3 => 'success'] -->
                                        <td>
                                            <?php if ($riw->status == 0) {
                                                    echo '<span class="badge badge-danger">Gagal</span>';
                                                } elseif ($riw->status == 1) {
                                                    echo '<span class="badge badge-warning">Dibatalkan</span>';
                                                } elseif ($riw->status == 2) {
                                                    echo '<span class="badge badge-info">Pending</span>';
                                                } elseif ($riw->status == 3) {
                                                    echo '<span class="badge badge-success">Sukses</span>';
                                                } else {
                                                    echo '<span class="badge badge-danger">Tidak Jelas</span>';
                                                } ?>
                                        </td>
                                        <td><?= date('D H:i d-m-Y', strtotime($riw->created_date)); ?></td>
                                        <!-- <td><a href="<?= base_url(); ?>/admin/ubahtransaksi/<?= $riw->no_order; ?>"
                                                class="btn btn-success">Ubah</a></td> -->
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>