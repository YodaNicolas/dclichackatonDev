<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container-fluid ">
    <div class="bodyContact">
        <button type="button" class="btn btn-outline-dark contact">
            <h2>Contactez-nous</h2>
        </button>
        <div class="tout ">
            <div class="container-fluid carrenoir " id="contact" style="display: flex;">

                <div class="textefooter">
                    <div>
                        <h2 id="mon_ancre">FORUM du programme<br>D-CLIC PRO
                        </h2>
                    </div>
                    <div>23-24 lieu UNZ • 75007 Koudougou (BurkinaFaso)<br>

                        Téléphone1 (226) 01 42 60 67<br>

                        Téléphone2 (226) 75 67 64 26</div></br>
                    <div class="Offre">
                        <div class="opp">Opportunités<br></div>
                        Stages<br>
                        Offre d'emplois <br>
                        Missions de volontariat <br>
                        Formations<br>
                    </div></br>

                    <div style="height: 105px">

                    </div>
                </div>
                <form class="form">
                    <div>
                        <h2>Nous ecrire...</h2>
                    </div>
                    <div class="mb-3 mail">
                        <label for="exampleInputEmail1" class="form-label">Entrez votre email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"></div>
                    </div></br>
                    <div class="mb-3 mail">
                        <label for="exampleInputPassword1" class="form-label">Entrez votre mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div></br>
                    <div class="mb-3  mail">
                        <label for="exampleInputPassword1" class="form-label">Entrez votre message</label>
                        <textarea id="subject" name="subject" placeholder="Entrez votre message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
@yield('content')

</html>
