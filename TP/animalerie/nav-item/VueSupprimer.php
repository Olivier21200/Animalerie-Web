<?php require_once('supprimer.php');?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Gestion Animalerie" />
        <meta name="author" content="Olivier Sirugue" />

        <title>Gestion animalerie</title>

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom navbar-scrolled">
            <div class="container px-5">
                <a class="navbar-brand" href="../index.php">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="VueAjout.php">Ajout</a></li>
                        <li class="nav-item"><a class="nav-link" href="VueSupprimer.php">Supprimer</a></li>
                        <li class="nav-item"><a class="nav-link" href="VueRecherche.php">Recherche</a></li>
                        <li class="nav-item"><a class="nav-link" href="../modifier.php">Modifier</a></li>
                        <li class="nav-item"><a class="nav-link" href="../vueAnimal.php">Liste</a></li>
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
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Tp n°3 M3104 - Programmation web -></a>
                </div>
            </div>

            
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded" src="../assets/img/03.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Suprimer un animal</h2>
                                <?php supprimerPage(); ?>           
                        </div>
                    </div>
                </div>
            </div>
        </section>     

        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Olivier Sirugue - S3B1 | Lundi 11 decembre 2021</p></div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>



