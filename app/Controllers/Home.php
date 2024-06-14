<?php
namespace App\Controllers;

use App\Models\EmailModel;

class Home extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $airportBuilder = $this->db->table('airport');
        $partnerBuilder = $this->db->table('partner');

        $data = [
            'title'     => 'Jasa Handling Bandara',
            'contents'  => [
                'airport' => [],
                'partner' => []
            ]
        ];
        
        $data['contents']['airport'] = $airportBuilder
        ->select('name, city, code')
        ->orderBy('name', 'ASC')
        ->get()
        ->getResult('array');

        $data['contents']['partner'] = $partnerBuilder
        ->select('name, logo')
        ->orderBy('name', 'ASC')
        ->get()
        ->getResult('array');

        $this->db->close();

        return view('homepage', $data);
        // return $this->response->setJSON($data);
    }

    public function contact()
    {
        $data   = [
            'title'         => 'Kontak',
            'breadcrumb'    => [
                ['Kontak', '/kontak']
            ],
        ];

        $this->db->close();
        
        return view('contact', $data);
    }
}
