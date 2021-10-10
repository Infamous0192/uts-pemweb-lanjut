<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
  protected $table      = 'jabatan';
  protected $primaryKey = 'id_jabatan';

  protected $allowedFields = ['nama_jabatan', 'id_unitkerja'];

  public function getJabatan()
  {
    $jabatan = $this->db->table('jabatan')->join('unit_kerja', 'jabatan.id_unitkerja = unit_kerja.id_unitkerja')->get()->getResultArray();

    return $jabatan;
  }
}
