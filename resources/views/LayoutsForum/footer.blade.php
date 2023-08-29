<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleFooterhh.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Mafeuille.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleFoot.css') }}">
    <title>Document</title>
</head>
 @yield('contentfooter')  
 
<body>
    <div class="container-fluid text-center footer">
        <div class="FlouNoir">
            <div class="row align-items-center">
                <div class="LogoPrprtes">
                    <div class="container-fluid ">
                        <div class="col-lg-4 col-md-12 col-sm-12 ">
                            <img class="lgo" src="images/logo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class=" lgn1Foot">
                    <div class="CoteGauche">
                        <div class="L1Gche">
                            <div class="DivTelMail">
                                <p class="LiensFoot">Telephonne: 07-07-07-07</p>
                                <p class="LiensFoot">Email: oif.dclic.@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class=" L1droite">
                        <a class="LiensFoot" href="{{ route('index') }}">Accueil</a>
                        <a class="LiensFoot" href="#FORMAT">Formation</a>
                        <a class="LiensFoot" href="#pariePays">Pays</a>
                        <a class="LiensFoot" href="#CIBLE">Cible</a>
                        <a class="LiensFoot" href="pages/contact.html">Contact</a>
                    </div>
                </div>

                <div class="LgnSuiv row align-item-center justify-content-center">
                    <h1 class="blanc svlg"><strong> Suivez nous. </strong></h1>
                    <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                        <a target="_blank" href="pages/facebook.html"> <i
                                class="fa-brands fa-square-facebook fa-shake icon" style="color: #ffffff;"></i></a>
                        <a target="_blank" href="pages/tweter.html"><i class="fa-brands fa-square-twitter fa-shake icon"
                                style="color: #ffffff;"></i></a>
                        <a href="pages/linkdin.html"><i class="fa-brands fa-linkedin fa-shake icon"
                                style="color: #ffffff;"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('css/fonts/all.js') }}"></script>
    <script src="{{ asset('css/js/jquery.min.js') }}"></script>
    <script src="{{ asset('css/js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src=" {{ asset('js/main.js') }}"></script>
</body>

</html>
