@extends('master')

@section('title')
    ویرایش دسته
@endsection

@section('body')

    <div class="col-4 newmaneger">
        <form action="{{url('/cat/edit/'.$cat->id)}}" method="post">
            <div class="form-group">
                <input id="name" name="name" type="text" class="form-control" value="{{$cat->name}}">
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button  id="submit" class=" btn btn-success btn-block ">ویرایش دسته</button>
        </form>

    </div>



@endsection
