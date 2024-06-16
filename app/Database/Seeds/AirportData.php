<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AirportData extends Seeder
{
	public function run()
	{
        $this->db->table('airport')->insertBatch([
            [
                'code' => 'YIA',
                'name' => 'Yogyakarta International Airport',
                'city' => 'Yogyakarta',
            ],
            [
                'code' => 'CGK',
                'name' => 'Soekarno-Hatta',
                'city' => 'Jakarta',
            ]
        ]);
	}
}