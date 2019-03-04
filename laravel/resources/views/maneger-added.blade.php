@extends('master')
@section('title')
افزودن مدیر
@endsection


@extends('master')
@section('body')
    <div class="newmaneger col-4" >
        <div class="container suc">مدیر با موفقیت ثبت شد</div>
        <a href="{{url('/panel')}}">
            <button type="button" class="btn btn-danger btn-block">بازگشت به سایت</button>
        </a>
    </div>
@endsection