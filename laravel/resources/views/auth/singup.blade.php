@extends('auth.master')
@section('title')
    ثبت نام
@endsection
@section('subject')
    ثبت نام
@endsection
@section('content')
    <form action="register" method="post">
        <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="name">
        </div>
        <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input value="نام نویسی" type="submit" class="btn btn-danger btn-block">

    </form>
    <div class="final col-12">
        <div class="col-6">
            <a href="login">
                ورود کاربران
            </a>
        </div>
        <div class="col-6">
            یاد اوری گذر واژه
        </div>
    </div>

@endsection