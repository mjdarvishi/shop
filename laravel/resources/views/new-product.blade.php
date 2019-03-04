@extends('master')

@section('title')
    افزودن زیر محصول
@endsection

@section('body')

    <div class="col-4 newmaneger">
        <form action="{{url('/new-product')}}" method="post">
            <div class="form-group">
                <input id="name" name="name" type="text" class="form-control" placeholder="نام محصول">
            </div>
            <div class="form-group">
                <input id="price" name="price" type="text" class="form-control" placeholder="قیمت">
            </div>
            <div class="form-group">
                <textarea id="description" name="description" class="form-control col-12"
                          placeholder="توضیحات"></textarea>

            </div>
            <select class="col-12 catselection" id="subcat" name="subcat">
                @foreach($subcat as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button id="submit" class=" btn btn-success btn-block ">ثبت محصول</button>
        </form>

    </div>


@endsection
