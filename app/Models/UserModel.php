<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'identitas';
    protected $primaryKey = 'npm'; 
    protected $allowedFields = ['npm', 'nama', 'alamat']; 

    public function getUserByNPM($npm)
    {
        return $this->where('npm', $npm)->first();
    }

    public function getAllUsers()
    {
        return $this->findAll();
    }

    public function deleteUserByNPM($npm)
    {
        return $this->where('npm', $npm)->delete();
    }
}
