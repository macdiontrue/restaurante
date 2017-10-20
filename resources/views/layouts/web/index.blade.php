
<!DOCTYPE HTML>
<html>
<head>
    <title>Fast Food</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Photo-Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('js/menu_jquery.js')}}"></script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            <h1><a href="{{url('/')}}"> <img src="{{asset('images/logokuda.png')}}"  alt=""/></a></h1>
        </div>
        <div class="top_right">
            <ul>
                <li><a href="{{url('registar')}}">Registe seu restaurante</a></li>|
                <li><a href="{{url('registar')}}">Regista-se</a></li>|
                <li class="login" >
                    <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                        <div id="loginBox">
                            <form id="loginForm">
                                <fieldset id="body">
                                    <fieldset>
                                        <label for="email">Email </label>
                                        <input type="text" name="email" id="email">
                                    </fieldset>
                                    <fieldset>
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password">
                                    </fieldset>
                                    <input type="submit" id="login" value="Entrar">
                                    <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Lembra me</i></label>
                                </fieldset>
                                <span><a href="#">Esqueceu seu password?</a></span>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@yield('conteudo')

<div class="grid_3">
    <div class="container">
        {{--<ul id="footer-links">--}}
            {{--<li><a href="#">Terms of Use</a></li>--}}
            {{--<li><a href="#">Royalty Free License</a></li>--}}
            {{--<li><a href="#">Extended License</a></li>--}}
            {{--<li><a href="#">Privacy</a></li>--}}
            {{--<li><a href="support.html">Support</a></li>--}}
            {{--<li><a href="about.html">About Us</a></li>--}}
            {{--<li><a href="faq.html">FAQ</a></li>--}}
            {{--<li><a href="#">Categories</a></li>--}}
        {{--</ul>--}}
        <p>Copyright © 2017 Swakuda. Todos direitos reservados.  </p>
    </div>
</div>
</body>
</html>