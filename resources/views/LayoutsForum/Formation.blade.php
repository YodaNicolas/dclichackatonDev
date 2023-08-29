<!doctype html>
<html lang="en">

<head>
    <title>Website menu 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/styleFormaton.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/cssFormation/style1.css') }}">
    <link rel="stylesheet" href="fonts/all.css">
    <link rel="stylesheet" href="{{ asset('css/cssFormation/Mafeuille.css') }}">


</head>
@yield('contentformation')

<body >
    <div class="container-fluid margeur">
        <!-- END nav -->
 

        <section class="SectionFormation">
            
            <h1 class="SousTitreFormation">
                Développement web
            </h1>
            <div class="row  PositionLignePublicCibl">
                <img src="{{ asset('css/image/PHOTOS/pouyaSeul.png') }}" alt="" class="col-lg-4 col-sm-12 col-md-12 ">
                <p class="col-lg-4 col-sm-12 col-md-12 couleurfond CentrTxt">
                    Un espace de contenu dédié aux astuces et conseils sur la recherche d’emploi et
                    l’attitude professionnelle.
                </p>
                <img src="{{ asset('css/image/devweb.jpg ') }}" alt="" class="col-lg-4 col-sm-12 col-md-12 ">
                <div id="Copuntig"></div>
            </div>
            <h1 class="SousTitreFormation">
                Cloud computing
            </h1>
            <div class="row  PositionLignePublicCibl">
                <p class="col-lg-4 col-sm-12 col-md-12 couleurfond CentrTxt">
                    Un espace d’échanges et de prise de rendez-vous pour des entretiens éclairs
                    (job dating) afin de favoriser des rencontres professionnelles entre les apprenants et
                    les entreprises.
                </p>
                <img src="{{ asset('css/image/cloud comput.png ') }}" alt="" class="col-lg-4 col-sm-12 col-md-12 ">
                <p class="col-lg-4 col-sm-12 col-md-12 couleurfond CentrTxt">
                    Avec le forum D_Clic Pro les apprenants pourront consulter les
                    fiches de poste des recruteurs, effectuer les demandes de rendez-vous en ligne, éditer
                    automatiquement un planning de rendez-vous en ligne. De même, les entreprises ou
                    des structures de recrutement participantes pourront consulter la fiche les profils des
                    apprenants, leurs démos et leurs portfolios, et manifester leur intérêt à rencontrer les
                    apprenants ciblés en éditant un planning de rendez-vous.
                </p>
            </div>
            <div id="IOT"></div>
            <h1 class="SousTitreFormation">
                IOT
            </h1>
            <div class="row  PositionLignePublicCibl">
                <img src=" {{ asset('css/image/iot.png') }}" alt=""
                    class="col-lg-4 col-sm-12 col-md-12 ">
                <p class="col-lg-4 col-sm-12 col-md-12 couleurfond CentrTxt">
                    Le forum D-CLIC Pro,vise a valoriser les apprenants
                    du programme D-CLIC du Burkina, et faciliter le réseautage entre les apprenants et les
                    entreprises.
                </p>
                <img src="{{ asset('css/image/iot.png') }}" alt="" class=" col-lg-4 col-sm-12 col-md-12 ">
                <div id="pariePays"></div>
            </div>

        </section>

        <!-- FOOTER SECTION -->


    </div>
    <!-- END BODY -->

    <script src="fonts/all.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/main.js"></script>







</body>

</html>
