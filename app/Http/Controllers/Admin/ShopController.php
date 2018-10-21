<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ShopController extends BaseController
{
    public function __construct()
    {
//        return $this->sid;
        parent::__construct();
        $data = ['name' => '李四','age' => 27];
        $this->sid or $this->responseMsg(1,'token不存在',$data);
    }

    public function register()
    {
        return 'register';
    }

    public function login(Request $request)
    {
        return $this->sid;
        $content = 'Hello Response';
        $status = 200;
        $value = 'text/html;charset=utf-8';
        return response($content, $status)->header('Content-Type', $value)->withCookie('test','yyktest');
    }

}