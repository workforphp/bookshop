@extends('Home/login/register')

@section('title')
    {{$title}}
@endsection()

@section('content')
    <div class="login-dom login-max">
        <div class="login container " id="login">
            <p class="text-big text-center logo-color">
                同一个账号，连接一切
            </p>
            <p class=" text-center margin-small-top logo-color text-small">
                控制台 | 云平台 | 论坛 | 云市场
            </p>
            <form class="login-form" action="index.html" method="post" autocomplete="off">
                <div class="login-box border text-small" id="box">
                    <div class="name border-bottom">
                        <input type="text" placeholder="手机 / 邮箱 / 某某账号" id="username" name="username" datatype="*" nullmsg="请填写帐号信息">
                    </div>
                    <div class="pwd">
                        <input type="password" placeholder="密码" datatype="*" id="password" name="password" nullmsg="请填写帐号密码">
                    </div>
                </div>
                <input type="hidden" name="formhash" value="5abb5d21"/>
                <input type="submit" class="btn text-center login-btn" value="立即登录">
            </form>
            <div class="forget">
                {{--url('对应的路由')  这是转到对应的路由  --}}
                <a href="{{url('Admin/home/forget-pwd')}}" class="forget-pwd text-small fl">忘记登录密码？</a><a href="{{action('Admin\HomeController@register')}}" class="forget-new text-small fr" id="forget-new">创建一个新账号</a>
            </div>
        </div>
    </div>
@endsection()

