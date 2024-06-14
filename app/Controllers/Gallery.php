<?php
namespace App\Controllers;

use IntlDateFormatter;

class Gallery extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('album');
    }
    
    public function index()
    {
        $data   = [
            'title'         => 'Galeri Foto',
            'breadcrumb'    => [
                ['Galeri', '/galeri']
            ],
            'filter'        => ['sort' => null],
            'contents'      => []
        ];
        
        $order      = strtoupper(!empty($this->request->getGet('o')) ? $this->request->getGet('o') : 'desc');
        $orderby    = !empty($this->request->getGet('by')) ? $this->request->getGet('by') : 'date';

        if($orderby == 'date')
            $data['filter']['sort'] = $order == 'ASC' ? 'Terlama' : 'Terbaru';
        else if($orderby == 'title')
            $data['filter']['sort'] = $order == 'ASC' ? 'A-Z' : 'Z-A';

        $sqlQuery = $this->builder
        ->select('title, images')
        ->orderBy($orderby, $order)
        ->get(0, 20)
        ->getResult('array');
        
        foreach($sqlQuery as $key => $row) {
            $row['images']                      = json_decode($row['images']);
            $data['contents'][$key]['title']    = $row['title'];
            $data['contents'][$key]['image']    = $row['images'][0];
            $data['contents'][$key]['total']    = count($row['images']);
        }

        $this->db->close();

        return view('gallery', $data);
        // return $this->response->setJSON($data);
    }
    
    public function view($title)
    {
        $dateFormat = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::FULL, 
            IntlDateFormatter::FULL
        );

        $dateFormat->setPattern('dd MMMM YYYY');

        $data = [
            'title'         => $title,
            'description'   => null,
            'date'          => null,
            'dateFormat'    => null,
            'breadcrumb'    => [
                ['Galeri', '/galeri'],
                [$title, '/galeri/' . $title]
            ],
            'contents'      => []
        ];

        $sqlQuery = $this->builder
        ->select('title, description, images, date')
        ->getWhere(['title' => $title])
        ->getRow();

        if(empty($sqlQuery)) {
            $this->db->close();
            
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['description']    = $sqlQuery->description;
        $data['date']           = $sqlQuery->date;
        $data['dateFormat']     = $dateFormat->format(strtotime($sqlQuery->date));
        $data['contents']       = json_decode($sqlQuery->images);

        $this->db->close();
    
        return view('gallery-view', $data);
        // return $this->response->setJSON($data);
    }
}
