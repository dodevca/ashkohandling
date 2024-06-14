<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ReservationTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'uid' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'code' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false,
            ],
            'agent' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'agentInfo' => [
                'type' => 'LONGTEXT',
                'null' => false,
                'collate' => 'utf8mb4_bin',
            ],
            'departure' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false,
            ],
            'departureDate' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'destination' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'arrival' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => false,
            ],
            'arrivalDate' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'through' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'passenger' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'package' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false,
            ],
            'date' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'status' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'null' => false,
                'default' => 0,
            ],
        ]);
        $this->forge->addKey('code', true);
        $this->forge->createTable('reservation');
    }

    public function down()
    {
        $this->forge->dropTable('reservation');
    }
}