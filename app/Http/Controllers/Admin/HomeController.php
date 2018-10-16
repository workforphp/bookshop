<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;

class HomeController extends BaseController
{

    public function login()
    {
        return view('Home/login/login',['title' => '会员登录','keywords' => '登陆']);
    }

    public function register()
    {
        return view('Home/login/register',['title' => '会员注册', 'keywords' => '注册']);
    }

    public function forgetPwd()
    {
        return view('Home/login/forgetPwd',['title' => '忘记密码', 'keywords' => '忘记密码']);
    }


}



