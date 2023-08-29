<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid margeur">
        <div class="navbarFixation">
            <nav class="navbar  navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
                <div class="container">
                    <!-- <a class="navbar-brand" href="index.html">Papermag <span>Magazine</span></a> -->
                    <div class="logosoifauf" style="display: flex; flex-wrap:nowrap ">
                        <a href="{{ route('forumP') }}"><img src="{{ asset('image/oif.jpg') }}" class="logoDclic"
                                style="height: 70px;"> <img src="{{ asset('image/auf.jpeg') }}" class="logoDclic"
                                alt="" style="height:30px;"></a>
                    </div>
                    {{-- <form action="#" class="searchform order-sm-start shearchbar order-lg-last">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control pl-3" placeholder="Rechercher">
                            <button type="submit" placeholder="" class="form-control search"><span
                                    class="fa fa-search"></span></button>
                        </div>
                    </form> --}}

                    {{-- 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button> --}}

                    <a href="{{ route('login') }}" class="navbar-toggler "  data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation"><span style="background-color: rgb(78, 95, 204); border-radius:5px; padding:3px;  text-transform: lowercase; ">utilisateurs</span></a>

                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav m-auto" style="margin-right: -30px">
                            <li class="nav-item active"><a href="{{ route('index') }}" class="nav-link"
                                    style="font-size:15px ">Accueil</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#FORMAT" id="dropdown04"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="font-size:15px ">Formations</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="#DevWeb">DEVELOPPEMENT WEB</a>
                                    <a class="dropdown-item" href="#Copuntig">CLOUD COMPUTING</a>
                                    <a class="dropdown-item" href="#IOT">IOT</a>

                                </div>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link"style="font-size:15px ">Blog</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('login') }}"
                                    class="nav-link"style="font-size:15px ">Espace
                                    utilisateurs</a></li>

                        </ul>
                    </div>
                </div>
            </nav>

        </div>

        <script src="{{ asset('css/js/jquery.min.js') }}"></script>
        <script src="{{ asset('css/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('css/js/main.js') }}"></script>
        <script src="{{ asset('css/js/popper.js') }}"></script>
        <script src="{{ asset('css/js/all.min.js') }}"></script>
        <script src="{{ asset('css/js/popper.js') }}"></script>
</body>

</html>
