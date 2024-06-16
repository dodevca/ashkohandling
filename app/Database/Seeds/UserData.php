<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AirportData extends Seeder
{
	public function run()
	{
        $this->db->table('airport')->insertBatch([
            [
                'email' => 'admin@example.com',
                'username' => 'admin',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'hint' => 'admin',
            ]
        ]);
	}
}