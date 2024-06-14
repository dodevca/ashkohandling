<?php
namespace App\Controllers;

use App\Models\AuthModel;

use CodeIgniter\HTTP\Files\UploadedFile;

class Setting extends BaseController
{
    protected $db, $auth;
    protected $helpers = [
        'form'
    ];

    public function __construct()
    {
        $this->db   = \Config\Database::connect();
        $this->auth = new \App\Models\AuthModel();

        $this->auth->isLoggedIn();

    }

    public function index()
    {
        $data = [
            'title'         => 'Pengaturan',
            'breadcrumb'    => [
                ['Pengaturan', '/pengaturan']
            ],
            'contents'      => [

            ]
        ];

        $this->db->close();

        return view('setting', $data);
    }

    public function airport()
    {
        $builder    = $this->db->table('airport');
        $data       = [
            'title'         => 'Pengaturan Cabang',
            'breadcrumb'    => [
                ['Pengaturan', '/pengaturan'],
                ['Cabang', '/pengaturan/cabang']
            ],
            'contents'      => []
        ];

        $data['contents'] = $builder->select('name, city, code')
        ->orderBy('name', 'ASC')
        ->get()
        ->getResult('array');

        $this->db->close();

        return view('setting-airport', $data);
        // return $this->response->setJSON($data);
    }

    public function addAirport()
    {
        $builder    = $this->db->table('airport');
        $rules      = [
            'name' => [
                'rules'     => ['required'],
                'errors'    => ['required' => 'Nama bandara tidak boleh kosong.']
            ],
            'city' => [
                'rules'     => ['required'],
                'errors'    => ['required'=> 'Nama kota tidak boleh kosong.']
            ],
            'code' => [
                'rules'     => [
                    'required',
                    'is_unique[airport.code]'
                ],
                'errors'    => [
                    'required'  => 'Kode bandara tidak boleh kosong.',
                    'is_unique' => 'Terdapat kode bandara yang sama. Kode bandara harus mengandung kode unik.'
                ]
            ]
        ];

        if(!$this->validate($rules)) {
            $this->db->close();

            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'city' => ucwords($this->request->getPost('city')),
            'code' => strtoupper($this->request->getPost('code'))
        ];
        
        if($builder->insert($data)) {
            $this->db->close();

            return redirect()->to('dashboard/pengaturan/cabang')->with('success', 'Berhasil menambahkan cabang baru.');
        } else {
            $this->db->close();

            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan cabang. Coba lagi!');
        }
        
        // return $this->response->setJSON($data);
    }

    public function delAirport()
    {
        $builder    = $this->db->table('airport');
        $code       = $this->request->getGet('q');

        if($builder->delete(['id' => $code])) {
            $this->db->close();

            return redirect()->to('dashboard/pengaturan/cabang')->with('success', 'Berhasil menghapus cabang.');
        } else {
            $this->db->close();

            return redirect()->back()->withInput()->with('error', 'Gagal menghapus cabang. Coba lagi!');
        }
        
        // return $this->response->setJSON($data);
    }

    public function gallery()
    {
        $builder    = $this->db->table('album');
        $data       = [
            'title'         => 'Pengaturan Galeri',
            'breadcrumb'    => [
                ['Pengaturan', '/pengaturan'],
                ['Galeri', '/pengaturan/galeri']
            ],
            'contents'      => []
        ];

        $sqlQuery = $builder
        ->select('title, images')
        ->orderBy('title', 'ASC')
        ->get()
        ->getResult('array');
        
        foreach($sqlQuery as $key => $row) {
            $row['images']                      = json_decode($row['images']);
            $data['contents'][$key]['title']    = $row['title'];
            $data['contents'][$key]['image']    = $row['images'][0];
            $data['contents'][$key]['total']    = count($row['images']);
        }

        $this->db->close();

        return view('setting-gallery', $data);
        // return $this->response->setJSON($data);
    }

