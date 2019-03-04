@extends('master')
@section('title')
    مدیریت دسته ها
@endsection
@section('body')

    <form id="form" action="" method="post">
        <div class="col-12 probar">
            @foreach($cat as $item)
                <div class="col-5 product">
                    <span class="titleproduct col-12">دسته ها</span>


                    <div class=" col-12">
                        نام دسته: {{$item->name}}
                    </div>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$item->id}}">

                    <div class="col-12 buttons">

                        <button id="dell" class="btn btn-danger btn-sm">حذف</button>

                        <a id="link" href="{{url('/cat/'.$item->id)}}">
                            <input value="ویرایش" type="button"  class="btn btn-danger btn-sm">
                        </a>

                    </div>

                </div>
        </div>

        @endforeach
        {{$cat->Links()}}
    </form>


    <script>
        $("#dell").click(function(){
            $('#form').attr("action", "{{url('/cat/dell')}}");
            $("#form").submit();
        });


    </script>

@endsection