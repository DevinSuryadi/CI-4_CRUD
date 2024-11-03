<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

$routes->get('/', 'Auth::index'); 
$routes->post('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');
$routes->get('signup', 'Auth::signup'); 
$routes->post('signup', 'Auth::createAccount'); 
$routes->get('user_dashboard', 'UserDashboard::index');
$routes->get('admin_dashboard', 'AdminDashboard::index'); 