    public function addGallery()
    {
        $builder    = $this->db->table('album');
        $rules      = [
            'title'         => [
                'rules'     => [
                    'required',
                    'is_unique[album.title]'
                ],
                'errors'    => [
                    'required'  => 'Judul album tidak boleh kosong.',
                    'is_unique' => 'Terdapat judul yang sama. Judul harus berbeda setiap albumnya.'
                ]
            ],
            // 'description'   => [
            //     'rules'     => ['required'],
            //     'errors'    => ['required'  => 'Deskripsi album tidak boleh kosong.']
            // ],
            'images'        => [
                'rules'     => [
                    'uploaded[images]',
                    'mime_in[images,image/jpg,image/jpeg,image/gif,image/png]'
                ],
                'errors'    => [
                    'uploaded'  => 'Album harus memiliki setidaknya 1 foto.',
                    'mime_in'   => 'Jenis gambar harus berupa jpg, jpeg, atau png.'
                ]
            ]
        ];

        if(!$this->validate($rules)) {
            $this->db->close();

            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title'         => ucwords($this->request->getPost('title')),
            'description'   => $this->request->getPost('description'),
            'images'        => []
        ];

        if($imageFile = $this->request->getFiles()) {
            foreach ($imageFile['images'] as $image) {
                if ($image->isValid() && !$image->hasMoved()) {
                    $imageName = $image->getRandomName();

                    array_push($data['images'], $imageName);

                    $image->move('../public/images/album', $imageName);
                }
            }
        }

        $data['images'] = json_encode($data['images']);
        
        if($builder->insert($data)) {
            $this->db->close();

            return redirect()->to('dashboard/pengaturan/galeri')->with('success', 'Berhasil menambahkan album baru.');
        } else {
            $this->db->close();

            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan album. Coba lagi!');
        }
        
        // return $this->response->setJSON($data);
    }

    public function delGallery()
    {
        $builder    = $this->db->table('album');
        $title      = urldecode($this->request->getGet('q'));
        $sqlQuery   = $builder
        ->select('images')
        ->getWhere(['title' => $title])
        ->getRow('images');

        if(!empty($sqlQuery) || $sqlQuery != null) {
            $temp = json_decode($sqlQuery);

            if($builder->delete(['title' => $title])) {
                $this->db->close();

                foreach($temp as $image) {
                    unlink('../public/images/album/' . $image);
                }

                return redirect()->to('dashboard/pengaturan/galeri')->with('success', 'Berhasil menghapus album.');
            } else {
                $this->db->close();

                return redirect()->back()->withInput()->with('error', 'Gagal menghapus album. Coba lagi!');
            }
        } else {
            $this->db->close();

            return redirect()->back()->withInput()->with('error', 'Gagal menghapus album. Coba lagi!');
        }

        // return $this->response->setJSON($row->getRow('images'));
    }

    public function partner()
    {
        $builder    = $this->db->table('partner');
        $data       = [
            'title'         => 'Pengaturan Mitra',
            'breadcrumb'    => [
                ['Pengaturan', '/pengaturan'],
                ['Mitra', '/pengaturan/mitra']
            ],
            'contents'      => []
        ];

        $data['contents'] = $builder
        ->select('id, name, logo')
        ->orderBy('name', 'ASC')
        ->get()
        ->getResult('array');

        $this->db->close();

        return view('setting-partner', $data);
        // return $this->response->setJSON($data);
    }
    
    public function addPartner()
    {
        $builder    = $this->db->table('partner');
        $rules      = [
            'name'=> [
                'rules'     => ['required'],
                'errors'    => ['required'  => 'Nama perusahaan tidak boleh kosong.']
            ],
            'logo'        => [
                'rules'     => [
                    'uploaded[logo]',
                    'mime_in[logo,image/jpg,image/jpeg,image/gif,image/png]'
                ],
                'errors'    => [
                    'uploaded'  => 'Logo perusahaan tidak boleh kosong.',
                    'mime_in'   => 'Jenis gambar harus berupa jpg, jpeg, atau png.'
                ]
            ]
        ];

        if(!$this->validate($rules)) {
            $this->db->close();
            
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name'  => $this->request->getPost('name'),
            'logo'  => null
        ];

        if($imageFile = $this->request->getFile('logo')) {
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                $imageName = $imageFile->getRandomName();

                $data['logo'] = $imageName;

                $imageFile->move('../public/images/partner', $imageName);
            }
        }
        
        if($builder->insert($data)) {
            $this->db->close();

            return redirect()->to('dashboard/pengaturan/mitra')->with('success', 'Berhasil menambahkan mitra baru.');
        } else {
            $this->db->close();

            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan mitra. Coba lagi!');
        }
        
