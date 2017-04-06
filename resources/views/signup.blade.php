@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/signup.css' />
@endsection

@section('content')
<div class='col-md-6'>
    <h2 class='title'>注 册</h2>

    <form action='{{route('psignup')}}' method='POST'>
        用户名：<input type='text' name='username' class='form-control form-field' placeholder='用户名' />
        密 码：<input type='password' name='password' class='form-control form-field' placeholder='密 码' />
        Email： <input type='email' name='email' class='form-control form-field' placeholder='Email' />
        <input type="hidden" name='_token' value='{{csrf_token()}}' />
        <input type="submit" class="btn btn-default btn-success" value="注 册"/>
        <p class='login-prompt'>
            <small>已有账号? <a href='{{route('login')}}'>登 录</a></small>
        </p>
    </form>
</div>
<div class='col-md-6 hidden-xs hidden-sm'>
    <div class='right-col-one'>
        <h4>用户名</h4>
        <p>登录 {{env('APP_NAME')}} 的用户名。</p>
    </p>
    <div class='right-col-next'>
        <div class='right-col'>
            <h4>密 码</h4>
            <p>登录 {{env('APP_NAME')}} 的密码。</p>
        </p>
    </div>
    <div class='right-col-next'>
        <h4>Email</h4>
        <p>安全邮箱！用于激活账号或者重置密码。</p>
    </p>

</div>
@endsection
