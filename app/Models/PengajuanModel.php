<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
    'username', 'telpon_pengajuan','tanggal_pengajuan','isi_pengajuan'
    ];
    protected $returnType = 'App\Entities\Pengajuan';
    protected $useTimestamps = false;
    public function findById($id)
    {
    $data = $this->find($id);
    if ($data) {
    return $data;
    }
    return false;
    }
   }