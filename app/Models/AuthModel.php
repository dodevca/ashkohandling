<?php
namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $session, $db, $builder;

    public function __construct()
    {
        $this->session  = session();
        $this->db       = \Config\Database::connect();
        $this->builder  = $this->db->table('user');    
    }

    private function getAccount($username, $password)
    {
        $this->builder->select('id');
        
        $query = $this->builder->getWhere(['username' => $username, 'password' => $password]);
        
        $this->db->close();
        
        return (!empty($query->getRow()));
    }

    public function login($data)
    {
        if($this->getAccount($data['username'], $data['password'])) {
            $config = config('App');
            
            $this->session->set([
                'isLoggedIn'  => $data['username']
            ]);
        }

        $this->db->close();

        return $this->session->has('isLoggedIn');
    }

    public function isLoggedIn()
    {
        $this->db->close();
        
        if(!$this->session->has('isLoggedIn')) {
            header("Location: /login");
            
            die();
        }
    }

    public function logout()
    {
        $this->db->close();
        
        $this->session->remove([
            'isLoggedIn'
        ]);
    
        return $this->session->has('isLoggedIn');
    }
}