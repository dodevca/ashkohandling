<?php
namespace App\Controllers;

use IntlDateFormatter;
use App\Models\AuthModel;

class Dashboard extends BaseController
{
    protected $db, $builder, $auth;
    protected $helpers = [
        'form'
    ];

    public function __construct()
    {
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('reservation');
        $this->auth     = new \App\Models\AuthModel();

        $this->auth->isLoggedIn();
    }
    
    public function index()
    {
        $dateFormat = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::FULL, 
            IntlDateFormatter::FULL
        );

        $dateFormat->setPattern('dd MMMM YYYY');

        $data = [
            'title'     => 'Ringkasan',
            'contents'  => [
                'schedule'  => [
                    'date'      => [$dateFormat->format(time()), $dateFormat->format(strtotime('+1 days')), $dateFormat->format(strtotime('+2 days'))],
                    'result'    => [
                        0 => [],
                        1 => [],
                        2 => []
                    ]
                ],
                'latest'    => [],
                'airport'   => [],
                'agent'     => []
            ]
        ];

        $start  = date("Y-m-d");
        $end    = date("Y-m-d", strtotime('+2 days'));

        $scheduleQuery = $this->db->query(
            "SELECT code, agent, departure as airportCode, departureDate as date, 'departure' as status
            FROM reservation
            WHERE departureDate >= '$start 00:00:00' AND departureDate <= '$end 23:59:59'
            UNION ALL (
                SELECT code, agent, arrival as airportCode, arrivalDate as date, 'arrival' as status
                FROM reservation
                WHERE arrivalDate >= '$start 00:00:00' AND arrivalDate <= '$end 23:59:59'
            ) ORDER by date ASC;"
        )
        ->getResult('array');

        $data['contents']['latest'] = $this->builder
        ->select('code, agent, departure, departureDate, arrival, arrivalDate, date, package')
        ->where(['status' => 1])
        ->orderBy('date', 'DESC')
        ->get(0, 10)
        ->getResult('array');

        $data['contents']['agent'] = $this->builder
        ->select('agent, agentInfo, count(agent) as total')
        ->where(['status' => 1])
        ->groupBy('agent')
        ->orderBy('total', 'DESC')
        ->get(0, 5)
        ->getResult('array');
        
        $data['contents']['airport'] = $this->db->query(
            "SELECT name, city, T1.code, total
            FROM (
                SELECT name, city, code FROM airport
            ) AS T1
            JOIN (
                SELECT departure as code, COUNT(departure) as total
                FROM (
                    SELECT departure
                    FROM reservation
                    WHERE status = 1 
                    UNION ALL 
                    SELECT arrival
                    FROM reservation
                    WHERE status = 1
                ) dt
                GROUP by departure
            ) AS T2
            ON T1.code = T2.code
            GROUP by T1.code
            ORDER by total DESC;"
        )
        ->getResult('array');

        if(!empty($scheduleQuery)) {
            foreach($scheduleQuery as $key => $item) {
                $scheduleQuery[$key]['date'] = $dateFormat->format(strtotime($item['date']));
                $scheduleQuery[$key]['time'] = date('H:i', strtotime($item['date']));
                $scheduleQuery[$key]['city'] = $this->db->table('airport')->select('city')->getWhere(['code' => $item['airportCode']])->getRow('city');

                if(date("Y-m-d", strtotime($scheduleQuery[$key]['date'])) == date("Y-m-d", strtotime($data['contents']['schedule']['date'][0])))
                    array_push($data['contents']['schedule']['result'][0], $scheduleQuery[$key]);
                else if(date("Y-m-d", strtotime($scheduleQuery[$key]['date'])) == date("Y-m-d", strtotime($data['contents']['schedule']['date'][1])))
                    array_push($data['contents']['schedule']['result'][1], $scheduleQuery[$key]);
                else 
                    array_push($data['contents']['schedule']['result'][2], $scheduleQuery[$key]);
            }
        }

