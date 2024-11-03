<?php

namespace App\Controllers;

use App\Models\UserModel; 
use CodeIgniter\Controller;

class AdminDashboard extends Controller
{
    public function index()
    {
        // Check session
        $session = session();
        if (!$session->get('level') || $session->get('level') != '2') {
            return redirect()->to('login'); 
        }

        $model = new UserModel();
        $data['users'] = $model->findAll(); 

        return view('admin_dashboard', $data);
    }

    public function delete($npm)
    {
        $model = new UserModel();
        $model->delete($npm); 
        return redirect()->to('admin_dashboard'); 
    }
}
