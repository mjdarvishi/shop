@extends('master')
@section('title')
    مدیریت
@endsection
@section('body')
    @if(Auth::user()->privilege()->find(1) !=null)
        <div class="container col-12 groups">
            <span>مدیریت مدیران:</span>
            <a href="{{url('/new-maneger')}}">
                <button type="button" class="btn btn-outline-danger btn-sm groupbutton">افزودن مدیر جدید</button>
            </a>
        </div>
    @endif

    @if(Auth::user()->privilege()->find(4) !=null)
        <div class="container col-12 groups">
            <span>مدیریت محصولات:</span>
            <a href="{{url('/new-product')}}">
                <button type="button" class="btn btn-outline-danger btn-sm groupbutton">افزودن محصول جدید</button>
            </a>
            <a href="{{url('/product')}}">
                <button type="button" class="btn btn-outline-danger btn-sm groupbutton"> مدیریت محصولات</button>
            </a>
        </div>

    @endif
    <div class="container col-12 groups">
        <span>مدیریت کد های تخفیف:</span>
        <a href="{{url('/code')}}">
            <button type="button" class="btn btn-outline-danger btn-sm groupbutton">افزودن کد تخفیف</button>
        </a>
        <a href="{{url('/code/dis')}}">
            <button type="button" class="btn btn-outline-danger btn-sm groupbutton">افزودن کد تخفیف به محصولات</button>
        </a>

    </div>
    @if(Auth::user()->privilege()->find(3) !=null)
        <div class="container col-12 groups">
            <span>مدیریت دیدگاه ها:</span>
            <a href="{{url('/comment')}}">
                <button type="button" class="btn btn-outline-danger btn-sm groupbutton">مدیریت دیدگاه ها</button>
            </a>
        </div>
    @endif
    @if(Auth::user()->privilege()->find(2) !=null)
        <div class="container col-12 groups">
            <span>مدیریت دسته ها و زیر دسته ها:</span>
            <a href="{{url('/cat')}}">
                <button type="button" class="btn btn-outline-danger btn-sm groupbutton">مدیریت دسته ها</button>
            </a>
            <a href="{{url('/new-cat')}}">
                <button type="button" class="btn btn-outline-danger btn-sm groupbutton">افزودن دسته ها</button>
            </a>
            <a href="{{url('/subcat')}}">
                <button type="button" class="btn btn-outline-danger btn-sm groupbutton">مدریت زیر دسته ها</button>
            </a>
            <a href="{{url('/new-subcat')}}">
                <button type="button" class="btn btn-outline-danger btn-sm groupbutton">افزوردن زیر دسته ها</button>
            </a>
        </div>
    @endif


@endsection
