@extends('Home/login/register')

@section('title')
    {{$title}}
@endsection()

@section('css')
    @parent
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="login-dom login-max">
        <div class="login container " id="login">
            <p class="text-big text-center logo-color">
                同一个账号，连接一切
            </p>
            <p class=" text-center margin-small-top logo-color text-small">
                控制台 | 云平台 | 论坛 | 云市场
            </p>
            <form class="login-form" action="{{url('Admin/home/check-login')}}" method="post" autocomplete="off">
                {{--<input type="hidden" name="csrf_token" value="{{csrf_token()}}">--}}
                {{csrf_field()}}
                <div class="login-box border text-small" id="box">
                    <div class="name border-bottom">
                        <input type="text" placeholder="手机 / 邮箱 / 某某账号" id="username" name="username" datatype="*" nullmsg="请填写帐号信息">
                    </div>
                    <div class="pwd">
                        <input type="password" placeholder="密码" datatype="*" id="password" name="password" nullmsg="请填写帐号密码">
                    </div>
                    <div class="valid">
                        <input class="form-control" style="width: 150px;margin:3px; height: 40px;display: inline-block;" type="text" placeholder="输入验证码" name="captcha">
                        <img onclick="re_captcha()" src="{{url('Admin/home/get-captcha/1')}}" id="captcha" alt="">
                    </div>
                </div>
                <input type="hidden" name="formhash" value="5abb5d21"/>
                <input type="" style="display: block;" class="btn text-center login-btn" id="lg" value="立即登录">
            </form>
            <div class="forget">
                {{--url('对应的路由')  这是转到对应的路由  --}}
                <a href="{{url('Admin/home/forget-pwd')}}" class="forget-pwd text-small fl">忘记登录密码？</a><a href="{{action('Admin\HomeController@register')}}" class="forget-new text-small fr" id="forget-new">创建一个新账号</a>
            </div>
        </div>
    </div>
@endsection()

@section('js')
    @parent()
    <script type="text/javascript">
        function re_captcha() {
            $url = "{{url('Admin/home/get-captcha')}}";
            $url = $url + "/" + Math.random();
            document.getElementById('captcha').src = $url;
        }
        $('#lg').on('click',function(){
            $.ajax({
                url : '{{url('Admin/home/check-login')}}',
                type : 'POST',
                data : $('form').serialize(),
                datatype : 'json',
                success : function(data){
                        var value = $.parseJSON(data);
                        if(value.result == 1){
                            alert(value.msg);
                            window.location="{{url('Admin/home/index')}}";
                        }else{
                            alert(value.msg);
                        }
                }
            })
        });
    </script>
@endsection()

