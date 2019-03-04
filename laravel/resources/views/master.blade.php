<html lang="fa">
<head>
    <meta charset="utf-8">
    <script src="@yield('src')"></script>

    <title>{{'فروشگاه اینترنتی'}}-@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

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
<header>
    <nav class="navbar navbar-expand-sm nav ">
        <div class="col-6">
            <ul class="nav">
                <li class="nav-item">
                    <img src="{{url('assets/images/1.png')}}">
                    <span class="store">فروشگاه اینترنتی</span>
                </li>

                <li class="nav-item item">
                    <a href="{{url('/')}}">خانه</a>
                </li>
                <li class="nav-item item">
                    <a href="{{url('/login')}}">ورود به سایت</a>
                </li>
                <li class="nav-item item">
                    <a href="{{url('/register')}}">ثبت نام </a>
                </li>


            </ul>
        </div>
        <div class="col-6 ">
            <ul class="nav">
                <li>


                    <form method="post" action="{{url('/search')}}" class="form-inline form ">
                        <input type="hidden"  name="_token" value="{{csrf_token()}}">
                        <input name="search" class="form-control mr-sm-2" type="text" placeholder="جستجو....">
                        <input  class="btn btn-info" type="submit" value="جستجو">
                    </form>



                </li>
                <li>
                   <a href="{{url('/basket')}}"> <button type="button" class="btn btn-secondary form">خرید{{count(session('ids'))}}</button></a>
                </li>

                @if(Auth::user()->privilege()->find(1) !=null ||Auth::user()->privilege()->find(2) !=null ||Auth::user()->privilege()->find(3) !=null ||Auth::user()->privilege()->find(4) !=null )
                    <li>
                       <a href="{{url('/panel')}}"> <button type="button" class="btn btn-outline-danger form">پنل مدیریت</button></a>
                    </li>
                    @endif
            </ul>


        </div>

    </nav>
</header>
<div class="bodymain">
    @yield('body')
</div>
<footer class="footermain">
    <div class="col-4 footerdiv">
     تهیه شده توسطm.j.darvishi وm.s.derakhshan
    </div>
    <div class="col-8 footerdiv">
        <ul class="nav">
            <li class=" item2">
                <a  href="#">خانه</a>
            </li>
            <li class=" item2">
                <a  href="#">راهنما</a>
            </li>
            <li class=" item2">
                <a  href="#">تبلیغات</a>
            </li>
            <li class=" item2">
                <a  href="#">قوانین</a>
            </li>
            <li class=" item2">
                <a  href="#">درباره ی</a>
            </li>
            <li class=" item2">
                <a  href="#">ارتباط</a>
            </li>

        </ul>
    </div>
</footer>
</body>


</html>