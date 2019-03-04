<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>{{'فروشگاه اینترنتی'}}-@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- sset icon site--}}
    <link rel="icon" href="{{ asset ('assets/favicon.ico')}}">


</head>
<body>
<div class="main col-3">
    <div class="top">
        <div class="col-4 icon">
            <img src="{{asset('assets/images/1.png')}}">
        </div>
        <div class="col-7 top_top">
            @yield('subject')
        </div>
        <div class="top_bottom col-7">
            با ورود به سایت ما محصولات مورد نیاز خود را خرید کنید
        </div>
    </div>
    <div class="bottom">
      @yield('content')

    </div>
    <div class="footer col-12">
        m.j.darvishi and m.s.derakhshan
    </div>
</div>

</body>


</html>