<?= $this->extend('layout') ?>


<?= $this->section('content') ?>


<div class="container mt-5">
  <div class="d-flex justify-content-between">
    <h2>Daftar Pegawai</h2>
    <a href="#">
      <button class="btn btn-primary">Tambah</button>
    </a>
  </div>

  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">NIP</th>
        <th scope="col">Nama</th>
        <th scope="col">Unit Kerja</th>
        <th scope="col">Jabatan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Khairi</td>
        <td>PDD</td>
        <td>Koor</td>
      </tr>
    </tbody>
  </table>
</div>


<?= $this->endSection('content') ?>