<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>@yield('title','会员注册')</title>
    <meta name="keywords" content="某某科技" />
    <meta name="description" content="某某科技" />
    <link href="{{url('css/layout.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/login.css')}}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{url('js/jquery-1.7.2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/js.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.cookie.js')}}"></script>
</head>

<body class="login-bg">
<!--登录-->
<div class="main">
    <div class="login-dom">
        <div class="logo text-center">
            <img src="{{url('Images/logo.png')}}" width="180" height="180">
        </div>
        <!--注册-->
        @section('content')
        <div class="text-big text-center logo-color">同一个账号，连接一切</div>
        <div class=" text-center margin-small-top logo-color text-small">控制台 | 云平台 | 论坛 | 云市场 </div>
        <form class="register-form" name="register" action="http://account.haidao.la/index.php?c=Index&a=register" method="post" autocomplete="off">
            <div class="reg-wrap border">
                <div class="reg-number border-bottom">
                    <div class="fl reg-area text-gray">+86</div>
                    <input type="text" class="fl reg-phone" name="mobile" id="mobile" placeholder="请输入手机号码" datatype="m" ajaxurl="http://account.haidao.la/index.php?c=Index&a=check_mobile" />
                </div>
                <div class="reg-number">
                    <input type="text" disabled="disabled" name="vcode" id="vcode" class="fl padding-big-left reg-code" placeholder="请输入验证码" />
                    <a href="#" class="fl reg-send" id="send">发送验证码</a>
                </div>
            </div>
            <input type="hidden" name="formhash" value="5abb5d21" />
            <div class="margin-large-top padding-big-top">
                <input type="submit" class="btn text-big" value="立即注册">
            </div>
            <!-- <div class="reg-btn text-center text-big logo-color" type="submit">立即注册</div> -->
        </form>
        <div class="forget">
            <a href="{{action('Admin\HomeController@forgetPwd')}}" class="forget-pwd text-small fl">忘记登录密码？</a>
            <a href="{{url('Admin/home/login')}}" class="forget-new text-small fr" id="forger-login">已有账号，立即登录</a>
        </div>
        @show()
    </div>
    <div class="footer text-center  text-small">
        Copyright 2013-2016 某某科技有限公司 版权所有 <a href="#" target="_blank">滇ICP备13005806号</a>
        <span class="margin-left margin-right">|</span>
        <script src="#" language="JavaScript"></script>
    </div>
</div>

<div class="popupDom">
    <div class="popup  text-default">
    </div>
</div>
</div>
<script type="text/javascript" src="{{url('js/Validform_v5.3.2_min.js')}}"></script>
<script type="text/javascript">
    @section('js')
    /*动画（注册）*/
    $(document).ready(function(e) {
        var register = [];

        /*仿刷新：检测是否存在cookie*/
        $mobile = '';
        $time = 0;
        if (register) {
            $time = parseInt(new Date().getTime() / 1000 - register.time);
            $("input[name=mobile]").attr('value', register.mobile);
            _status($time);
        }
        $("input[name=mobile]").focus();

        $('form[name=register]').Validform({
            ajaxPost: true,
            tiptype: function(msg) {
                if (msg) popup('' + msg + '');
            },
            callback: function(ret) {
                popup('' + ret.info + '');
                if (ret.status == 1) {
                    if (ret.uc_user_synlogin) {
                        $("body").append(ret.uc_user_synlogin);
                    }
                    window.location.href = ret.url;
                }
            }
        })
    });

    /*发送验证码*/
    $("#send").click(function() {
        var obj = $("input[name=mobile]");
        if ($(this).attr('disabled')) {
            return false;
        }
        if (obj.val() == "") {
            popup("请输入手机号码")
            obj.focus();
            return false;
        }
        $.post("http://account.haidao.la/index.php?c=Index&a=vcode", {
            mobile: obj.val(),
        }, function(ret) {
            if (ret.status == 0) {
                popup(ret.info);
                return false;
            }
            $("input[name=vcode]").removeAttr('disabled');
            _status(60);
        }, 'json');
    });

    function _status(count) {
        var $send_sms = $("#send");
        var count = count;
        $send_sms.attr('disabled', 'disabled');
        var resend = setInterval(function() {
            count--;
            if (count > 0) {
                $('#send').html(count + '秒后重试');
                $("input[name='vcode']").removeAttr('disabled');
                $.cookie("register_vcode", count, {
                    path: '/',
                    expires: (1 / 86400) * count
                });

            } else {
                clearInterval(resend);
                $send_sms.html("重获验证码").removeAttr('disabled');
                $.cookie("register_vcode", null);
            }
        }, 1000);
    }
    @show()
</script>
</body>

</html>