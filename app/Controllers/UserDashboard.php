<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserDashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('level') || session()->get('level') != '1') {
            return redirect()->to('/login');
        }

        $npm = session()->get('npm');
        $userModel = new UserModel();
        $user = $userModel->getUserByNPM($npm);

        return view('user_dashboard', ['user' => $user]);
    }

        public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

}
