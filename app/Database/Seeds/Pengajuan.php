<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pengajuan extends Seeder
{
    public function run()
    {
    //lakukan perulangan data
    for ($i = 0; $i < 1; $i++) {
    $data = [
    [
    'username' => 'yudha',
    'telpon_pengajuan' => '192753621',
    'tanggal_pengajuan' => '3 Juli 2022',
    'isi_pengajuan' => 'tambahkan komputer',
    ]
    ];
    // insert semua data ke tabel
    $this->db->table('pengajuan')->insertBatch($data);
   
    }
    }
   }
