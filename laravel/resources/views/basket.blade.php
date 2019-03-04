@extends('master')
@section('title')
    سبد خرید
@endsection
@section('src')
    {{asset("assets/js/jss/basket.js")}}
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
    <?php  $price = 0  ?>

    @foreach($pro as $item)
        <div class="col-10 probar">

            <div class="col-5 product">
                <div class="explanation">
                    نام محصول: {{$item->title}}
                </div>

                <div class=" col-12">

                    قیمت با تخفیف:<?php $p = $item->Discount()->get();

                    $total = 0;
                    foreach ($p as $pp) {
                        $total+=$pp->price;
                    }

                    ?>
                    {{$price=$item->price-$total}}
                    <?php $price+= $item->price-$total ?>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="product_id" value="">


            </div>


        </div>

    @endforeach
    <div data-price="<?=  $price  ?>" class="col-10 pric">جمع کل:<?=  $price  ?></div>
  <div class="con">
      <input name="name" type="text" class=" col-3 form-control discount" placeholder="کد تخفیف">
      <button class="col-1 btn btn-success btn-block btn_dis ">اعمال</button>
  </div>
    <input id="comm" value="پرداخت" type="submit" class=" col-10 btn btn-danger btn-block">

    <script>


        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.btn_dis').click(function () {
                var title = $('.discount').val();
                var price = $('.pric').attr("data-price");

                $.post('{{url('/buy')}}', {title: title, price: price}, function ($result, $status) {
                    if ($result != price) {
                        $('.pric').text('جمع کل:'+$result);
                        $('.con').text('کد تخفیف مورد نظر اعمال شد')

                    }
                    else {
alert('کد تخفیف وارد شده نامعتبر است');
                    }
                },'json');
            })
        });

    </script>

@endsection