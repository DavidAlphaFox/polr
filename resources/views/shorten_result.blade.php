@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/shorten_result.css' />
@endsection

@section('content')
<h3>短链接 已生成</h3>
<input type='text' class='result-box form-control' value='{{$short_url}}' />
<a href='{{route('index')}}' class='btn btn-info back-btn'>再压缩一个</a>
@endsection

@section('js')
<script src='/js/shorten_result.js'></script>
@endsection
