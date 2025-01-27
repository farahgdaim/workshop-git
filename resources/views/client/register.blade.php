<!DOCTYPE HTML>
<html lang="fr">

<head>
    <title>Inscription</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{ asset('client/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <div class="main-bg">
        <!-- title -->
        <h1>Créer un compte client</h1>
        <!-- //title -->
        <!-- content -->
        <div class="sub-main-w3">
            <div class="bg-content-w3pvt">
                <div class="top-content-style">
                    <a href="{{route('front.index')}}"><img src=" {{ asset('client/images/ShopOnline.jpg') }}"  height=88px alt="" />
                </a>
                </div>
                <form action="{{ route('client.register.post') }}" method="post">
                    @csrf
                    <p class="legend">S'inscrire ici<span class="fa fa-hand-o-down"></span>
                    @if (session('status'))
                        <div style="color: green;">{{ session('status') }}</div>
                    @endif
                    </p> 
                    <div class="input">
                        <input type="text" placeholder="Nom" name="nom" required />
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="input">
                        <input type="text" placeholder="Prenom" name="prenom" required />
                        <span class="fa fa-user"></span>
                    </div>
                    <div class="input">
                        <input type="Email" placeholder="Email" name="email" required />
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Password" name="password" required />
                        <span class="fa fa-lock"></span>
                    </div>
                    <button type="submit" class="btn submit">
                        <span class="fa fa-sign-in"></span>
                    </button>
                </form>
                <a href="{{route('client.login')}}" class="bottom-text-w3ls">Déja un compte ?Se connecter maintenant </a>
            </div>
        </div>
        <!-- //content -->
        <!-- copyright -->
        <div class="copyright">
            <h2>&copy; 2019 Latest Login Form. All rights reserved | Design by
                <a href="http://w3layouts.com" target="_blank">W3layouts</a>
            </h2>
        </div>
        <!-- //copyright -->
    </div>
</body>

</html>
</body>

</html>