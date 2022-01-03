<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Bouton en php</title>
</head>
<body>
    <div id="pagePrincipal"> 
     
    <!-- top and title page formulaire -->
    <div class="container-fluid r p-5 bg-dark text-green-coolor text-center ">

        <h1>Multi-Boutons</h1>
            <p class="text-white-coolor" >TP n° 2 / M3104 - Programmation web</p> 
    </div>

    <!-- border-3 border-danger rounded border-->
    <div class="container "> 
        <div class="mb-3 mt-3"> 
           
    <center>
    <h2>Exercice 1 – Formulaire Multi-Boutons</h2><br>

        <form action="Multi-bouton.php" method="post">
            <h3>Cliquer sur un bouton</h3> 
                          
               <input type="submit" name="submit" class="btn btn-primary" value="BT1"/>
                
               <input type="submit" name="submit" class="btn btn-primary" value="BT2"/>

               <input type="submit" name="submit" class="btn btn-primary" value="BT3"/>
        </form>
            </div>
    </center>      
            
            <?php 
                // fichier script.php
                if (isset($_POST['submit'])) 
                {
                    echo "<p> <center> Vous avez cliqué sur ".$_POST["submit"]." </center> </p>";
                    
                }

            ?>
    </div>

    <div class="container"></div>

    <!-- Footer -->
    <footer class="page-footer font-small bg-primary">
        <div class="footer-copyright  bg-dark text-center text-white-coolor py-5">© 2021 Copyright:  Olivier Sirugue S3B1  |-/-\-| Vendredi 25 novembre 2021</div>
    </footer>

    </div>
</body>
</html>