<?= $this->extend('layout/dashboard'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h4 class="my-3">Form Tambah Data</h4>

            <form action="/pinjamlab/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ?
                                                                    'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= old('nama'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nim')) ?
                                                                    'is-invalid' : ''; ?>" id="nim" name="nim" value="<?= old('nim'); ?>">

                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('nim'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_peminjamam" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                        <input placeholder="Select date" type="date" id="tanggal_pengembalian" class="form-control" name="tanggal_peminjaman" value="<?= old('tanggal_peminjaman'); ?>">
                        <i class="fas fa-calendar input-prefix"></i>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_peminjamam" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                        <input placeholder="Select date" type="date" id="tanggal_pengembalian" class="form-control" name="tanggal_pengembalian" value="<?= old('tanggal_pengembalian'); ?>">
                        <i class="fas fa-calendar input-prefix"></i>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama_lab" class="col-sm-2 col-form-label">Nama Lab</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama_lab')) ?
                                                                    'is-invalid' : ''; ?>" id="nama_lab" name="nama_lab" value="<?= old('nim'); ?>">

                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('nama_lab'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('keperluan')) ?
                                                                    'is-invalid' : ''; ?>" id="keperluan" name="keperluan" value="<?= old('keperluan'); ?>">

                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('keperluan'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="waktu_peminjaman" class="col-sm-2 col-form-label">Waktu Peminjaman</label>
                    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                        <input placeholder="Select date" type="date" id="example" class="form-control">

                        <i class="fas fa-calendar input-prefix"></i>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="barang_pinjam" class="col-sm-2 col-form-label">Barang yang Dipinjam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('barang_pinjam')) ?
                                                                    'is-invalid' : ''; ?>" id="barang_pinjam" name="barang_pinjam" value="<?= old('barang_pinjam'); ?>">

                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('barang_pinjam'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('foto')) ?
                                                                    'is-invalid' : ''; ?>" id="foto" name="foto" value="<?= old('foto'); ?>">

                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('foto'); ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input class="form-control" type="file" id="foto">
                        </div>
                   </div> -->
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>
</div>
<?= $this->endSection(); ?>