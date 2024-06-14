<?php
namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    protected $db, $auth;
    protected $helpers = [
        'form'
    ];

    public function __construct()
    {
        $this->db   = \Config\Database::connect();
        $this->auth = new \App\Models\AuthModel();
    }

    public function index()
    {
        $rules = [
            'u' => [
                'rules'     => ['required'],
                'errors'    => ['required' => 'Username tidak boleh kosong.']
            ],
            'p' => [
                'rules'     => ['required'],
                'errors'    => ['required'=> 'Password tidak boleh kosong.']
            ]
        ];
        
        if(!$this->validate($rules)) {
            $this->db->close();

            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'username' => $this->request->getPost('u'),
            'password' => md5($this->request->getPost('p')),
        ];
    
        $this->db->close();
        
        if($this->auth->login($data))
            return redirect()->to('dashboard');
        else
            return redirect()->back()->withInput()->with('error', 'Akun tidak ditemukan. Pastikan username dan password sudah benar!');

        // return $this->response->setJSON($this->auth->login($data));
    }

    public function login()
    {
        $data = [
            'title' => 'Log In'
        ];

        $this->db->close();
        
        return view('auth', $data);
        // return $this->response->setJSON($data);
    }

    public function logout()
    {
        $this->db->close();
        
        if($this->auth->logout())
            return redirect()->back()->with('error', 'Terjadi Kesalahan saat melakukan log out.');
        else
            return redirect()->to('login');
    }
}