<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->aid or $this->responseMsg(1);
    }

    public function getInfo()
    {
        return '这是注册页面';
    }

    public function index()
    {
        return view('Admin/admin/index',['title' => '管理员首页']);
    }

    public function add(Request $request)
    {
        if($request->ajax()){
            $base = $request->all();
        }else{
            return view('Admin/goods/add',['title' => '添加商品']);
        }

    }

    public function edit(Request $request)
    {

        return view('Admin/goods/edit', ['title' => '编辑商品']);
    }

    public function getMsg(Request $request)
    {
        if($request->ajax()){
            $cover = $request->input('name');
            $data = $this->responseMsg(1,'缺少参数');
//            $cover = $request->input('cover');
//            if(!$cover){
////                return $this->responseMsg(1,'缺少参数');
//
//            }
            return $cover;
        }else{
            return 23;
        }

//        return 456;

    }

}