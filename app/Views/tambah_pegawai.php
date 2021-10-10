<?= $this->extend('layout') ?>


<?= $this->section('content') ?>

<div class="container mt-5">
  <div class="d-flex justify-content-between">
    <h2>Tambah Pegawai</h2>
  </div>

  <form method="POST" action="<?= base_url('/pegawai/create') ?>">
    <div class="form-group">
      <label for="nama">Nama Pegawai</label>
      <input type="text" name="nama_pegawai" class="form-control" id="nama">
    </div>
    <div class="form-group">
      <label for="unit">Unit Kerja</label>
      <select class="form-control" name="id_unitkerja" id="unit" required>
        <option value="">Pilih unit kerja</option>
        <?php foreach ($unit as $row) : ?>
          <option value="<?= $row['id_unitkerja'] ?>"><?= $row['nama_unitkerja'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="jabatan">Jabatan</label>
      <select class="form-control" name="id_jabatan" id="jabatan" required>
        <option value="">Pilih jabatan</option>
        <?php foreach ($jabatan as $row) : ?>
          <option value="<?= $row['id_jabatan'] ?>"><?= $row['nama_jabatan'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
</div>


<?= $this->endSection('content') ?>