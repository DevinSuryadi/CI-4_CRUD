<?php namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\IdentitasModel;

class Users extends BaseController {
    public function index() {
        $model = new UsersModel();
        $data['users'] = $model->findAll();
        return view('users/index', $data);
    }

    public function create() {
        return view('users/create');
    }

}
