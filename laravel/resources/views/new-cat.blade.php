@extends('master')

@section('title')
    افزودن دسته
@endsection

@section('body')

    <div class="col-4 newmaneger">
        <form action="{{url('/new-cat')}}" method="post">
            <div class="form-group">
                <input id="name" name="name" type="text" class="form-control" placeholder="نام دسته">
            </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button  id="submit" class=" btn btn-success btn-block ">ثبت دسته</button>
        </form>

    </div>

   
@endsection
