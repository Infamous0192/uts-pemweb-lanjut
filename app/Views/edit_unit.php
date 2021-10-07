<?= $this->extend('layout') ?>


<?= $this->section('content') ?>

<div class="container mt-5">
  <div class="d-flex justify-content-between">
    <h2>Edit Unit Kerja</h2>
  </div>

  <form method="POST" action="<?= base_url('/unit/edit') . '/' . $unit['id_unitkerja'] ?>">
    <div class="form-group">
      <label for="nama">Nama Unit</label>
      <input type="text" name="nama_unitkerja" value="<?= $unit['nama_unitkerja'] ?>" class="form-control" id="nama" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>


<?= $this->endSection('content') ?>