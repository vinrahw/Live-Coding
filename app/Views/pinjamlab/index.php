<?= $this->extend('layout/dashboard'); ?>

<?= $this->section('content'); ?>

<div class="card mb-4">
    <div class="card-body">
        <h6 class="m-0 font-weight-bold text-primary">LAB PINJAM LAB</h6>
        <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="/img/pict-ictbidus.svg" alt="...">
        </div>
        <p class="text-center">Sistem ini digunakan untuk mendata PEMINJAMAN LAB DI UMSIDA
        </p>
    </div>
</div>

<!-- DataLab -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="/pinjamlab/create" class=" font-weight-bold btn btn-primary">Tambah Data</a>

        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="card mt-2 mb-2 py-3 border-left-success">
                <div class="card-body text-primary">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            </div>
        <?php endif ?>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Nama Lab</th>
                        <th>Keperluan</th>
                        <th>Waktu Peminjaman</th>
                        <th>Barang yang Dipinjam</th>
                        <th>foto</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1; ?>
                    <?php foreach ($pinjamlab as $i) : ?>
                        <tr>
                            <th scope="row"><?= $n++; ?></th>
                            <td><?= $i['nama']; ?></td>
                            <td><?= $i['nim']; ?></td>
                            <td><?= $i['tanggal_peminjaman']; ?></td>
                            <td><?= $i['tanggal_pengembalian']; ?></td>
                            <td><?= $i['nama_lab']; ?></td>
                            <td><?= $i['keperluan']; ?></td>
                            <td><?= $i['waktu_peminjaman']; ?></td>
                            <td><?= $i['barang_pinjam']; ?></td>
                            <td><?= $i['foto']; ?></td>
                            <td>
                                <a href="/pinjamlab/edit/<?= $i['id']; ?>" class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="text">Edit</span>
                                </a>


                                <form action="/pinjamlab/delete/<?= $i['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-icon-split" onclick="return confirm('Apakah anda yakin?')">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>