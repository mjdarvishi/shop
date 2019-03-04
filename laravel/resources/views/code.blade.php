@extends('master')

@section('title')
    افزودن کد
@endsection

@section('body')

    <div class="col-4 newmaneger">

            <div class="form-group">
                <input id="name" name="name" type="text" class="form-control" placeholder="تعداد کاربران دربافت کننده کد ها ">
            </div>
        <div class="form-group">
                <input id="price" name="name" type="text" class="form-control" placeholder="مقدار تخفیف ">
            </div>
            <button  id="submit" class=" btn btn-success btn-block ">ارسال</button>


    </div>
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#submit').click(function () {
                var num = $('#name').val();
                var price = $('#price').val();
                $.post('{{url('/code')}}', {num:num,price:price}, function ($result, $status) {
                    if ($result ==1) {
                        alert("کد های تخفیف ثبت و ارسال شد");
                    }
                    else {
                        alert("خطایی به وجود امده است");

                    }
                },'json');
            })
        });

    </script>



@endsection
