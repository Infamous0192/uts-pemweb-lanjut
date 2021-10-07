<?php

namespace App\Controllers;

use App\Models\JabatanModel;
use App\Models\UnitModel;

class Jabatan extends BaseController
{
  public function index()
  {
    $unit = new JabatanModel();

    $data['jabatan'] = $unit->getJabatan();

    return view('jabatan', $data);
  }

  public function tambah()
  {
    return view('tambah_unit');
  }

  public function ubah($id_unitkerja)
  {
    $unit = new UnitModel();

    $data['unit'] = $unit->find($id_unitkerja);

    if (!$data['unit']) return redirect()->to('/unit');

    return view('edit_unit', $data);
  }

  public function edit($id_unitkerja)
  {
    $unit = new UnitModel();

    $unit_kerja = $unit->find($id_unitkerja);

    if (!$unit_kerja) return redirect()->to('/unit');

    $unit->update($id_unitkerja, [
      'nama_unitkerja' => $this->request->getPost('nama_unitkerja')
    ]);

    return redirect()->to('/unit');
  }

  public function create()
  {
    $unit = new UnitModel();

    $unit->save([
      'nama_unitkerja' => $this->request->getPost('nama_unitkerja')
    ]);

    return redirect()->to('/unit');
  }

  public function delete($id_unitkerja)
  {
    $unit = new UnitModel();

    $unit->delete($id_unitkerja);

    return redirect()->to('/unit');
  }
}