        if(!empty($data['contents']['latest'])) {
            foreach($data['contents']['latest'] as $key => $item) {
                $data['contents']['latest'][$key]['departureDate']  = date("d/m/Y", strtotime($item['departureDate']));
                $data['contents']['latest'][$key]['arrivalDate']    = date("d/m/Y", strtotime($item['arrivalDate']));
                $data['contents']['latest'][$key]['date']           = date("d/m/Y", strtotime($item['date']));
                $data['contents']['latest'][$key]['package']        = ucwords($item['package']);
            }
        }

        if(!empty($data['contents']['agent'])) {
            foreach($data['contents']['agent'] as $key => $item) {
                $data['contents']['agent'][$key]['agentInfo'] = json_decode($item['agentInfo']);

                unset($data['contents']['agent'][$key]['agentInfo']->phone);
            }
        }

        $this->db->close();

        return view('overview', $data);
        // return $this->response->setJSON($data);
    }

    public function schedule()
    {
        $dateFormat = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::FULL, 
            IntlDateFormatter::FULL
        );

        $dateFormat->setPattern('dd MMMM YYYY');

        $range  = !empty($this->request->getPost('range')) ? strpos($this->request->getPost('range'), 'to') ? explode(' to ', $this->request->getPost('range')) : $this->request->getPost('range') : [];
        $start  = !empty($range) ?  is_array($range) ? $range[0] : $range : date("Y-m-d");
        $end    = !empty($range) ?  is_array($range) ? $range[1] : $range : date("Y-m-d", strtotime('+2 days'));

        $data = [
            'title'         => 'Jadwal',
            'breadcrumb'    => [
                ['Jadwal', '/jadwal']
            ],
            'filter'        => [
                'start' => $start,
                'end'   => $end
            ],
            'contents'      => []
        ];

        $data['contents'] = $this->db->query(
            "SELECT code, agent, departure as airportCode, departureDate as date, 'departure' as status
            FROM reservation
            WHERE departureDate >= '$start 00:00:00' AND departureDate <= '$end 23:59:59'
            UNION ALL (
                SELECT code, agent, arrival as airportCode, arrivalDate as date, 'arrival' as status
                FROM reservation
                WHERE arrivalDate >= '$start 00:00:00' AND arrivalDate <= '$end 23:59:59'
            ) ORDER by date ASC;"
        )
        ->getResult('array');

        if(!empty($data['contents'])) {
            foreach($data['contents'] as $key => $item) {
                $data['contents'][$key]['date'] = $dateFormat->format(strtotime($item['date']));
                $data['contents'][$key]['time'] = date('H:i', strtotime($item['date']));
                $data['contents'][$key]['city'] = $this->db->table('airport')->select('city')->getWhere(['code' => $item['airportCode']])->getRow('city');
            }
        }

        $this->db->close();

        return view('schedule', $data);
        // return $this->response->setJSON($data);
    }

    public function reservation()
    {
        $sort       = !empty($this->request->getGet('o'))? $this->request->getGet('o') : 'date-desc';
        $package    = !empty($this->request->getGet('p')) && $this->request->getGet('p') != 'all' ? $this->request->getGet('p') : null;
        $type       = !empty($this->request->getGet('t')) && $this->request->getGet('t') != 'all' ? $this->request->getGet('t') : null;
        $status     = !empty($this->request->getGet('s')) && $this->request->getGet('s') != 'all' ? $this->request->getGet('s') : null;
        $where      = [];
        $sortSplit  = explode('-', $sort);
        $orderby    = $sortSplit[0];
        $order      = strtoupper($sortSplit[1]);

        $data = [
            'title'         => 'Reservasi',
            'breadcrumb'    => [
                ['Reservasi', '/reservasi']
            ],
            'filter'        => [
                'sort'      => null,
                'package'   => $package,
                'type'      => $type,
                'status'    => $status
            ],
            'contents'      => []
        ];

        if($package != null)
            $where['package'] = $package;
        
        if($type != null)
            $where['type'] = $type;
        
        if($status != null)
            $where['status'] = $status == 'aktif' ? 1 : 0;
        
        if($orderby == 'date')
            $data['filter']['sort'] = $order == 'ASC' ? 'Terlama' : 'Terbaru';
        else if($orderby == 'agent')
            $data['filter']['sort'] = $order == 'ASC' ? 'A-Z' : 'Z-A';

        $this->builder
        ->select('code, agent, departure, departureDate, arrival, arrivalDate, date, package')
        ->orderBy($orderby, $order);
        
        if(!empty($where)) {
            $data['contents'] = $this->builder
            ->getWhere($where)
            ->getResult('array');
        } else {
            $data['contents'] = $this->builder
            ->get()
            ->getResult('array');
        }
        
        if(!empty($data['contents'])) {
            foreach($data['contents'] as $key => $item) {
                $data['contents'][$key]['departureDate']    = date("d/m/Y", strtotime($item['departureDate']));
                $data['contents'][$key]['arrivalDate']      = date("d/m/Y", strtotime($item['arrivalDate']));
                $data['contents'][$key]['date']             = date("d/m/Y", strtotime($item['date']));
                $data['contents'][$key]['package']          = ucwords($item['package']);
            }
        }

        $this->db->close();

        return view('list', $data);
        // return $this->response->setJSON($data);
    }

    public function agent()
    {
        $order      = strtoupper(!empty($this->request->getGet('o')) ? $this->request->getGet('o') : 'desc');
        $orderby    = !empty($this->request->getGet('by')) ? $this->request->getGet('by') : 'total';

        $data = [
            'title'         => 'Agen',
            'breadcrumb'    => [
                ['Agen', '/agen']
            ],
            'filter'        => ['sort' => null],
            'contents'      => []
        ];

        if($orderby == 'agent')
            $data['filter']['sort'] = $order == 'ASC' ?'A-Z' : 'Z-A';
        else if($orderby == 'total')
            $data['filter']['sort'] = $order == 'ASC' ? 'Paling sedikit' : 'Paling banyak';
        
        $data['contents'] = $this->builder
        ->select('agent, agentInfo, count(agent) as total')
        ->where(['status' => 1])
        ->groupBy('agent')
        ->orderBy($orderby, $order)
        ->get(0, 5)
        ->getResult('array');

        if(!empty($data['contents'])) {
            foreach($data['contents'] as $key => $item) {
                $data['contents'][$key]['agentInfo'] = json_decode($item['agentInfo']);

                unset($data['contents'][$key]['agentInfo']->phone);
            }
        }

        $this->db->close();

        return view('agent', $data);
        // return $this->response->setJSON($data);
    }

    public function airport()
    {
        $order      = strtoupper(!empty($this->request->getGet('o')) ? $this->request->getGet('o') : 'desc');
        $orderby    = !empty($this->request->getGet('by')) ? $this->request->getGet('by') : 'total';

        $data = [
            'title'         => 'Bandara',
            'breadcrumb'    => [
                ['Bandara', '/bandara']
            ],
            'filter'        => ['sort' => null],
            'contents'      => []
        ];

        if($orderby == 'name')
            $data['filter']['sort'] = $order == 'ASC' ? 'A-Z' : 'Z-A';
        else if($orderby == 'total')
            $data['filter']['sort'] = $order == 'ASC' ? 'Paling sedikit' : 'Paling banyak';

        $data['contents'] = $this->db
        ->query(
            "SELECT name, city, T1.code, total
            FROM (
                SELECT name, city, code FROM airport
            ) AS T1
            JOIN (
                SELECT departure as code, COUNT(departure) as total
                FROM (
                    SELECT departure
                    FROM reservation
                    WHERE status = 1 
                    UNION ALL 
                    SELECT arrival
                    FROM reservation
                    WHERE status = 1
                ) dt
                GROUP by departure
            ) AS T2
            ON T1.code = T2.code
            GROUP by T1.code
            ORDER by $orderby $order;"
        )
        ->getResult('array');

        $this->db->close();

        return view('airport', $data);
        // return $this->response->setJSON($data);
    }

    public function search()
    {
        $query      = !empty($this->request->getGet('q')) ? urldecode($this->request->getGet('q')) : null;
        $order      = strtoupper(!empty($this->request->getGet('o')) ? $this->request->getGet('o') : 'desc');
        $orderby    = !empty($this->request->getGet('by')) ? $this->request->getGet('by') : 'date';
        
        if($query == null) {
            $this->db->close();

            return redirect()->back()->withInput()->with('error', 'Tidak ada kata kunci yang dicari.');
        }
        
        $data = [
            'title'         => 'Hasil Dari ' . ucwords($query),
            'breadcrumb'    => [
                [ucwords($query), '/search?q' . $query]
            ],
            'filter'        => ['sort' => null],
            'query'         => $query,
            'contents'      => []
        ];

        if($orderby == 'date')
            $data['filter']['sort'] = $order == 'ASC' ? 'Terlama' : 'Terbaru';
        else if($orderby == 'agent')
            $data['filter']['sort'] = $order == 'ASC' ? 'A-Z' : 'Z-A';

        $data['contents'] = $this->builder
        ->select('code, agent, departure, departureDate, arrival, arrivalDate, date, package')
        ->like('agent', $query)
        ->orLike('departure', $query)
        ->orLike('arrival', $query)
        ->orderBy($orderby, $order)
        ->get()
        ->getResult('array');
        
        if(!empty($data['contents'])) {
            foreach($data['contents'] as $key => $item) {
                $data['contents'][$key]['departureDate']    = date("d/m/Y", strtotime($item['departureDate']));
                $data['contents'][$key]['arrivalDate']      = date("d/m/Y", strtotime($item['arrivalDate']));
                $data['contents'][$key]['date']             = date("d/m/Y", strtotime($item['date']));
                $data['contents'][$key]['package']          = ucwords($item['package']);
            }
        }

        $this->db->close();

        return view('search', $data);
        // return $this->response->setJSON($data);
    }

    public function view($id)
    {
        $dateFormat = new IntlDateFormatter(
            'id_ID',
            IntlDateFormatter::FULL, 
            IntlDateFormatter::FULL
        );

        $dateFormat->setPattern('dd MMMM YYYY');

        $builder    = $this->db->table('airport');
        $data       = [
            'title'         => 'Reservasi #' . $id,
            'breadcrumb'    => [
                ['Reservasi', '/reservasi'],
                [$id, '/reservasi/' . $id]
            ],
            'contents'      => []
        ];

        $data['contents'] = $this->builder
        ->select('code, agent, agentInfo, departure, departureDate, destination, arrival, arrivalDate, through, type, passenger, package, date, status')
        ->getWhere(['code' => $id])
        ->getRow();

        if(empty($data['contents'])) {
            $this->db->close();
            
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $departureQuery = $builder
        ->select('name, city')
        ->getWhere(['code' => $data['contents']->departure]);

        $arrivalQuery = $builder
        ->select('name, city')
        ->getWhere(['code' => $data['contents']->arrival]);

        $data['contents']->agentInfo        = json_decode($data['contents']->agentInfo);
        $data['contents']->departureDate    = $dateFormat->format(strtotime($data['contents']->departureDate));
        $data['contents']->departureTime    = date("H:i", strtotime($data['contents']->departureDate));
        $data['contents']->arrivalDate      = $dateFormat->format(strtotime($data['contents']->arrivalDate));
        $data['contents']->arrivalTime      = date("H:i", strtotime($data['contents']->arrivalDate));
        $data['contents']->type             = ucwords($data['contents']->type);
        $data['contents']->package          = ucwords($data['contents']->package);
        $data['contents']->status           = (int) $data['contents']->status;
        $data['contents']->departureName    = $departureQuery->getRow('name');
        $data['contents']->departureCity    = $departureQuery->getRow('city');
        $data['contents']->arrivalName      = $arrivalQuery->getRow('name');
        $data['contents']->arrivalCity      = $arrivalQuery->getRow('city');
        $data['contents']->date             = date("d/m/Y", strtotime($data['contents']->date));

        $this->db->close();

        return view('view', $data);
        // return $this->response->setJSON($data);
    }
}