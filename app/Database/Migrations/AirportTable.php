<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AirportTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'code' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
        ]);
        $this->forge->addKey('code', true);
        $this->forge->createTable('airport');
    }

    public function down()
    {
        $this->forge->dropTable('airport');
    }
}