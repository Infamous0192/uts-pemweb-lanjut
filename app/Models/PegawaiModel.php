<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
  protected $table      = 'pegawai';
  protected $primaryKey = 'nip';

  protected $allowedFields = ['nama_pegawai', 'id_jabatan', 'id_unitkerja'];

  public function getPegawai()
  {
    $pegawai = $this->db->table('pegawai')
      ->join('unit_kerja', 'pegawai.id_unitkerja = unit_kerja.id_unitkerja')
      ->join('jabatan', 'pegawai.id_jabatan = jabatan.id_jabatan')
      ->get()
      ->getResultArray();

    return $pegawai;
  }
}
