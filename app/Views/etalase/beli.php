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
                    <a href="">Cart</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<div class="container my-5">
    <div class="section-body">
        <div class="invoice">
            <form method="POST" action="<?= base_url(); ?>/etalase/process">
                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title">
                                <h2>Tagihan</h2>
                                <div class="invoice-number">Order #<?= $invoice = rand(21, 300); ?></div>
                                <input type="hidden" name="no_order" value="<?= $invoice; ?>">
                                <input type="hidden" name="id_barang" value="<?= $model->id; ?>">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong>Ditagih ke :</strong><br>
                                        <?= session()->get('username'); ?><br>
                                    </address>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Dikirim Oleh :</strong><br>
                                        Muhamad Fajri<br>
                                        CEO Fantastic
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <?php if ($model->tipe == 'valorant-point') : ?>
                                    <address>
                                        <strong>Username#RiotID:</strong><br>
                                        <div class="form-group">
                                            <input type="text" name="acc" id="acc" class="form-control"
                                                placeholder="cnth: Reekid#5020" required>
                                        </div>
                                    </address>
                                    <?php else : ?>
                                    <address>
                                        <strong>Nomor WhatsApp (Untuk mengirim data pesanan, dan
                                            konfirmasi):</strong><br>
                                        <div class="form-group">
                                            <input type="number" name="acc" id="acc" class="form-control"
                                                placeholder="cnth: 6285xxxxxx" required>
                                        </div>
                                    </address>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Tanggal Tagihan:</strong><br>
                                        <?= date('H:i:s d-m-Y'); ?><br><br>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <p class="section-lead">Barang yang telah dipilih tidak dapat dirubah.</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th data-width="40">No</th>
                                        <th>Gambar</th>
                                        <th>Barang</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-right">Totals</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="<?= base_url(); ?>/uploads/barang/img/<?= $model->gambar; ?>"
                                                alt="" width="100px"></td>
                                        <td><?= $model->nama; ?></td>
                                        <td class="text-center">Rp.<?= number_format($model->harga, 2, ',', '.'); ?>
                                        </td>
                                        <td class="text-right">Rp.<?= number_format($model->harga, 2, ',', '.'); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-8">
                                    <p class="section-lead">Pilih metode pembayaran.</p>
                                    <div class="images">
                                        <select name="pembayaran" id="pembayaran" class="form-control" required>
                                            <option value="Dana">
                                                Dana
                                            </option>
                                            <option value="QRIS" disabled>
                                                QRIS (Maintenance)
                                            </option>
                                            <option value="BRI" disabled>
                                                BRI (Maintenance)
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <hr class="mt-2 mb-2">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Total</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">
                                            Rp.<?= number_format($model->harga, 2, ',', '.'); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-md-right">
                    <div class="float-lg-left mb-lg-0 mb-3">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-icon icon-left"><i
                                class="fas fa-credit-card"></i> Proses
                            Pembayaran</button>
                        <a href="<?= base_url('etalase'); ?>" class="btn btn-danger btn-icon icon-left"><i
                                class="fas fa-times"></i> Batal</a>
                    </div>
                    <a class="btn btn-warning btn-icon icon-left disabled"><i class="fas fa-print"></i> Print
                        (unavailable)</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!--================End Cart Area =================-->

<?= $this->endSection(); ?>