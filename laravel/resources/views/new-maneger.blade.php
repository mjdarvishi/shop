@extends('master')
@section('title')
افزودن مدیر
@endsection
@section('body')
<div class="col-4 newmaneger">
    <form action="{{url('/new-maneger')}}" method="post">
        <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="name">
        </div>
        <div class="form-group">
            <input name="email" type="text" class="form-control" placeholder="email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
        <select class="form-control sel" name="privileges[]" >
           @foreach(Auth::user()->privilege()->get() as $item)
               <option value="{{$item->id}}">{{$item->name}}</option>
               @endforeach
        </select>

        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input value="ثبت مدیر جدید" type="submit" class="btn btn-danger btn-block">

    </form>
</div>
    @endsection

