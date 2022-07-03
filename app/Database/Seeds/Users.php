<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
    //lakukan perulangan data
    for ($i = 0; $i < 1; $i++) {
    $data = [
    [
    'nim' => '20SA1170',
    'username' => 'wicaksono',
    'email' => 'wicaksono@gmail.com',
    'password' => 'wicaksono',
    'mode' => 'admin',
    ],
   [
   'nim' => '20SA1041',
   'username' => 'fatah',
   'email' => 'fatah@gmail.com',
   'password' => 'fatah',
   'mode' => 'user',
   ]
    ];
    // insert semua data ke tabel
    $this->db->table('users')->insertBatch($data);
   
    }
    }
   }
   
