@extends('Home/login/register')

@section('title')
    {{$title}}
@endsection()

@section('content')
    <div class="login container " id="login">
        <p class="text-big text-center logo-color">
            创建某某账号，驰骋电子商务
        </p>
        <p class=" text-center margin-small-top logo-color text-small">
            控制台 | 云平台 | 论坛 | 云市场
        </p>
        <form class="register-form" action="index.html" method="post" autocomplete="off">
            <div class="num-box ">
                <div class="area fl">
                    +86(中国)
                </div>
                <input type="text" placeholder="请输入手机号" autofocus="true" id="num-name" name="mobile" datatype="m" nullmsg="请填写正确的手机号码">
            </div>
            <div class="slider-box">
                <div id="captcha" style="margin-left: 12px;">
                </div>
            </div>
            <input type="hidden" name="formhash" value="5abb5d21"/>
            <input type="submit" class="btn text-center login-btn" value="发送验证码">
            <div class="forget">
                <a href="{{url('Admin/home/register')}}" class="forget-pwd text-small fl">注册一个新用户</a><a href="{{url('Admin/home/login')}}" class="forget-new text-small fr" id="forger-login">已有账号，立即登录</a>
            </div>
        </form>
    </div>
@endsection()