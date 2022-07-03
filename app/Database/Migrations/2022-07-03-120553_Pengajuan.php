<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengajuan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
            ],
            'username'=>[
            'type'=>'VARCHAR',
            'constraint'=>100,
            ],
            'telpon_pengajuan'=>[
            'type'=>'TEXT',
            ],
            'tanggal_pengajuan'=>[
            'type'=>'VARCHAR',
            'constraint'=>100,
            ],
            'isi_pengajuan'=>[
            'type'=>'TEXT',
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('pengajuan');
 }

    public function down()
    {
        $this->forge->dropTable('pengajuan');
    }
}

