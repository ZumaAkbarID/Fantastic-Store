<?= $this->extend('templates/AdminLayout'); ?>
<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <!-- <h4>Barang</h4> -->
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $i = 1;
                            foreach ($barangs as $barang) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $barang->nama; ?></td>
                                <td>
                                    <div class="chocolat-parent">
                                        <a href="<?= base_url(); ?>/uploads/barang/img/<?= $barang->gambar; ?>"
                                            class="chocolat-image" title="<?= $barang->nama; ?>">
                                            <div data-crop-image="200">
                                                <img alt="image"
                                                    src="<?= base_url(); ?>/uploads/barang/img/<?= $barang->gambar; ?>"
                                                    class="img-fluid" width="100px">
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td><?= $barang->stok; ?></td>
                                <td>Rp.<?= $barang->harga; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>/barang/view/<?= $barang->id; ?>"
                                        class="btn btn-info">Detail</a>|
                                    <a href="<?= base_url(); ?>/barang/update/<?= $barang->id; ?>"
                                        class="btn btn-success">Edit</a>|
                                    <a href="<?= base_url(); ?>/barang/delete/<?= $barang->id; ?>"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span
                                        class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>