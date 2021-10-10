<?= $this->extend('layout') ?>


<?= $this->section('content') ?>

<div class="container mt-5">
  <div class="d-flex justify-content-between">
    <h2>Daftar Pegawai</h2>
    <a href="<?= base_url('/pegawai/tambah') ?>">
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
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pegawai as $row) : ?>
        <tr>
          <th scope="row"><?= $row['nip'] ?></th>
          <td><?= $row['nama_pegawai'] ?></td>
          <td><?= $row['nama_unitkerja'] ?></td>
          <td><?= $row['nama_jabatan'] ?></td>
          <td><a href="<?= base_url('/pegawai/delete') . '/' . $row['nip'] ?>">
              <button class="btn btn-danger">Hapus</button>
            </a>
            <a href="<?= base_url('/pegawai/ubah') . '/' . $row['nip'] ?>">
              <button class="btn btn-warning">Edit</button>
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>


<?= $this->endSection('content') ?>