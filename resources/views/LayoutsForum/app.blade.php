<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/cssFormation/style1.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fonts/all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cssFormation/Mafeuille.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>

    <style>
      

        .flex-container {
  display: flex;
  align-items: center; /* Aligner verticalement */
  gap: 10px; /* Espace entre les éléments */
}

.image10 {
  max-width: 100%;
  height: auto;
}

.vertical-line {
  height: 100%; /* Hauteur de la ligne */
  border-left: 2px solid #000; /* Couleur et épaisseur de la ligne */
  margin: 0 px;
  color: #000; /* Marge à gauche et à droite de la ligne */
  width: 80px;
  margin-left: 150px;
}

.p3 {
  flex: 1; 
  margin-left: 50px;
  /* Le texte prendra tout l'espace restant */
}

        .container23 {
            margin-left: 1080px;
            margin-top: 70px;
            position: absolute;
            background: #6CB4EE;
            box-shadow: outset;
            border: outset;
            width: 400px;
            height: 1015px;
            border-radius: 18px;
        }

        #carouselExampleDark {
            top: 70px;
            width: 1000px;
            height: 400px;
            left: 35px;
        }

        .container_explorez {
            width: 1000px;
            height: 350px;
            background-color: #6CB4EE;
        }
        /* Par défaut, pour les écrans larges */
.container23 {
    margin-left: 1080px;
    margin-top: 70px;
    position: absolute;
    background: #6CB4EE;
    box-shadow: outset;
    border: outset;
    width: 400px;
    height: 1015px;
    border-radius: 18px;
}

.card {
    width: 20rem;
    margin-left: 50px;
    margin-top: 10px;
    height: 350px;
}

/* Media query pour les écrans plus petits */
@media screen and (max-width: 768px) {
    .container23 {
        margin-left: 10px;
        margin-top: 20px;
        width: auto;
        position: relative;
    }

    .card {
        width: 100%;
        margin-left: 0;
        margin-top: 20px;
        height: auto;
    }
}


        /* Media query pour les écrans plus petits */
        @media screen and (max-width: 768px) {
            .container23 {
                margin-left: 10px;
                margin-top: 20px;
                width: auto;
                position: relative;
            }

            #carouselExampleDark {
                top: 20px;
                width: 100%;
                height: auto;
                left: 0;
            }

            .container_explorez {
                width: 100%;
                height: auto;
                margin-top: 20px;
            }
        }

        /* Par défaut, pour les écrans larges */
.container23 {
    margin-left: 1080px;
    margin-top: 70px;
    position: absolute;
    background: #6CB4EE;
    box-shadow: outset;
    border: outset;
    width: 400px;
    height: 1015px;
    border-radius: 18px;
}

.card {
    width: 20rem;
    margin-left: 50px;
    margin-top: 10px;
    height: 350px;
}

/* Media query pour les écrans de taille moyenne, par exemple, les écrans 14 pouces */
@media screen and (max-width: 1366px) {
    .container23 {
        margin-left: 20px;
        margin-top: 40px;
        width: auto;
        position: relative;
    }

    .card {
        width: 100%;
        margin-left: 0;
        margin-top: 20px;
        height: auto;
    }
}
/* Restriction de la largeur pour éviter la dispersion des éléments */
@media screen and (max-width: 1292px) {
    .container23 {
        width: 100%;
        left: 0;
        margin-left: 0;
    }
}
@media screen and (max-width: 659px) {
    .derniers1{
      display: none;
    }
}
@media screen and (max-width: 799px) {
   .container_explorez2{
     width: 100%;
   }

}

/* Media query pour les écrans plus petits */
@media screen and (max-width: 768px) {
    .container23 {
        margin-left: 10px;
        margin-top: 20px;
        width: auto;
        position: relative;
    }

    .card {
        width: 100%;
        margin-left: 0;
        margin-top: 20px;
        height: auto;
    }
}
@media screen and (width: 1292px) and (height: 517.237px) {
    .container23 {
        /* Ajustez la largeur pour éviter le défilement horizontal */
        width: 100%; /* Par exemple, utilisez 100% de la largeur de l'écran */

        /* Ajustez d'autres styles au besoin */
    }

    /* Assurez-vous d'ajuster d'autres éléments si nécessaire */
}
/* Styles de base */
.container_competence {
    display: flex;
    flex-wrap: wrap; /* Permet le passage à la ligne lorsque l'espace est insuffisant */
    justify-content: center; /* Centre les éléments horizontalement */
    margin-top: 250px;
    gap: 90px;
    padding: 0 20px; /* Ajoute un peu d'espace sur les côtés */
}

.competent_1 {
    flex: 1; /* Les éléments ont une largeur égale pour répartir l'espace */
    max-width: 400px; /* Limitation de la largeur maximale */
    text-align: center;
    margin: 15px;
}

