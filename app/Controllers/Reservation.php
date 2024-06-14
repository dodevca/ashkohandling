<?php
namespace App\Controllers;

use IntlDateFormatter;
use App\Models\EmailModel;

class Reservation extends BaseController
{
    protected $db, $builder, $mail, $session;
    protected $helpers = [
        'form'
    ];

    public function __construct()
    {
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('reservation');
        $this->mail     = new \App\Models\EmailModel();
        $this->session  = session();
    }

    public function index()
    {
        $builder    = $this->db->table('airport');
        $data       = [
            'title'     => 'Reservasi',
            'contents'  => []
        ];
        
        $data['contents'] = $builder
        ->select('name, code')
        ->orderBy('name', 'ASC')
        ->get()
        ->getResult('array');

        $this->db->close();
        
        return view('form', $data);
        // return $this->response->setJSON($data);
    }

    public function submit()
    {
        $rules = [
            'name'              => 'required',
            'email'             => 'required|valid_email',
            'phone'             => 'required',
            'departure-date'    => 'required',
            'departure-time'    => 'required',
            'departure'         => 'required',
            'destination'       => 'required',
            'arrival-date'      => 'required',
            'arrival-time'      => 'required',
            'through'           => 'required',
            'arrival'           => 'required',
            'type'              => 'required',
            'passenger'         => 'required|integer',
            'package'           => 'required'
        ];

        if(!$this->validate($rules)) {
            $this->db->close();

            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'uid'           => null,
            'code'          => time(),
            'agent'         => $this->request->getPost('name'),
            'agentInfo'     => [
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email')
            ],
            'departure'     => $this->request->getPost('departure'),
            'departureDate' => date('Y-m-d H:i:s', strtotime($this->request->getPost('departure-date') . ' ' .  $this->request->getPost('departure-time'))),
            'destination'   => ucwords($this->request->getPost('destination')),
            'arrival'       => $this->request->getPost('arrival'),
            'arrivalDate'   => date('Y-m-d H:i:s', strtotime($this->request->getPost('arrival-date') . ' ' .  $this->request->getPost('arrival-time'))),
            'through'       => ucwords($this->request->getPost('through')),
            'type'          => $this->request->getPost('type'),
            'passenger'     => $this->request->getPost('passenger'),
            'package'       => $this->request->getPost('package'),
            'date'          => date('Y-m-d H:i:s'),
        ];

        $data['uid']        = strtolower(preg_replace('/\s+/', '_', $data['agent'])) . '-' . strtolower($data['departure']) . strtotime($data['departureDate']) . '-' . strtolower($data['arrival']) . strtotime($data['arrivalDate']) . '-' . $data['passenger'];
        $data['agentInfo']  = json_encode($data['agentInfo']);

        if($this->builder->insert($data)) {
            $dateFormat = new IntlDateFormatter(
                'id_ID',
                IntlDateFormatter::FULL, 
                IntlDateFormatter::FULL
            );
    
            $dateFormat->setPattern('dd MMMM YYYY');
    
            $builder    = $this->db->table('airport');
            
            $data['agentInfo'] = json_decode($data['agentInfo']);
            $dataMail = $data;
            
            if(empty($data)) {
                $this->db->close();
                
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
    
            $departureQuery = $builder
            ->select('name, city')
            ->getWhere(['code' => $data['departure']]);
    
            $arrivalQuery = $builder
            ->select('name, city')
            ->getWhere(['code' => $data['arrival']]);
            
            $dataMail['departureDate']  = $dateFormat->format(strtotime($data['departureDate']));
            $dataMail['departureTime']  = date("H:i", strtotime($data['departureDate']));
            $dataMail['arrivalDate']    = $dateFormat->format(strtotime($data['arrivalDate']));
            $dataMail['arrivalTime']    = date("H:i", strtotime($data['arrivalDate']));
            $dataMail['type']           = ucwords($data['type']);
            $dataMail['package']        = ucwords($data['package']);
            $dataMail['departureName']  = $departureQuery->getRow('name');
            $dataMail['departureCity']  = $departureQuery->getRow('city');
            $dataMail['arrivalName']    = $arrivalQuery->getRow('name');
            $dataMail['arrivalCity']    = $arrivalQuery->getRow('city');
            $dataMail['date']           = date("d/m/Y", strtotime($data['date']));

            $this->mail->sendNotification($dataMail);
            $this->mail->sendTicket($dataMail);
            $this->db->close();
            
            return view('reservation-success', $data);
        } else {
            $this->db->close();

            return redirect()->back()->withInput()->with('error', 'Gagal mengirimkan reservasi. Coba lagi!');
        }
        
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
            'title'         => 'Bukti Reservasi #' . $id,
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

        // $data2 = json_decode(json_encode($data['contents']), true);
        
        // return view('mail', $data2);
        return view('reservation-view', $data);
        // return $this->response->setJSON($data);
    }
}
