<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;

class AdminController extends BaseController
{
    public function getInfo()
    {
        return '这是注册页面';
    }

    public function index()
    {
        return view('Home/admin/index',['title' => '管理员首页']);
    }

}