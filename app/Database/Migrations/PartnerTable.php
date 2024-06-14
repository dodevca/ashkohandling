<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PartnerTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'images' => [
                'type' => 'LONGTEXT',
                'null' => false,
                'collate' => 'utf8mb4_bin',
            ],
            'date' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('partner');
    }

    public function down()
    {
        $this->forge->dropTable('partner');
    }
}