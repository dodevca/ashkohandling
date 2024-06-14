<?php
namespace App\Models;

use CodeIgniter\Model;

class EmailModel extends Model
{
    protected $mail, $from, $name, $email;

    public function __construct()
    {
        $this->mail = \Config\Services::email();
        $this->from = 'cs@ashkohandling.com';
        $this->name = 'Ashko Handling';
    }
    
    public function sendNotification($data)
    {
        $emailSet = $this->mail
        ->setFrom($this->from, $this->name)
        ->setTo('cs@ashkohandling.com')
        ->setSubject('Reservasi Baru - ' . $data['package'])
        ->setMessage(view('notification', $data))
        ->send();
    }

    public function sendTicket($data)
    {
        $emailSet = $this->mail
        ->setFrom($this->from, $this->name)
        ->setTo($data['agentInfo']->email)
        ->setSubject('Reservasi Anda Diterima - ' . $data['code'])
        ->setMessage(view('mail', $data))
        ->send();
    }   
}