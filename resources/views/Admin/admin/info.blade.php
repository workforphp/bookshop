@extends('layouts.layout')

@section('title')
    {{$title}}
@endsection()

@section('content')
    {{--<h2>{{$keywords}}</h2>--}}
    @parent()
    <h3>新的内容</h3>
@endsection()