@extends('master')
@section('title')
    مدیریت محصولات
@endsection
@section('body')

    <form id="form" action="" method="post">
        <div class="col-12 probar">
            @foreach($product as $item)
                <div class="col-5 product">
                    <span class="titleproduct col-12">محصولات ها</span>


                    <div class=" col-12">
                        نام محصول: {{$item->title}}
                    </div>
                    <div class=" col-12">
                        شرح محصول: {{$item->description}}
                    </div>
                    <div class=" col-12">
                        قیمت محصول: {{$item->price}}
                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$item->id}}">

                    <div class="col-12 buttons">

                        <button id="dell" class="btn btn-danger btn-sm">حذف</button>

                        <a id="link" href="{{url('/product/edite/'.$item->id)}}">
                            <input value="ویرایش" type="button" class="btn btn-danger btn-sm">
                        </a>

                    </div>

                </div>
        </div>

        @endforeach

    </form>


    <script>
        $("#dell").click(function () {
            $('#form').attr("action", "{{url('/product/dell')}}");
            $("#form").submit();
        });


    </script>

@endsection

