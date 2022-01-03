<?php require_once('modifier2.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    <title>Document</title>
</head>

    <body id="page-top">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark navbar-custom navbar-scrolled">
                <div class="container px-5">
                    <a class="navbar-brand" href="#page-top">Menu navigation</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="nav-item/ajout.php">Ajout</a></li>
                        <li class="nav-item"><a class="nav-link" href="nav-item/supprimer.php">Supprimer</a></li>
                        <li class="nav-item"><a class="nav-link" href="nav-item/recherche.php">Recherche</a></li>
                        <li class="nav-item"><a class="nav-link" href="VueModifier.php">Modifier</a></li>
                        <li class="nav-item"><a class="nav-link" href="vueAnimal.php">Liste</a></li>
                        
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Header-->
            <header class="masthead text-center text-white">
                <div class="masthead-content">
                    <div class="container px-5">
                        <h1 class="masthead-heading mb-0">Gestion de l'animalerie</h1>
                        <h2 class="masthead-subheading mb-0">Tp N°3 Prog-Web PHP</h2>
                        <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Let's go -></a>
                    </div>
                </div>
                <div class="bg-circle-1 bg-circle"></div>
            </header>
            <!-- Content section 1-->
            <section id="scroll">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center">
                        
                        <div class="col-lg-8 order-lg-1">
                            <div class="p-5">
                                <h2 class="display-4">Réalisation du tp n°3</h2>
                                <p><?php
                                    include "VueAnimal.php"; 
                                    modifierPage();
                                  ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
           
</body>
</html>