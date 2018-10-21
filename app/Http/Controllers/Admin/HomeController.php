<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use Gregwar\Captcha\CaptchaBuilder;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mews\Captcha\Captcha;

class HomeController extends BaseController
{

    public function login(Captcha $captcha)
    {
        return view('Home/login/login',['title' => '会员登录']);
    }

    public function register()
    {
        return view('Home/login/register',['title' => '会员注册']);
    }

    public function forgetPwd()
    {
        return view('Home/login/forgetPwd',['title' => '忘记密码']);
    }

    public function checkLogin(Request $request)
    {
        if($request->ajax()){
            $username = $request->input('username');
            $password = $request->input('password');
            $valid = $request->input('captcha');
            $verify = session('valid');
            $return['verify'] = $verify;
            if($valid == $verify){
                $return['result'] = 1;
                $return['msg'] = '验证码正确，正在跳转';
            }else{
                $return['result'] = 2;
                $return['msg'] = '验证码错误，请重新输入';
            }
            return json_encode($return);
        }
        return '456';
    }

    public function index()
    {
//        return view('Home/index',['title' => '网站首页']);
        return view('Home/home/index');
    }

    public function getCaptcha($tmp)
    {
        $builder = new CaptchaBuilder();
        $builder->build($width = 150, $height = 40);
        $phrase = $builder->getPhrase();
        session(['valid' => $phrase]);
        $builder->output();
    }


}



