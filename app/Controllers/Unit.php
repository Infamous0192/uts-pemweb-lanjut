<?php

namespace App\Controllers;

use App\Models\UnitModel;

class Unit extends BaseController
{
  public function index()
  {
    $unit = new UnitModel();

    $data['unit'] = $unit->findAll();

    return view('unit', $data);
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

    $data = [
      'nama_unitkerja' => $this->request->getPost('nama_unitkerja')
    ];

    $is_valid = \Config\Services::validation()->run($data, 'unit');

    if ($is_valid) {
      $unit->save($data);
      return redirect()->to('/unit');
    } else {
      session()->setFlashData('error', \Config\Services::validation()->getErrors());
      session()->setFlashData('input', $data);

      return redirect()->to('/unit/tambah');
    }
  }

  public function delete($id_unitkerja)
  {
    $unit = new UnitModel();

    $unit->delete($id_unitkerja);

    return redirect()->to('/unit');
  }
}
