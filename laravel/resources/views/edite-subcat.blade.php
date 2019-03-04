@extends('master')

@section('title')
    ویرایش زیر دسته
@endsection

@section('body')

    <div class="col-4 newmaneger">
        <form action="{{url('/subcat/edit/'.$subcat->id)}}" method="post">
            <div class="form-group">
                <input id="name" name="name" type="text" class="form-control" value="{{$subcat->name}}">
            </div>
            <select class="col-12 catselection" id="cat" name="cat">
                @foreach($cat as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button  id="submit" class=" btn btn-success btn-block ">ویرایش  زیر دسته</button>
        </form>

    </div>


@endsection
