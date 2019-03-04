@extends('master')

@section('title')
    ویرایش محصول
@endsection

@section('body')

    <div class="col-4 newmaneger">
        <form action="{{url('product/sub/'.$product->id)}}" method="post">
            <div class="form-group">
                <input id="name" name="name" type="text" class="form-control" value="{{$product->title}}">
            </div>
            <div class="form-group">
                <input id="price" name="price" type="text" class="form-control" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <textarea id="description" name="description" class="form-control col-12"
                >
                    {{$product->description}}
                </textarea>

            </div>
            <select class="col-12 catselection" id="subcat" name="subcat">
                @foreach($subcat as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button id="submit" class=" btn btn-success btn-block ">ویرایش محصول</button>
        </form>

    </div>


@endsection
