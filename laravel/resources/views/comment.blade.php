@extends('master')
@section('title')
    تایید کامنت
@endsection
@section('body')

        <form id="form" action="" method="post">
            <div class="col-12 probar">
                @foreach($comment as $item)
                    <div class="col-5 product">
                        <span class="titleproduct col-12">دیدگاه ها</span>
                        <div class="explanation">
                           شرح کامنت: {{$item->content}}
                        </div>

                        <div class=" col-12">
                           نام نویسنده: {{$item->user->name}}
                        </div>
                        <div class=" col-12">
                          ایمیا نویسنده: {{$item->user->email}}
                        </div>
                        <div class=" col-12">
                            برای محصول: {{$item->product->name}}
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{$item->id}}">

                        <div class="col-12 buttons">
                            <button id="confirm" class="btn btn-primary btn-sm"> تایید و نمایش در سایت</button>
                            <button id="dell" class="btn btn-danger btn-sm">حذف دیدگاه</button>
                        </div>

                    </div>
            </div>

            @endforeach
            {{$comment->Links()}}
        </form>


<script>
    $("#confirm").click(function(){
        $("#form").attr("action", "{{url('/comment/submite')}}");
        $("#form").submit();
    });
    $("#dell").click(function(){
        $('#form').attr("action", "{{url('/comment/dell')}}");
        $("#form").submit();
    });
</script>

@endsection