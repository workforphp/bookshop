@extends('layouts/layout')

@section('css')
    @parent()
    <style type="text/css">
        .none{
            display: none;
        }
    </style>
@endsection()

@section('title')
{{$title}}
@endsection()

@section('sidebar')
    <div class="sidebar-content">
        <div class="sidebar-nav">
            <div class="sidebar-nav">
                <div class="sidebar-title">
                    <a class="nav" href="#">
                        <span class="icon"><b class="fl icon-arrow-down"></b></span>
                        <span class="text-normal">商品管理</span>
                    </a>
                </div>
                <ul class="sidebar-trans none">
                    <li>
                        <a href="userInfo.html">
                            <b class="sidebar-icon"><img src="{{url('Images/icon_cost.png')}}" width="16" height="16" /></b>
                            <span class="text-normal">商品列表</span>
                        </a>
                    </li>
                    <li>
                        <a href="userInfo.html">
                            <b class="sidebar-icon"><img src="{{url('Images/icon_cost.png')}}" width="16" height="16" /></b>
                            <span class="text-normal">分类设置</span>
                        </a>
                    </li>
                    <li>
                        <a href="userInfo.html">
                            <b class="sidebar-icon"><img src="{{url('Images/icon_cost.png')}}" width="16" height="16" /></b>
                            <span class="text-normal">规格设置</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-nav">
                <div class="sidebar-title">
                    <a class="nav" href="#">
                        <span class="icon"><b class="fl icon-arrow-down"></b></span>
                        <span class="text-normal">店铺管理</span>
                    </a>
                </div>
                <ul class="sidebar-trans none">
                    <li>
                        <a href="userInfo.html">
                            <b class="sidebar-icon"><img src="{{url('Images/icon_cost.png')}}" width="16" height="16" /></b>
                            <span class="text-normal">店铺列表</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-nav">
                <div class="sidebar-title">
                    <a class="nav" href="#">
                        <span class="icon"><b class="fl icon-arrow-down"></b></span>
                        <span class="text-normal">红包管理</span>
                    </a>
                </div>
                <ul class="sidebar-trans none">
                    <li>
                        <a href="userInfo.html">
                            <b class="sidebar-icon"><img src="{{url('Images/icon_cost.png')}}" width="16" height="16" /></b>
                            <span class="text-normal">满减红包</span>
                        </a>
                    </li>
                    <li>
                        <a href="userInfo.html">
                            <b class="sidebar-icon"><img src="{{url('Images/icon_cost.png')}}" width="16" height="16" /></b>
                            <span class="text-normal">新人券</span>
                        </a>
                    </li>
                </ul>
            </div>

            <ul class="sidebar-trans">
                <li>
                    <a href="webSet.html">
                        <b class="sidebar-icon"><img src="{{url('Images/icon_author.png')}}" width="16" height="16" /></b>
                        <span class="text-normal">会员列表</span>
                    </a>
                </li>
                <li>
                    <a href="smsInfo.html">
                        <b class="sidebar-icon"><img src="{{url('Images/icon_message.png')}}" width="16" height="16" /></b>
                        <span class="text-normal">订单列表</span>
                    </a>
                </li>
                <li>
                    <a href="smsInfo.html">
                        <b class="sidebar-icon"><img src="{{url('Images/icon_message.png')}}" width="16" height="16" /></b>
                        <span class="text-normal">物流列表</span>
                    </a>
                </li>
                <li>
                    <a href="smsInfo.html">
                        <b class="sidebar-icon"><img src="{{url('Images/icon_message.png')}}" width="16" height="16" /></b>
                        <span class="text-normal">广告位</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>

@endsection()

@section('content')
<h3>新的内容</h3>
@endsection()

@section('js')
    <script>
        $(function(){
            $('.nav').on('click',function(){
                let num = $(this).index('.nav');
                if($('.none').eq(num).css('display') == 'none'){
                    $('.none').eq(num).css('display','block');
                }else{
                    $('.none').eq(num).css('display','none');
                }
                // $('.none').eq(num).css('display','block');
                // alert($(this).index('.nav'));
                // alert($(this).find('ul').css('display'));
                // if($('.sidebar-nav a').css('display'))
                // $('.sidebar-nav ul').css('display','block');
                // alert('123');
            });
        });

    </script>

{{--@parent()--}}
@endsection()