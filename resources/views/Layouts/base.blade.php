    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('Styles/Css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/login.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/register.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/formRegister.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/profil.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/cardprofil.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/listemanager.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/niveau.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/listeentrep.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/EntprseRegister.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/range.css') }}">
        <link rel="stylesheet" href="{{ asset('Styles/Css/base.css') }}">
        <title>Document</title>
    </head>

    <body>
       
        <div class="navbarFixation">
            <nav class=" navbar navbar-expand-lg navbar-dark" style="background-color: rgb(168, 168, 194)">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <div class="logosoifauf" style="display: flex; flex-wrap:nowrap ">
                            <a href="{{ route('forumP') }}"><img src="{{ asset('image/oif.jpg') }}" class="logoDclic"
                                    style="height: 70px;"> <img src="{{ asset('image/auf.jpeg') }}" class="logoDclic"
                                    alt="" style="height:30px;"></a>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Acceuil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Formations</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Espaces
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Espace évènements</a></li>
                                    <li><a class="dropdown-item" href="#">Espace entreprises</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Espace apprenants</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#" tabindex="-1" aria-disabled="false">Blog</a>
                            </li>
                        </ul>
                        <div class="d-flex">

                            @if (auth()->check())
                                {{-- <p>Bienvenue, {{ auth()->user()->name }} !</p> --}}
                                <a href="{{ route('deconnection') }}" class="btn btn-primary" type="submit">Se
                                    deconnecter</a>
                            @else
                                <?php
                                $RouteActuelle = Route::current();
                                // Obtenir le nom de la route
                                $routeName = $RouteActuelle->getName();
                                ?>
                                @if ($routeName == 'Connection')
                                    <a href="{{ route('Compte.create') }}" class="btn btn-primary"
                                        type="submit">S'inscrire
                                    </a>
                                @else
                                    <a href="{{ route('Connection') }}" class="btn btn-primary" type="submit">Se
                                        connecter</a>
                                @endif
                            @endif
                        </div>
                        {{-- <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> --}}
                    </div>
                </div>
            </nav>
        </div>
        <div class="margeGenerale">

            @yield('content')

        </div>


        <script src="{{ asset('Styles/Js/bootstrap.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="{{ asset('Styles/Js/liste.js') }}"></script>
    </body>

    </html>
