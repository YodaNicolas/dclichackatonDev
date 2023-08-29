@extends('LayoutsForum.footer')
@section('contentfooter')
@endsection

@extends('LayoutsForum.app')
@section('contentApp')
    <div class="container">

        <section class="SectionpaysHotes1">
            <div class="container23"
                style="margin-left: 899px; margin-top: 70px; position: absolute; background-color: white; box-shadow: outset; border: outset; width: 300px; height: 925px; border-radius: 18px;">
                <div class="card form-title" style="width: 250px; margin-left: 20px; margin-top: 10px; height: 150px;">
                    <h2>Publicité</h2>
                    <img class="ad-image" src="" alt="Publicité" style="width: 250px; height: 250px;">
                    <p class="ad-description">Description de la publicité</p>
                    {{-- <a class="ad-link" href="#" class="btn">En savoir plus</a> --}}
                </div>
                <div class="card form-title" style="width: 250px; margin-left: 20px; margin-top: 108px; height: 350px;">
                    <h2>les partenaires</h2>
                    <img class="ad-image1" src="image/auf.JPEG" alt="Publicité 1" style="width: 250px; height: 75px;"> <br>
                    <img class="ad-image1" src="image/LOGOYulcomTechnologies.jpeg" alt="Publicité 1"
                        style="max-width: 100%; height: 75px;">
                    <img class="ad-image1" src="image/LOGOpubbixtech.png" alt="Publicité 1"
                        style="width: 250px; height: 100px;">
                    <!-- <a class="ad-link" href="#" class="btn">En savoir plus</a> -->
                </div>
                <div class="card form-title" style="width: 250px; margin-left: 20px; margin-top: 22px; height: 260px;">
                    <!-- <h2>Publicité</h2> -->
                    <img class="ad-image1" src="image/oif.jpg" alt="Publicité" style="width: 250px; height: 150px;">
                    <img class="ad-image1" src="image/LOGOCidoc.png" alt="Publicité 1" style="width: 250px; height: 160px;">

                    <!-- <a class="ad-link" href="#" class="btn">En savoir plus</a> -->
                </div>
            </div>


            <div id="carouselExampleDark" class="carousel carousel-dark slide" style="width: 70%; margin-left: -30px"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('css/image/AFFICHE 4.jpg') }}" class="d-block w-100"
                            style="height: 570px; width: 70%;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="image/AFFICHE 2.jpg" class="d-block w-100" style="height: 570px;width: 70%;"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item"data-bs-interval="10000">
                        <img src="image/AFFICHE 3.jpg" class="d-block w-100" style="height: 570px;width: 70%;"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev" style="max-width: 20%">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next"style="margin-left: 20px">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!--------------------------------explorez les cours-->

            <div class="container_explorez"
                style="margin-top: 252px; width: 70%;display: flex; justify-content:center; align-items:center; height: 260px;background-color: rgb(53, 171, 226); ">
                <div class="container_explorez_1 " style="">
                    <p class="cours" style=" color: #ffff; text-align: justify;">Bienvenue dans votre communauté
                        professionnelle</p>
                    <!-- <a href="#" class="cours " style=" color: #ffff; left: 20px; "> D-Clic</a> <br> -->
                    <p class="cours " style=" color: #ffff; text-align: justify;">l’Organisation internationale de la
                        francophonie (OIF) dont <br>l’objectif est de proposer
                        des formations certifiantes à la <br>jeunesse francophone, en vue de « renforcer leurs compétences
                        <br>
                        numériques ,techniques, professionnelles et multiplier <br> leurs chances d’accéder à des emplois
                        décents. <br>
                    </p>

                    {{-- <img class="photo_competence" style="width: 300px; height: 300px; position: absolute; margin-left:500px;top:35px;" src="image/compétences.svg" alt=""><br> --}}
                    <!-- <button class="learn_button" type="button" style=" font-size:20px; color: black;
                          border-radius:30px; margin-top:20px; background: #50A572; width:220px,  ">Learn More</button> -->

                    <!-- <button class="btn form-title" style="border: 2px solid grey; background:  #fff; height: 50px; width: 250px; border-radius: 30px; margin-top: 50px;">
                                            <a class="btn_1" style="text-decoration: none; color: black;" href="#">Learn More</a></button> -->
                    {{-- <button class="btn form-title"
                        style="border: 2px solid grey; background:  #fff; height: 50px; width: 250px; border-radius: 30px; margin-top: 10px;">
                        <a class="btn_1" style="text-decoration: none; color: black;"
                            href="#">Formation</a></button> --}}
                </div>

            </div>


            <!------------les derniers cours-->
            <div class="derniers_cour" style="margin-top: 45px">
                <div class="derniers">
                    <a class="derniers1" href="#"
                        style='font-size:40px;margin-left: 180px; color:black;'>Evènements</a>
                </div>
                <div class="row derniers_card "
                    style="width: 100%; gap: 10px; justify-content: space-between; margin-left:15px; box-shadow: #252525; margin-top: 60px;">
                    <div class="card form-title"
                        style="display: flex; width: 18rem; gap: 0px; justify-content: space-between;  box-shadow: outset ">
                        <img src="image/dclic2023.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">L’Organisation internationale de la Francophonie (OIF) à koudougou,
                                Bobo-Dioulasso et Ouagadougou.</p>
                            <a href="#" style="background:#fff; height: 50px; color: black;"></a>
                        </div>
                    </div>
                    <div class="card form-title"
                        style="width: 18rem; gap: 0px; justify-content: space-between;  box-shadow: outset ">
                        <img src="image/card.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">L’Organisation internationale de la Francophonie (OIF) à koudougou,
                                Bobo-Dioulasso et Ouagadougou.</p>
                            <a href="#" style="background:#fff; height: 50px; color: black;"></a>
                        </div>
                    </div>

                    <div class="card form-title" style="width: 18rem;">
                        <img src="image/card (3).jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">L’Organisation internationale de la Francophonie (OIF) à koudougou,
                                Bobo-Dioulasso et Ouagadougou. </p>
                            <a href="#" style="background:#fff; height: 50px; color: black;"></a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row derniers_card "
                style="width: 100%; gap: 10px; justify-content: space-between; margin-left:15px; box-shadow: #252525;">
                <div class="card form-title"
                    style="width: 18rem; gap: 0px; justify-content: space-between;  box-shadow: outset ">
                    <img src="image/apprenants filles.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">L’Organisation internationale de la Francophonie (OIF) à koudougou,
                            Bobo-Dioulasso et Ouagadougou.</p>
                        .</p>
                        <a href="#" style="background:#fff; height: 50px; color: black;"></a>
                    </div>
                </div>
                <div class="card form-title"
                    style="width: 18rem; gap: 0px; justify-content: space-between;  box-shadow: outset ">
                    <img src="image/OIF_DCLIC_COUVERTURE HOR.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">L’Organisation internationale de la Francophonie (OIF) à koudougou,
                            Bobo-Dioulasso et Ouagadougou.</p>
                        <a href="#" style="background:#fff; height: 50px; color: black;"></a>
                    </div>
                </div>

                <div class="card form-title" style="width: 18rem;">
                    <img src="image/DCLICMada2023.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">L’Organisation internationale de la Francophonie (OIF) à koudougou,
                            Bobo-Dioulasso et Ouagadougou.</p>
                        <a href="#" style="background:#fff; height: 50px; color: black;"></a>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!------------------------trouvez les cours ideat et lew sujet les plus populaire-->
    <section class="SectionFormation">



        </div>
        </div>

        </div>
    </section>
    <section class="SectionFormation">
        <a class="btn form-title align-items-center"
            style="border: 2px solid grey; background:  rgb(53, 171, 226);; height: 50px; width: 550px; border-radius: 30px; margin-top: 30px; margin-left: 150px;"
            href="{{ route('forumP') }}">voir plus</a>


    </section>

    <!-- FOOTER SECTION -->

    <!-- END BODY -->

    <script src="fonts/all.js"></script>
        <script src="{{ asset('css/js/jquery.min.js') }}"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/main.js"></script>

    </div>
    <!--div class="footer">
                          
                        </div-->
    <script>
        const adImage = document.getElementById('adImage');
        const adDescription = document.getElementById('adDescription');
        const adLink = document.getElementById('adLink');

        ////////////////////////////////////////////////////////////



        const ads = [{
                image: 'image/logo.png',
                description: 'faitez votre demande de formation, avec D-Clic,',
                link: 'offre.html'
            },
            {
                image: 'image/devweb.jpg',
                description: 'Developpez vos compétences en informatique avec D-Clic',
                link: 'web.html'
            },
            {
                image: 'image/iot.jpg',
                description: 'Developpez vos compétences en iot avec D-Clic',
                link: 'iot.html'
            },
            // Ajoutez autant d'objets d'annonce que nécessaire
            // ...
        ];

        let currentIndex = 0;
        const adImages = document.querySelectorAll('.ad-image');
        const adDescriptions = document.querySelectorAll('.ad-description');
        const adLinks = document.querySelectorAll('.ad-link');

        function showNextAd() {
            currentIndex = (currentIndex + 1) % ads.length;
            const currentAd = ads[currentIndex];

            for (let i = 0; i < adImages.length; i++) {
                adImages[i].src = currentAd.image;
                adDescriptions[i].textContent = currentAd.description;
                adLinks[i].href = currentAd.link;
            }
        }

        showNextAd();
        setInterval(showNextAd, 10000);
    </script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/app.js"></script>
    <script src="jquery-3.6.4.js"></script>
    </div>
@endsection
