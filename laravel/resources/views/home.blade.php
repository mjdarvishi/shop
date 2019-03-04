@extends('master')
@section('title')
    خانه
@endsection
@section('body')
    <div class="col-2 sidbar">
        @foreach($cat as $item)


            <a class="sidbaritem"><img src="{{asset('assets/images/icon1.png')}}">{{$item->name}}</a>
            @foreach($item->subcat as $seconditem )
                <a class="sidbar-item"><img src="{{asset('assets/images/icon2.png')}}">{{$seconditem->name}}</a>
            @endforeach
        @endforeach
    </div>
    <div class="col-10 probar">
        @foreach($product as $item)
            <div class="col-5 product">
                <span class="titleproduct col-12">{{$item->title}}</span>
                <div class="explanation">
                    {{$item->description}}
                </div>
                <div class="price col-5">
                    {{$item->price}}
                </div>

                <div class="price col-5">
                    {{$item->subcat->name}}
                </div>

                <div class="col-12 buttons">
                    <a href="http://localhost:8080/shop/product/{{$item->id}}">
                        <button type="button" class="btn btn-primary btn-sm">جیزیات بیشتر</button>
                    </a>
                    <button type="button" class="btn btn-danger btn-sm">افزودن به سبد خرید</button>
                </div>
            </div>

        @endforeach
    </div>
@endsection