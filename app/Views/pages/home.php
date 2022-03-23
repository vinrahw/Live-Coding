<?= $this->extend('layout/dashboard'); ?>

<?= $this->section('content'); ?>

<!-- Content Row -->
<div class="row">
  <div class="col">
    <!-- Illustrations -->
    <div class="card shadow mb-4">
      <div class="card-header">
        <h4 class="m-0 font-weight-bold text-primary text-center">Selamat Datang!</h4>
      </div>
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 30rem;" src="/img/pict-dashboard.svg" alt="...">
          <p>Sistem ini kami gunakan untuk mendata setiap barang yang ada di Laboratorium Informatika, di Universitas
            Muhammadiyah Sidoarjo
          </p>
        </div>
        <div class="text-right">
          <a href="/pages/about">Tentang Kami &rarr;</a>
        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>