        // return $this->response->setJSON($data);
    }

    public function delPartner()
    {
        $builder    = $this->db->table('partner');
        $code       = urldecode($this->request->getGet('q'));
        $sqlQuery   = $builder
        ->select('logo')
        ->getWhere(['id' => $code])
        ->getRow('logo');

        if(!empty($sqlQuery) || $sqlQuery != null) {
            $temp = $sqlQuery;

            if($builder->delete(['id' => $code])) {
                $this->db->close();

                unlink('../public/images/partner/' . $temp);

                return redirect()->to('dashboard/pengaturan/mitra')->with('success', 'Berhasil menghapus mitra.');
            } else {
                $this->db->close();

                return redirect()->back()->withInput()->with('error', 'Gagal menghapus mitra. Coba lagi!');
            }
        } else {
            $this->db->close();

            return redirect()->back()->withInput()->with('error', 'Gagal menghapus mitra. Coba lagi!');
        }

        // return $this->response->setJSON($row->getRow('images'));
    }
    
    public function account()
    {
        $builder    = $this->db->table('user');
        $data       = [
            'title'         => 'Pengaturan Akun',
            'breadcrumb'    => [
                ['Pengaturan', '/pengaturan'],
                ['Akun', '/pengaturan/akun']
            ],
            'contents'      => []
        ];
        
        $data['contents'] = $builder
        ->select('email, username, hint')
        ->getWhere(['id' => 1])
        ->getRow();

        $this->db->close();

        return view('setting-account', $data);
        // return $this->response->setJSON($data);
    }

    public function save()
    {
        $builder    = $this->db->table('user');
        $query      = !empty($this->request->getGet('q')) ? $this->request->getGet('q') : null;
        $data       = [];
        
        if($query == null) {
            $this->db->close();

            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        if($query == 'email') { 
            $rules  = [
                'email' => [
                    'rules'     => [
                        'required',
                        'is_unique[user.email]'
                    ],
                    'errors'    => [
                        'required'  => 'Email tidak boleh kosong.',
                        'is_unique' => 'Email sama dengan sebelumnya.'
                    ]
                ]
            ];
            $data   = [
                'email' => $this->request->getPost('email')
            ];
        } else if ($query == 'username') {
            $rules  = [
                'username' => [
                    'rules'     => [
                        'required',
                        'is_unique[user.username]'
                    ],
                    'errors'    => [
                        'required'  => 'Username tidak boleh kosong.',
                        'is_unique' => 'Username sama dengan sebelumnya.'
                    ]
                ]
            ];
            $data   = [
                'username' => $this->request->getPost('username')
            ];
        } else if($query == 'password') {
            $rules  = [
                'password' => [
                    'rules'     => [
                        'required',
                        'matches[match-password]'
                    ],
                    'errors'    => [
                        'required'  => 'Password tidak boleh kosong.',
                        'matches'   => 'Password yang dimasukkan tidak sama.'
                    ]
                ],
                'match-password' => [
                    'rules'     => [
                        'required'
                    ],
                    'errors'    => ['required' => 'Ketik ulang password.']
                ]
            ];
            $data = [
                'password'  => md5($this->request->getPost('password')),
                'hint'      => $this->request->getPost('password')
            ];
        } else {
            $this->db->close();

            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }

        if(!$this->validate($rules)) {
            $this->db->close();
            
            return redirect()->to('dashboard/pengaturan/akun#' . $query)->withInput()->with('errors', $this->validator->getErrors());
        }
        
        if($builder->set($data)->where('id', 1)->update()) {
            $this->db->close();

            if($query == 'username' || $query == 'password') {
                $this->auth->logout();

                return redirect()->to('login')->with('success', 'Berhasil memperbaharui ' . $query . '.');
            } else {
                return redirect()->to('dashboard/pengaturan/akun#' . $query)->with('success', 'Berhasil memperbaharui ' . $query . '.');
            }
        } else {
            $this->db->close();

            return redirect()->to('dashboard/pengaturan/akun#' . $query)->withInput()->with('error', 'Terjadi kesalahan saat memperbarui ' . $query . '.');
        }
        
        // return $this->response->setJSON($data);
    }
}