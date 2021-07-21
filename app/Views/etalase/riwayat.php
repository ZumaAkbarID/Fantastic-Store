<?= $this->extend('templates/layout'); ?>
<?= $this->section('content'); ?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1><?= $title; ?></h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= base_url(); ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                    <a href="">Riwayat</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Single Product Area =================-->
<div class="product_image_area mb-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <!-- <h4>Barang</h4> -->
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>No Order</th>
                            <th>Produk</th>
                            <th>Target</th>
                            <th>Harga</th>
                            <th>Pembayaran</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                        <?php
                        if ($riwayat == null) {
                            echo '<tr><h3 class="text-danger">Belum Ada Transaksi, Silahkan Melakukan Transaksi Terlebih Dahulu</h3></tr>';
                        }
                        foreach ($riwayat as $riw) : ?>
                        <tr>
                            <td>#<?= $riw->no_order; ?></td>
                            <td>
                                <?php foreach ($allBarang as $AB) : ?>
                                <?php if ($AB->id == $riw->id_barang) : ?>
                                <?= $AB->nama; ?>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </td>
                            <td><?= $riw->tujuan; ?></td>
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
                            <td><?= date('D d-m-Y H:i', strtotime($riw->created_date)); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>