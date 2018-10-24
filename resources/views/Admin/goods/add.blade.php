@extends('Admin/admin/index')

@section('title')
{{$title}}
@endsection()

@section('css')
    @parent()
    <style type="text/css">
        .lb{width: 100px; height:30px; font-size: 14px;line-height: 30px;}
        .sub_btn{
            margin-top: 5px;
        }
    </style>
@endsection()

@section('content')
    <form action="" method="post" class="add" enctype="multipart/form-data">
        {{--{{csrf_token()}}--}}
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div>
            <label class="lb" for="name">书本名字：</label>
            <input type="text" class="form-control text" name="name" id="name">
        </div>
        <div>
            <label class="lb" for="cover">书本图片：</label>
            <input type="file" class="form-control text" name="cover" id="cover">
        </div>
        <div>
            <label class="lb" for="cover">书本描述：</label>
            <input type="text" class="form-control text" name="desc" id="cover">
        </div>
        <div>
            <label class="lb" for="cover">书本类别：</label>
            <select class="form-control" name="cate_id" id="">
                <option value="">玄幻修仙</option>
                <option value="">仙侠江湖</option>
                <option value="">历史架空</option>
            </select>
        </div>
        <div>
            <label class="lb" for="cover">书本原价：</label>
            <input type="text" class="form-control text" name="old_price" id="cover">
        </div>
        <div>
            <label class="lb" for="cover">书本会员价：</label>
            <input type="text" class="form-control text" name="mem_price" id="cover">
        </div>


        <button class="btn btn-primary sub_btn">确认添加</button>
    </form>
@endsection()

@section('js')
    @parent()
    <script type="text/javascript">
        $(function(){
            $('.sub_btn').on('click', function(){
                $.ajax({
                    url : '{{url('Admin/admin/get-msg')}}',
                    type : 'POST',
                    data : $('form').serialize(),
                    datatype : 'json',
                    success : function(data){
                        alert(data);
                    }
                });
            });
        });
    </script>
@endsection()