.photo_competence {
    width: 100%; /* Pour que les images s'adaptent à la largeur du conteneur */
    max-height: 400px;
}

.competent_2 {
    font-size: 25px; /* Réduire légèrement la taille de la police pour les écrans plus petits */
    margin-top: 15px;
}

.btn {
    border: 2px solid grey;
    /* background-color: #FF7B01; */
    height: 80px;
    width: 100%; /* Les boutons prennent 100% de la largeur du conteneur */
    border-radius: 8px;
    margin-top: 15px;
}

/* Ajoutez des media queries pour les écrans de différentes tailles */
@media screen and (max-width: 768px) {
    .container_competence {
        flex-direction: column; /* Passe à une disposition verticale pour les écrans plus petits */
        align-items: center; /* Centre les éléments verticalement */
    }

    .competent_1 {
        max-width: 100%; /* Pour utiliser toute la largeur disponible */
    }

    .competent_2 {
        font-size: 20px; /* Réduire la taille de la police pour les écrans plus petits */
    }
}

/* Définir le container 23 comme invisible pour les écrans de 360 pixels ou moins */
@media screen and (max-width: 360px) {
    .container23 {
        display: none;
    }
    .btn.form-title {
        display: none;
    }
}
/* Ajuster la taille des boutons pour les écrans de 1556 pixels ou moins */
@media screen and (max-width: 1556px) {
    .btn.form-title {
        width: auto; /* Permettre aux boutons de s'adapter à la largeur du contenu */
        padding: 10px 20px; /* Ajuster la taille du padding en conséquence */
    }
}
/* Styles pour les écrans de moins de la valeur spécifiée */
@media screen and (max-width: 1200px) {
    .container_explorez2 {
        width: 100%; /* Adapter la largeur du conteneur à 100% */
    }
    
    .txtPresntationDcli {
        color: black; /* Changer la couleur du texte en noir */
    }

    /* Vous pouvez ajouter d'autres styles d'adaptation ici selon vos besoins */
}
/* Styles pour les écrans de moins de la valeur spécifiée */
@media screen and (max-width: 1144px) {
    .SectionFormation {
        margin-top: 30; /* Ajouter une marge nulle en haut de la section */
    }
    .container_explorez2 {
        width: 100%; /* Adapter la largeur du conteneur à 100% */
    }
    /* Vous pouvez ajouter d'autres styles d'adaptation ici selon vos besoins */
}
@media screen and (max-width: 800px) {
    .SectionFormation {
        margin-top: 215; /* Ajouter une marge nulle en haut de la section */
    }
    .container_explorez2 {
        width: 100%; /* Adapter la largeur du conteneur à 100% */
    }
    
    /* Vous pouvez ajouter d'autres styles d'adaptation ici selon vos besoins */
}
@media screen and (max-width: 588px) {
   .btn.form-title {
     display: none;
   }
    
    /* Vous pouvez ajouter d'autres styles d'adaptation ici selon vos besoins */
}
/* Styles pour les écrans de moins de la valeur spécifiée */
@media screen and (max-width: 962px) {
    .container23 {
        display: none; /* Cacher le container23 */
    }
    .container_explorez2 {
        width: 100%; /* Adapter la largeur du conteneur à 100% */
    }
    .card {
        width: 100%;
        margin-left: 0;
        margin-top: 20px;
        height: auto;
    }
    .SectionFormation {
        margin-top: 140px; /* Ajouter une marge nulle en haut de la section */
    }
    .delimiteurTtre1-3 .blanc {
       
    }
    .ideal {
      
    }
    .trouve {
      width: 100%;
      margin-right: 300px;
      margin-left: -250px;
      align-items: center;
    }
    .btn.form-title {
        width: auto; /* Permettre aux boutons de s'adapter à la largeur du contenu */
    }
    .container_explorez{
      width: 100%;
    }
    .derniers_card {
      width: 100%;
    }
    /* Vous pouvez ajouter d'autres styles d'adaptation ici selon vos besoins */
}


    </style>
    
</head>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style1.css">
	<link rel="stylesheet" href="../css/fonts/all.css">
	<link rel="stylesheet" href="../css/Mafeuille.css">
    <link rel="stylesheet" href="..css/bootstrap.min.css">
    <title>Document</title>
</head>
  
<body style='background-color: #fff;'>
    @include('LayoutsForum.navbar') <!-- Inclut la barre de navigation -->
    
    <div class="container">
        @yield('contentApp') <!-- Insère le contenu spécifique de chaque vue enfant ici -->
    </div> 


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+JwF5sqU6s9bG2F5KzR5+8n5WxRR4P5DgykNTd5JU6u/j2F2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua9z5g5F5RRD05Pw5rG5C5Vz5d5v5u5f5Q5f5F5M5e5V5z5u5I5Q5x5f5f5G5" crossorigin="anonymous"></script>
    
      
</body>
</html>