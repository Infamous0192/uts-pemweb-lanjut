<?php

namespace App\Controllers;

use App\Models\JabatanModel;
use App\Models\PegawaiModel;
use App\Models\UnitModel;

class Pegawai extends BaseController
{
  public function index()
  {
    $pegawai = new PegawaiModel();

    $data['pegawai'] = $pegawai->getPegawai();

    return view('pegawai', $data);
  }

  public function tambah()
  {
    $unit = new UnitModel();
    $jabatan = new JabatanModel();

    $data['jabatan'] = $jabatan->findAll();
    $data['unit'] = $unit->findAll();

    return view('tambah_pegawai', $data);
  }

  public function ubah($nip)
  {
    $pegawai = new PegawaiModel();
    $jabatan = new JabatanModel();
    $unit = new UnitModel();

    $data['pegawai'] = $pegawai->find($nip);
    $data['jabatan'] = $jabatan->findAll();
    $data['unit'] = $unit->findAll();

    return view('edit_pegawai', $data);
  }

  public function edit($id_jabatan)
  {
    $jabatanModel = new JabatanModel();

    $jabatanModel->update($id_jabatan, [
      'nama_jabatan' => $this->request->getPost('nama_jabatan'),
      'id_unitkerja' => $this->request->getPost('id_unitkerja')
    ]);

    return redirect()->to('/jabatan');
  }

  public function create()
  {
    $pegawai = new PegawaiModel();

    $pegawai->save([
      'nama_pegawai' => $this->request->getPost('nama_pegawai'),
      'id_jabatan' => $this->request->getPost('id_jabatan'),
      'id_unitkerja' => $this->request->getPost('id_unitkerja')
    ]);

    return redirect()->to('/pegawai');
  }

  public function delete($nip)
  {
    $pegawai = new PegawaiModel();

    $pegawai->delete($nip);

    return redirect()->to('/pegawai');
  }
}
