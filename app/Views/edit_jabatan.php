<?= $this->extend('layout') ?>


<?= $this->section('content') ?>

<div class="container mt-5">
  <div class="d-flex justify-content-between">
    <h2>Edit Jabatan</h2>
  </div>

  <form method="POST" action="<?= base_url('/jabatan/edit') . '/' . $jabatan['id_jabatan'] ?>">
    <div class="form-group">
      <label for="nama">Nama Jabatan</label>
      <input type="text" name="nama_jabatan" class="form-control" id="nama" value="<?= $jabatan['nama_jabatan'] ?>">
    </div>
    <div class="form-group">
      <label for="unit">Unit Kerja</label>
      <select class="form-control" name="id_unitkerja" id="unit" required>
        <option value="">Pilih unit kerja</option>
        <?php foreach ($unit as $row) : ?>
          <option <?php if ($row['id_unitkerja'] == $jabatan['id_unitkerja']) echo 'selected' ?> value="<?= $row['id_unitkerja'] ?>"><?= $row['nama_unitkerja'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>


<?= $this->endSection('content') ?>