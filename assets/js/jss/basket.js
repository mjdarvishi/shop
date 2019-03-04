$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.btn_dis').click(function (){
        var title = $('.discount').val();
        var price = $('.priceofitem').data("data-price");

        $.post('/buy', {title: title,price:price}, function ($result,$status) {
            if($result ==1)
            {
              alert("seccess");
            }
            else
            {
                alert("err");

            }
        });
    })
});
