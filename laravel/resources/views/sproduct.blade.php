@extends('master')
@section('title')
    تایید کامنت
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
    <form id="form" action="" method="post">
        <div class="col-10 probar">

            <div class="col-5 product">
                <div class="explanation">
                    نام محصول:{{$product->title}}
                </div>

                <div class=" col-12">
                    قیمت: {{$product->price}}
                </div>
                <div class=" col-12">

                    قیمت با تخفیف:<?php $p = $product->Discount()->get();

                    $total = 0;
                    foreach ($p as $pp) {
                        $total+=$pp->price;
                    }
                    ?>
                    {{$product->price-$total}}
                </div>
                <div class=" col-12">
                    زیر دسته:{{$product->subcat->name}}
                </div>

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="product_id" value="{{$product->id}}">


                <div class="col-12 buttons">
                    <button id="basket" class="btn btn-danger btn-sm">افزودن به سبد خرید</button>
                </div>
                <textarea id="description" name="content" class="form-control col-12"
                          placeholder="توضیحات"></textarea>
                <input id="comm" value="ارسال دیدگاه ها" type="submit" class="btn btn-danger btn-block">


            </div>



                @foreach($comment as $item)
                   @if($item->status ==1)
                    <div class="col-5 product">
                        <span class="titleproduct col-12">دیدگاه ها</span>
                        <div class="explanation">
                            شرح کامنت: {{$item->content}}
                        </div>

                        <div class=" col-12">
                            نام نویسنده: {{$item->user->name}}
                        </div>


                        <input type="hidden" name="_token" value="{{csrf_token()}}">


                    </div>




                       @endif




        @endforeach

        </div>


    </form>

    <script>
        $("#comm").click(function(){
            $("#form").attr("action", "{{url('/new-comment')}}");
            $("#form").submit();
        });
        $("#basket").click(function(){
            $('#form').attr("action", "{{url('/add-basket')}}");
            $("#form").submit();
        });
    </script>

@endsection