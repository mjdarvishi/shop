@extends('auth.master')
@section('title')
    ورود به سایت
@endsection
@section('subject')
    ورود کاربران
@endsection
@section('content')
    <form action="login" method="post">
        <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input value="ورود" type="submit" class="btn btn-danger btn-block">

    </form>
    <div class="final col-12">
        <div class="col-6">
          <a href="register">
              نام نویسی
          </a>
        </div>
        <div class="col-6">
            یاد اوری گذر واژه
        </div>
    </div>

@endsection





