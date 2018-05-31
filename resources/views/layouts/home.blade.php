<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $page_title or 'Quick LMS' }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="page text-center">

    <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="55px" data-lg-stick-up-offset="55px" class="rd-navbar rd-navbar-centered">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand veil-md reveal-tablet-block"><a href="index.html" class="brand-name"> <img src="image/logo-224x48.png" width="224" height="48" alt="" class="img-responsive center-block"></a></div>
                        <div class="rd-navbar-nav-wrap">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li><a href="https://moon-ezoterica.ru">Главная</a></li>
                                <li><a href="https://moon-ezoterica.ru/shop">Каталог товаров</a></li>
                                <li class="active"><a href="/">Курсы онлайн</a></li>
                                <li>
                                    <!-- RD Navbar Brand-->
                                    <span class="rd-navbar-brand veil veil-tablet reveal-md-inline-block"><a href="index.html" class="brand-name"><img src="image/logo-full.png" width="156" height="45" alt="" class="img-responsive center-block"></a></span>
                                </li>
                                <li>
                                    @if (Auth::check())
                                        <div style="color:white">
                                            <form action="{{ route('auth.logout') }}" method="post">
                                                {{ csrf_field() }}
                                                {{ Auth::user()->email }}
                                                <input type="submit" value="Выход" class="btn btn-primary">
                                            </form>
                                        </div>
                                    @else
                                        <form action="{{ route('auth.login') }}"  method="post"  class="text-left">
                                            {{ csrf_field() }}
                                            <div class="range range-xs-center">
                                                <div class="cell-xs-6 cell-md-4 cell-lg-5 inset-xs-right-7">
                                                    <div class="form-group">
                                                        <label for="forms-username" class="form-label">Email</label>
                                                        <input id="forms-username" type="email" name="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="cell-xs-6 cell-md-4 cell-lg-5 offset-top-10 offset-xs-top-0 inset-xs-left-7">
                                                    <div class="form-group">
                                                        <label for="forms-email" class="form-label">Пароль</label>
                                                        <input id="forms-email" type="password" name="password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="cell-md-3 cell-lg-2 text-center text-md-left offset-top-10 offset-md-top-0 inset-md-left-7">
                                                    <button type="submit" class="btn btn-primary">Вход</button>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            @hasSection('sidebar')
                <div class="col-md-3">
                    @yield('sidebar')
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @yield('main')
                    </div>
                </div>
            @else
                <div class="col-md-12">
                    <div class="row">
                        @yield('main')
                    </div>
                </div>
            @endif
        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
</div>

<!-- jQuery -->
<script src="/js/core.min.js"></script>
<script src="/js/script.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

</body>

</html>
