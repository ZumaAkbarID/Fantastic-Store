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
                    <a href="">Tagihan</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Order Details Area =================-->
<section class="order_details section_gap">
    <div class="container">
        <h3 class="title_confirmation">Terima Kasih. Silahkan Bayar Sesuai Nominal Yang Tertera.</h3>
        <div class="row order_d_inner">
            <div class="col-lg-6">
                <div class="details_item">
                    <h4>Order Info</h4>
                    <ul class="list">
                        <li><a><span>Nomor Invoice</span> : #<?= $invoice->no_order; ?></a></li>
                        <li><a><span>Tanggal</span> :
                                <?= date('D d-m-Y H:i:s', strtotime($invoice->created_date)); ?></a></li>
                        <li><a><span>Total Tagihan</span> :
                                RP.<?= number_format($invoice->total_harga, 2, ',', '.'); ?></a>
                        </li>
                        <li><a><span>Metode Pembayaran</span> : <?= $invoice->pembayaran; ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="details_item">
                    <h4 class="text-warning">Pembayaran</h4>
                    <ul class="list">
                        <li><a>Silahkan bayar sesuai dengan nominal serta kode unik agar pesanan terkirim otomatis.</a>
                        </li>
                        <div style="background-color: silver;" class="p-2">
                            <li><a><span>Total Harus Dibayar</span> :
                                    Rp.<?= number_format($invoice->total_harga, 2, ',', '.'); ?></a></li>
                            <li><a><span>Nomor Dana</span> : 0858-7596-3235</a></li>
                        </div>
                        <li><a><span>Catatan </span> : <i class="text-danger">Pastikan Nomor dan Total Bayar Sesuai
                                    Dengan
                                    Angka
                                    Tertera.</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="order_details_table">
            <h2>Rincian Pesanan</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Gambar</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>
                                    <img src="<?= base_url(); ?>/uploads/barang/img/<?= $barang->gambar; ?>" alt=""
                                        width="300px">
                                </p>
                            </td>
                            <td>
                                <h5><?= $barang->nama; ?></h5>
                            </td>
                            <td>
                                <p>Rp.<?= number_format($barang->harga, 2, ',', '.'); ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Kode Unik Verifikasi</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>
                                    Rp.<?= number_format($invoice->total_harga - $barang->harga, 2, ',', '.'); ?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Pajak</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>Rp.0</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Total</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>Rp.<?= number_format($invoice->total_harga, 2, ',', '.'); ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->

<?= $this->endSection(); ?>