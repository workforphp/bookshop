<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;

class HomeController extends BaseController
{

    public function login()
    {
        return view('Home/login');
    }
}



