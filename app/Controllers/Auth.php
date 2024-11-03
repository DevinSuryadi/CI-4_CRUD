<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\IdentitasModel;

class Auth extends BaseController
{
    protected $userModel;
    protected $identitasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->identitasModel = new IdentitasModel();
    }

    public function login()
    {
        return view('login'); 
    }

    public function prosesLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['pass'])) {
            session()->set('level', $user['level']);
            session()->set('npm', $user['npm']);

            return redirect()->to($user['level'] == 1 ? 'user_dashboard' : 'admin_dashboard');
        } else {
            return redirect()->back()->with('error', 'Login gagal. Username atau password salah.');
        }
    }

    public function signup()
    {
        return view('signup');
    }

    public function prosesSignup()
    {
        $username = $this->request->getPost('username');
        $password = password_hash($this->request->getPost('password'), PASSWORD_BCRYPT);
        $npm = $this->request->getPost('npm');
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');

        if ($this->userModel->where('username', $username)->first()) {
            return redirect()->back()->with('error', 'Username sudah terdaftar. Silakan pilih username lain.');
        }

        $this->userModel->insert([
            'username' => $username,
            'pass' => $password,
            'level' => 1,
            'npm' => $npm
        ]);

        $this->identitasModel->insert([
            'npm' => $npm,
            'nama' => $nama,
            'alamat' => $alamat
        ]);

        return redirect()->to('/')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }
}
