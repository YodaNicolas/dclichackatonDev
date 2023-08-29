 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 </head>
 <br>

 <body>
     <section>
         <div class="container-fluid carre" style="background-color: white;  width: 100%; height: 500px;"><br>
             <div class="Objectifs">
                 <button type="button" class="btn btn-outline- ">
                     <h3>Objectifs du FORUM D-CLIC PRO</h3>
                 </button>
             </div>
             <br>
             <div class="container-fluid">
                 <div id="carouselExampleDark" class="carousel carousel-dark slide">
                     <div class="carousel-indicators">
                         <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                             class="active" aria-current="true" aria-label="Slide 1"></button>
                         <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                             aria-label="Slide 2"></button>
                         <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                             aria-label="Slide 3"></button>
                     </div>
                     <div class="carousel-inner">
                         <div class="carousel-item active" data-bs-interval="10000">
                             <img src="{{ asset('imageeee/AFROTO.jpg') }}" class="d-block w-100" alt="..."
                                 width="150px" height="400px">
                             <div class="carousel-caption d-none d-md-block">
                                 <h5 class="forum">Forum D-CLIC PRO en Mauritanie</h5>
                                 <p class="forum">Ce Forum visait deux objectifs principaux : mettre en contact la
                                     centaine
                                     de jeunes
                                     formés dans le cadre du Programme D-CLIC avec les entreprises recruteuses et les
                                     acteurs
                                     de
                                     l’écosystème entrepreneurial mauritanien pour multiplier leurs chances d’insertion
                                     professionnelle ;
                                     et faire la promotion des opportunités professionnelles offertes par le numérique.
                                     .</p>
                             </div>
                         </div>
                         <div class="carousel-item" data-bs-interval="2000">
                             <img src="imageeee/1.jpeg" class="d-block w-100" alt="..." width="150px"
                                 height="400px">
                             <div class="carousel-caption d-none d-md-block">
                                 <h3 style="color: rgb(255, 238, 0)">D-CLIC-PRO</h3>
                                 {{-- <p>Some representative placeholder content for the second slide.</p> --}}
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img src="{{ asset('imageeee/3.jpg') }}" class="d-block w-100" alt="..."
                                 width="150px" height="400px">
                             <div class="carousel-caption d-none d-md-block">
                                 <h5>D-CLIC Tunisie</h5>
                                 {{-- <p>Some representative placeholder content for the third slide.</p> --}}
                             </div>
                         </div>
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                         data-bs-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                         data-bs-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Next</span>
                     </button>
                 </div>
             </div>
         </div><br>
         <div class="container-fluid">
             <p class="card-text  ">Les 400 participants ont ainsi pu assister à un programme riche comprenant des
                 ateliers
                 de
                 préparation à l’emploi,des rendez-vous de recrutement ainsi que des témoignages inspirants, activités
                 qui
                 devront contribuer à l’insertion professionnelle des jeunes formés en Mauritanie dans le cadre du
                 programme
                 D-CLIC. L’évènement a également permis<br> de mettre en exergue à travers une exposition les talents
                 des
                 jeunes
                 mauritaniens dans l’innovation et la création numérique ainsi que leur créativité dans la valorisation
                 du
                 patrimoine culturel local à l’aide des technologies numériques.

                 Ouvert en présence de la Représentante de l’OIF pour l’Afrique du Nord, Mme Haoua Acyl, le Forum D-CLIC
                 Pro
                 a
                 été l’occasion pour les apprenants de présenter leurs travaux de fin de formation et de recevoir leurs
                 certificats. L’OIF a offert à chacun des trois meilleurs lauréats un ordinateur pour les accompagner
                 dans la
                 suite de leur projet entrepreneurial.

             </p>
         </div>
         <br>
     </section>
     <div class="container-fluid carre" style="background-color: rgb(53,171,226);  width: 100%; height: 570px;"><br>
         <div class="Temoignages">
             <button type="button" class="btn btn-outline bouttonn">
                 <h3 class="bienfaits">Temoignages des bienfaits du FORUM D-CLIC PRO </h3>
             </button>
         </div>

         <div class="card-group temoin">
             <div class="card">


                 <video controls class="card-img-top" style="max-width: 800px; width: 100%; height: auto; margin: 0 auto;">
                     <source src="{{ asset('video/Charlotte .mp4') }}" type="video/mp4">
                     Votre navigateur ne prend pas en charge la lecture de vidéos.
                 </video>
                 
                  
                 <div class="card-body">
                     <h5 class="card-title">Temoin 1</h5>
                     <p class="card-text"> D-CLIC, formez-vous au numérique avec l’OIF », un programme phare de l’OIF
                         qui
                         donne la
                         priorité aux jeunes et aux femmes.</p>
                     <p class="card-text"><small class="text-body-secondary">La joie se voit sur son visage</small></p>
                 </div>
             </div>
             <div class="card">
                 <video controls class="card-img-top" style="max-width: 800px; width: 100%; height: auto; margin: 0 auto;">
                     <source src="{{ asset('video/D-CLIC.mp4') }}" type="video/mp4">
                     Votre navigateur ne prend pas en charge la lecture de vidéos.
                 </video>
                 
                 <div class="card-body">
                     <h5 class="card-title">Temoin 2</h5>
                     <p class="card-text"> D-CLIC, formez-vous au numérique avec l’OIF », un programme phare de l’OIF
                         qui
                         donne la
                         priorité aux jeunes et aux femmes.</p>
                     <p class="card-text"><small class="text-body-secondary">La satisfaction se lit clairement sur son
                             visage</small></p>
                 </div>
             </div>
             <div class="card">
                  <video controls class="card-img-top" style="max-width: 800px; width: 100%; height: auto; margin: 0 auto;">
                     <source src="{{ asset('video/formez-vous au numérique .mp4') }}" type="video/mp4">
                     Votre navigateur ne prend pas en charge la lecture de vidéos.
                 </video>
                 <div class="card-body">
                     <h5 class="card-title">Temoin 3</h5>
                     <p class="card-text"> D-CLIC, formez-vous au numérique avec l’OIF », un programme phare de l’OIF
                         qui
                         donne la
                         priorité aux jeunes et aux femmes.p>
                     <p class="card-text"><small class="text-body-secondary">La joie se voit sur son visage</small>
                     </p>
                 </div>
             </div>
         </div>
     </div>
     @yield('contenuforum')
     <br>

 </body>

 </html>
